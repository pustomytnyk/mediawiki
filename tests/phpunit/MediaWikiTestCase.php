<?php

use MediaWiki\Logger\LegacySpi;
use MediaWiki\Logger\LoggerFactory;
use MediaWiki\Logger\MonologSpi;
use MediaWiki\MediaWikiServices;
use Psr\Log\LoggerInterface;
use Wikimedia\Rdbms\IDatabase;
use Wikimedia\Rdbms\IMaintainableDatabase;
use Wikimedia\Rdbms\Database;
use Wikimedia\Rdbms\LBFactory;
use Wikimedia\TestingAccessWrapper;

/**
 * @since 1.18
 */
abstract class MediaWikiTestCase extends PHPUnit\Framework\TestCase {

	use MediaWikiCoversValidator;
	use PHPUnit4And6Compat;

	/**
	 * The service locator created by prepareServices(). This service locator will
	 * be restored after each test. Tests that pollute the global service locator
	 * instance should use overrideMwServices() to isolate the test.
	 *
	 * @var MediaWikiServices|null
	 */
	private static $serviceLocator = null;

	/**
	 * $called tracks whether the setUp and tearDown method has been called.
	 * class extending MediaWikiTestCase usually override setUp and tearDown
	 * but forget to call the parent.
	 *
	 * The array format takes a method name as key and anything as a value.
	 * By asserting the key exist, we know the child class has called the
	 * parent.
	 *
	 * This property must be private, we do not want child to override it,
	 * they should call the appropriate parent method instead.
	 */
	private $called = [];

	/**
	 * @var TestUser[]
	 * @since 1.20
	 */
	public static $users;

	/**
	 * Primary database
	 *
	 * @var Database
	 * @since 1.18
	 */
	protected $db;

	/**
	 * @var array
	 * @since 1.19
	 */
	protected $tablesUsed = []; // tables with data

	private static $useTemporaryTables = true;
	private static $reuseDB = false;
	private static $dbSetup = false;
	private static $oldTablePrefix = '';

	/**
	 * Original value of PHP's error_reporting setting.
	 *
	 * @var int
	 */
	private $phpErrorLevel;

	/**
	 * Holds the paths of temporary files/directories created through getNewTempFile,
	 * and getNewTempDirectory
	 *
	 * @var array
	 */
	private $tmpFiles = [];

	/**
	 * Holds original values of MediaWiki configuration settings
	 * to be restored in tearDown().
	 * See also setMwGlobals().
	 * @var array
	 */
	private $mwGlobals = [];

	/**
	 * Holds list of MediaWiki configuration settings to be unset in tearDown().
	 * See also setMwGlobals().
	 * @var array
	 */
	private $mwGlobalsToUnset = [];

	/**
	 * Holds original contents of interwiki table
	 * @var IResultWrapper
	 */
	private $interwikiTable = null;

	/**
	 * Holds original loggers which have been replaced by setLogger()
	 * @var LoggerInterface[]
	 */
	private $loggers = [];

	/**
	 * Table name prefixes. Oracle likes it shorter.
	 */
	const DB_PREFIX = 'unittest_';
	const ORA_DB_PREFIX = 'ut_';

	/**
	 * @var array
	 * @since 1.18
	 */
	protected $supportedDBs = [
		'mysql',
		'sqlite',
		'postgres',
		'oracle'
	];

	public function __construct( $name = null, array $data = [], $dataName = '' ) {
		parent::__construct( $name, $data, $dataName );

		$this->backupGlobals = false;
		$this->backupStaticAttributes = false;
	}

	public function __destruct() {
		// Complain if self::setUp() was called, but not self::tearDown()
		// $this->called['setUp'] will be checked by self::testMediaWikiTestCaseParentSetupCalled()
		if ( isset( $this->called['setUp'] ) && !isset( $this->called['tearDown'] ) ) {
			throw new MWException( static::class . "::tearDown() must call parent::tearDown()" );
		}
	}

	public static function setUpBeforeClass() {
		parent::setUpBeforeClass();

		// Get the service locator, and reset services if it's not done already
		self::$serviceLocator = self::prepareServices( new GlobalVarConfig() );
	}

	/**
	 * Convenience method for getting an immutable test user
	 *
	 * @since 1.28
	 *
	 * @param string[] $groups Groups the test user should be in.
	 * @return TestUser
	 */
	public static function getTestUser( $groups = [] ) {
		return TestUserRegistry::getImmutableTestUser( $groups );
	}

	/**
	 * Convenience method for getting a mutable test user
	 *
	 * @since 1.28
	 *
	 * @param string[] $groups Groups the test user should be added in.
	 * @return TestUser
	 */
	public static function getMutableTestUser( $groups = [] ) {
		return TestUserRegistry::getMutableTestUser( __CLASS__, $groups );
	}

	/**
	 * Convenience method for getting an immutable admin test user
	 *
	 * @since 1.28
	 *
	 * @param string[] $groups Groups the test user should be added to.
	 * @return TestUser
	 */
	public static function getTestSysop() {
		return self::getTestUser( [ 'sysop', 'bureaucrat' ] );
	}

	/**
	 * Returns a WikiPage representing an existing page.
	 *
	 * @since 1.32
	 *
	 * @param Title|string|null $title
	 * @return WikiPage
	 * @throws MWException
	 */
	protected function getExistingTestPage( $title = null ) {
		$title = ( $title === null ) ? 'UTPage' : $title;
		$title = is_string( $title ) ? Title::newFromText( $title ) : $title;
		$page = WikiPage::factory( $title );

		if ( !$page->exists() ) {
			$user = self::getTestSysop()->getUser();
			$page->doEditContent(
				new WikitextContent( 'UTContent' ),
				'UTPageSummary',
				EDIT_NEW | EDIT_SUPPRESS_RC,
				false,
				$user
			);
		}

		return $page;
	}

	/**
	 * Returns a WikiPage representing a non-existing page.
	 *
	 * @since 1.32
	 *
	 * @param Title|string|null $title
	 * @return WikiPage
	 * @throws MWException
	 */
	protected function getNonexistingTestPage( $title = null ) {
		$title = ( $title === null ) ? 'UTPage-' . rand( 0, 100000 ) : $title;
		$title = is_string( $title ) ? Title::newFromText( $title ) : $title;
		$page = WikiPage::factory( $title );

		if ( $page->exists() ) {
			$page->doDeleteArticle( 'Testing' );
		}

		return $page;
	}

	/**
	 * Prepare service configuration for unit testing.
	 *
	 * This calls MediaWikiServices::resetGlobalInstance() to allow some critical services
	 * to be overridden for testing.
	 *
	 * prepareServices() only needs to be called once, but should be called as early as possible,
	 * before any class has a chance to grab a reference to any of the global services
	 * instances that get discarded by prepareServices(). Only the first call has any effect,
	 * later calls are ignored.
	 *
	 * @note This is called by PHPUnitMaintClass::finalSetup.
	 *
	 * @see MediaWikiServices::resetGlobalInstance()
	 *
	 * @param Config $bootstrapConfig The bootstrap config to use with the new
	 *        MediaWikiServices. Only used for the first call to this method.
	 * @return MediaWikiServices
	 */
	public static function prepareServices( Config $bootstrapConfig ) {
		static $services = null;

		if ( !$services ) {
			$services = self::resetGlobalServices( $bootstrapConfig );
		}
		return $services;
	}

	/**
	 * Reset global services, and install testing environment.
	 * This is the testing equivalent of MediaWikiServices::resetGlobalInstance().
	 * This should only be used to set up the testing environment, not when
	 * running unit tests. Use MediaWikiTestCase::overrideMwServices() for that.
	 *
	 * @see MediaWikiServices::resetGlobalInstance()
	 * @see prepareServices()
	 * @see MediaWikiTestCase::overrideMwServices()
	 *
	 * @param Config|null $bootstrapConfig The bootstrap config to use with the new
	 *        MediaWikiServices.
	 * @return MediaWikiServices
	 */
	private static function resetGlobalServices( Config $bootstrapConfig = null ) {
		$oldServices = MediaWikiServices::getInstance();
		$oldConfigFactory = $oldServices->getConfigFactory();
		$oldLoadBalancerFactory = $oldServices->getDBLoadBalancerFactory();

		$testConfig = self::makeTestConfig( $bootstrapConfig );

		MediaWikiServices::resetGlobalInstance( $testConfig );

		$serviceLocator = MediaWikiServices::getInstance();
		self::installTestServices(
			$oldConfigFactory,
			$oldLoadBalancerFactory,
			$serviceLocator
		);
		return $serviceLocator;
	}

	/**
	 * Create a config suitable for testing, based on a base config, default overrides,
	 * and custom overrides.
	 *
	 * @param Config|null $baseConfig
	 * @param Config|null $customOverrides
	 *
	 * @return Config
	 */
	private static function makeTestConfig(
		Config $baseConfig = null,
		Config $customOverrides = null
	) {
		$defaultOverrides = new HashConfig();

		if ( !$baseConfig ) {
			$baseConfig = MediaWikiServices::getInstance()->getBootstrapConfig();
		}

		/* Some functions require some kind of caching, and will end up using the db,
		 * which we can't allow, as that would open a new connection for mysql.
		 * Replace with a HashBag. They would not be going to persist anyway.
		 */
		$hashCache = [ 'class' => HashBagOStuff::class, 'reportDupes' => false ];
		$objectCaches = [
				CACHE_DB => $hashCache,
				CACHE_ACCEL => $hashCache,
				CACHE_MEMCACHED => $hashCache,
				'apc' => $hashCache,
				'apcu' => $hashCache,
				'wincache' => $hashCache,
			] + $baseConfig->get( 'ObjectCaches' );

		$defaultOverrides->set( 'ObjectCaches', $objectCaches );
		$defaultOverrides->set( 'MainCacheType', CACHE_NONE );
		$defaultOverrides->set( 'JobTypeConf', [ 'default' => [ 'class' => JobQueueMemory::class ] ] );

		// Use a fast hash algorithm to hash passwords.
		$defaultOverrides->set( 'PasswordDefault', 'A' );

		$testConfig = $customOverrides
			? new MultiConfig( [ $customOverrides, $defaultOverrides, $baseConfig ] )
			: new MultiConfig( [ $defaultOverrides, $baseConfig ] );

		return $testConfig;
	}

	/**
	 * @param ConfigFactory $oldConfigFactory
	 * @param LBFactory $oldLoadBalancerFactory
	 * @param MediaWikiServices $newServices
	 *
	 * @throws MWException
	 */
	private static function installTestServices(
		ConfigFactory $oldConfigFactory,
		LBFactory $oldLoadBalancerFactory,
		MediaWikiServices $newServices
	) {
		// Use bootstrap config for all configuration.
		// This allows config overrides via global variables to take effect.
		$bootstrapConfig = $newServices->getBootstrapConfig();
		$newServices->resetServiceForTesting( 'ConfigFactory' );
		$newServices->redefineService(
			'ConfigFactory',
			self::makeTestConfigFactoryInstantiator(
				$oldConfigFactory,
				[ 'main' => $bootstrapConfig ]
			)
		);
		$newServices->resetServiceForTesting( 'DBLoadBalancerFactory' );
		$newServices->redefineService(
			'DBLoadBalancerFactory',
			function ( MediaWikiServices $services ) use ( $oldLoadBalancerFactory ) {
				return $oldLoadBalancerFactory;
			}
		);
	}

	/**
	 * @param ConfigFactory $oldFactory
	 * @param Config[] $configurations
	 *
	 * @return Closure
	 */
	private static function makeTestConfigFactoryInstantiator(
		ConfigFactory $oldFactory,
		array $configurations
	) {
		return function ( MediaWikiServices $services ) use ( $oldFactory, $configurations ) {
			$factory = new ConfigFactory();

			// clone configurations from $oldFactory that are not overwritten by $configurations
			$namesToClone = array_diff(
				$oldFactory->getConfigNames(),
				array_keys( $configurations )
			);

			foreach ( $namesToClone as $name ) {
				$factory->register( $name, $oldFactory->makeConfig( $name ) );
			}

			foreach ( $configurations as $name => $config ) {
				$factory->register( $name, $config );
			}

			return $factory;
		};
	}

	/**
	 * Resets some well known services that typically have state that may interfere with unit tests.
	 * This is a lightweight alternative to resetGlobalServices().
	 *
	 * @note There is no guarantee that no references remain to stale service instances destroyed
	 * by a call to doLightweightServiceReset().
	 *
	 * @throws MWException if called outside of PHPUnit tests.
	 *
	 * @see resetGlobalServices()
	 */
	private function doLightweightServiceReset() {
		global $wgRequest, $wgJobClasses;

		foreach ( $wgJobClasses as $type => $class ) {
			JobQueueGroup::singleton()->get( $type )->delete();
		}
		JobQueueGroup::destroySingletons();

		ObjectCache::clear();
		$services = MediaWikiServices::getInstance();
		$services->resetServiceForTesting( 'MainObjectStash' );
		$services->resetServiceForTesting( 'LocalServerObjectCache' );
		$services->getMainWANObjectCache()->clearProcessCache();
		FileBackendGroup::destroySingleton();
		DeferredUpdates::clearPendingUpdates();

		// TODO: move global state into MediaWikiServices
		RequestContext::resetMain();
		if ( session_id() !== '' ) {
			session_write_close();
			session_id( '' );
		}

		$wgRequest = new FauxRequest();
		MediaWiki\Session\SessionManager::resetCache();
	}

	public function run( PHPUnit_Framework_TestResult $result = null ) {
		$needsResetDB = false;

		if ( !self::$dbSetup || $this->needsDB() ) {
			// set up a DB connection for this test to use

			self::$useTemporaryTables = !$this->getCliArg( 'use-normal-tables' );
			self::$reuseDB = $this->getCliArg( 'reuse-db' );

			$this->db = wfGetDB( DB_MASTER );

			$this->checkDbIsSupported();

			if ( !self::$dbSetup ) {
				$this->setupAllTestDBs();
				$this->addCoreDBData();
			}

			// TODO: the DB setup should be done in setUpBeforeClass(), so the test DB
			// is available in subclass's setUpBeforeClass() and setUp() methods.
			// This would also remove the need for the HACK that is oncePerClass().
			if ( $this->oncePerClass() ) {
				$this->setUpSchema( $this->db );
				$this->resetDB( $this->db, $this->tablesUsed );
				$this->addDBDataOnce();
			}

			$this->addDBData();
			$needsResetDB = true;
		}

		parent::run( $result );

		if ( $needsResetDB ) {
			$this->resetDB( $this->db, $this->tablesUsed );
		}
	}

	/**
	 * @return bool
	 */
	private function oncePerClass() {
		// Remember current test class in the database connection,
		// so we know when we need to run addData.

		$class = static::class;

		$first = !isset( $this->db->_hasDataForTestClass )
			|| $this->db->_hasDataForTestClass !== $class;

		$this->db->_hasDataForTestClass = $class;
		return $first;
	}

	/**
	 * @since 1.21
	 *
	 * @return bool
	 */
	public function usesTemporaryTables() {
		return self::$useTemporaryTables;
	}

	/**
	 * Obtains a new temporary file name
	 *
	 * The obtained filename is enlisted to be removed upon tearDown
	 *
	 * @since 1.20
	 *
	 * @return string Absolute name of the temporary file
	 */
	protected function getNewTempFile() {
		$fileName = tempnam( wfTempDir(), 'MW_PHPUnit_' . static::class . '_' );
		$this->tmpFiles[] = $fileName;

		return $fileName;
	}

	/**
	 * obtains a new temporary directory
	 *
	 * The obtained directory is enlisted to be removed (recursively with all its contained
	 * files) upon tearDown.
	 *
	 * @since 1.20
	 *
	 * @return string Absolute name of the temporary directory
	 */
	protected function getNewTempDirectory() {
		// Starting of with a temporary /file/.
		$fileName = $this->getNewTempFile();

		// Converting the temporary /file/ to a /directory/
		// The following is not atomic, but at least we now have a single place,
		// where temporary directory creation is bundled and can be improved
		unlink( $fileName );
		$this->assertTrue( wfMkdirParents( $fileName ) );

		return $fileName;
	}

	protected function setUp() {
		parent::setUp();
		$this->called['setUp'] = true;

		$this->phpErrorLevel = intval( ini_get( 'error_reporting' ) );

		// Cleaning up temporary files
		foreach ( $this->tmpFiles as $fileName ) {
			if ( is_file( $fileName ) || ( is_link( $fileName ) ) ) {
				unlink( $fileName );
			} elseif ( is_dir( $fileName ) ) {
				wfRecursiveRemoveDir( $fileName );
			}
		}

		if ( $this->needsDB() && $this->db ) {
			// Clean up open transactions
			while ( $this->db->trxLevel() > 0 ) {
				$this->db->rollback( __METHOD__, 'flush' );
			}
			// Check for unsafe queries
			if ( $this->db->getType() === 'mysql' ) {
				$this->db->query( "SET sql_mode = 'STRICT_ALL_TABLES'" );
			}
		}

		// Store contents of interwiki table in case it changes.  Unfortunately, we seem to have no
		// way to do this only when needed, because tablesUsed can be changed mid-test.
		if ( $this->db ) {
			$this->interwikiTable = $this->db->select( 'interwiki', '*', '', __METHOD__ );
		}

		// Reset all caches between tests.
		$this->doLightweightServiceReset();

		// XXX: reset maintenance triggers
		// Hook into period lag checks which often happen in long-running scripts
		$services = MediaWikiServices::getInstance();
		$lbFactory = $services->getDBLoadBalancerFactory();
		Maintenance::setLBFactoryTriggers( $lbFactory, $services->getMainConfig() );

		ob_start( 'MediaWikiTestCase::wfResetOutputBuffersBarrier' );
	}

	protected function addTmpFiles( $files ) {
		$this->tmpFiles = array_merge( $this->tmpFiles, (array)$files );
	}

	protected function tearDown() {
		global $wgRequest, $wgSQLMode;

		$status = ob_get_status();
		if ( isset( $status['name'] ) &&
			$status['name'] === 'MediaWikiTestCase::wfResetOutputBuffersBarrier'
		) {
			ob_end_flush();
		}

		$this->called['tearDown'] = true;
		// Cleaning up temporary files
		foreach ( $this->tmpFiles as $fileName ) {
			if ( is_file( $fileName ) || ( is_link( $fileName ) ) ) {
				unlink( $fileName );
			} elseif ( is_dir( $fileName ) ) {
				wfRecursiveRemoveDir( $fileName );
			}
		}

		if ( $this->needsDB() && $this->db ) {
			// Clean up open transactions
			while ( $this->db->trxLevel() > 0 ) {
				$this->db->rollback( __METHOD__, 'flush' );
			}
			if ( $this->db->getType() === 'mysql' ) {
				$this->db->query( "SET sql_mode = " . $this->db->addQuotes( $wgSQLMode ) );
			}
		}

		// Restore mw globals
		foreach ( $this->mwGlobals as $key => $value ) {
			$GLOBALS[$key] = $value;
		}
		foreach ( $this->mwGlobalsToUnset as $value ) {
			unset( $GLOBALS[$value] );
		}
		if (
			array_key_exists( 'wgExtraNamespaces', $this->mwGlobals ) ||
			in_array( 'wgExtraNamespaces', $this->mwGlobalsToUnset )
		) {
			$this->resetNamespaces();
		}
		$this->mwGlobals = [];
		$this->mwGlobalsToUnset = [];
		$this->restoreLoggers();

		if ( self::$serviceLocator && MediaWikiServices::getInstance() !== self::$serviceLocator ) {
			MediaWikiServices::forceGlobalInstance( self::$serviceLocator );
		}

		// TODO: move global state into MediaWikiServices
		RequestContext::resetMain();
		if ( session_id() !== '' ) {
			session_write_close();
			session_id( '' );
		}
		$wgRequest = new FauxRequest();
		MediaWiki\Session\SessionManager::resetCache();
		MediaWiki\Auth\AuthManager::resetCache();

		$phpErrorLevel = intval( ini_get( 'error_reporting' ) );

		if ( $phpErrorLevel !== $this->phpErrorLevel ) {
			ini_set( 'error_reporting', $this->phpErrorLevel );

			$oldHex = strtoupper( dechex( $this->phpErrorLevel ) );
			$newHex = strtoupper( dechex( $phpErrorLevel ) );
			$message = "PHP error_reporting setting was left dirty: "
				. "was 0x$oldHex before test, 0x$newHex after test!";

			$this->fail( $message );
		}

		parent::tearDown();
	}

	/**
	 * Make sure MediaWikiTestCase extending classes have called their
	 * parent setUp method
	 *
	 * With strict coverage activated in PHP_CodeCoverage, this test would be
	 * marked as risky without the following annotation (T152923).
	 * @coversNothing
	 */
	final public function testMediaWikiTestCaseParentSetupCalled() {
		$this->assertArrayHasKey( 'setUp', $this->called,
			static::class . '::setUp() must call parent::setUp()'
		);
	}

	/**
	 * Sets a service, maintaining a stashed version of the previous service to be
	 * restored in tearDown
	 *
	 * @since 1.27
	 *
	 * @param string $name
	 * @param object $object
	 */
	protected function setService( $name, $object ) {
		// If we did not yet override the service locator, so so now.
		if ( MediaWikiServices::getInstance() === self::$serviceLocator ) {
			$this->overrideMwServices();
		}

		MediaWikiServices::getInstance()->disableService( $name );
		MediaWikiServices::getInstance()->redefineService(
			$name,
			function () use ( $object ) {
				return $object;
			}
		);

		if ( $name === 'ContentLanguage' ) {
			$this->doSetMwGlobals( [ 'wgContLang' => $object ] );
		}
	}

	/**
	 * Sets a global, maintaining a stashed version of the previous global to be
	 * restored in tearDown
	 *
	 * The key is added to the array of globals that will be reset afterwards
	 * in the tearDown().
	 *
	 * @par Example
	 * @code
	 *     protected function setUp() {
	 *         $this->setMwGlobals( 'wgRestrictStuff', true );
	 *     }
	 *
	 *     function testFoo() {}
	 *
	 *     function testBar() {}
	 *         $this->assertTrue( self::getX()->doStuff() );
	 *
	 *         $this->setMwGlobals( 'wgRestrictStuff', false );
	 *         $this->assertTrue( self::getX()->doStuff() );
	 *     }
	 *
	 *     function testQuux() {}
	 * @endcode
	 *
	 * @param array|string $pairs Key to the global variable, or an array
	 *  of key/value pairs.
	 * @param mixed|null $value Value to set the global to (ignored
	 *  if an array is given as first argument).
	 *
	 * @note To allow changes to global variables to take effect on global service instances,
	 *       call overrideMwServices().
	 *
	 * @since 1.21
	 */
	protected function setMwGlobals( $pairs, $value = null ) {
		if ( is_string( $pairs ) ) {
			$pairs = [ $pairs => $value ];
		}

		if ( isset( $pairs['wgContLang'] ) ) {
			throw new MWException(
				'No setting $wgContLang, use setContentLang() or setService( \'ContentLanguage\' )'
			);
		}

		$this->doSetMwGlobals( $pairs, $value );
	}

	/**
	 * An internal method that allows setService() to set globals that tests are not supposed to
	 * touch.
	 */
	private function doSetMwGlobals( $pairs, $value = null ) {
		$this->stashMwGlobals( array_keys( $pairs ) );

		foreach ( $pairs as $key => $value ) {
			$GLOBALS[$key] = $value;
		}

		if ( array_key_exists( 'wgExtraNamespaces', $pairs ) ) {
			$this->resetNamespaces();
		}
	}

	/**
	 * Must be called whenever namespaces are changed, e.g., $wgExtraNamespaces is altered.
	 * Otherwise old namespace data will lurk and cause bugs.
	 */
	private function resetNamespaces() {
		MWNamespace::clearCaches();
		Language::clearCaches();

		// We can't have the TitleFormatter holding on to an old Language object either
		// @todo We shouldn't need to reset all the aliases here.
		$services = MediaWikiServices::getInstance();
		$services->resetServiceForTesting( 'TitleFormatter' );
		$services->resetServiceForTesting( 'TitleParser' );
		$services->resetServiceForTesting( '_MediaWikiTitleCodec' );
	}

	/**
	 * Check if we can back up a value by performing a shallow copy.
	 * Values which fail this test are copied recursively.
	 *
	 * @param mixed $value
	 * @return bool True if a shallow copy will do; false if a deep copy
	 *  is required.
	 */
	private static function canShallowCopy( $value ) {
		if ( is_scalar( $value ) || $value === null ) {
			return true;
		}
		if ( is_array( $value ) ) {
			foreach ( $value as $subValue ) {
				if ( !is_scalar( $subValue ) && $subValue !== null ) {
					return false;
				}
			}
			return true;
		}
		return false;
	}

	/**
	 * Stashes the global, will be restored in tearDown()
	 *
	 * Individual test functions may override globals through the setMwGlobals() function
	 * or directly. When directly overriding globals their keys should first be passed to this
	 * method in setUp to avoid breaking global state for other tests
	 *
	 * That way all other tests are executed with the same settings (instead of using the
	 * unreliable local settings for most tests and fix it only for some tests).
	 *
	 * @param array|string $globalKeys Key to the global variable, or an array of keys.
	 *
	 * @note To allow changes to global variables to take effect on global service instances,
	 *       call overrideMwServices().
	 *
	 * @since 1.23
	 */
	protected function stashMwGlobals( $globalKeys ) {
		if ( is_string( $globalKeys ) ) {
			$globalKeys = [ $globalKeys ];
		}

		foreach ( $globalKeys as $globalKey ) {
			// NOTE: make sure we only save the global once or a second call to
			// setMwGlobals() on the same global would override the original
			// value.
			if (
				!array_key_exists( $globalKey, $this->mwGlobals ) &&
				!array_key_exists( $globalKey, $this->mwGlobalsToUnset )
			) {
				if ( !array_key_exists( $globalKey, $GLOBALS ) ) {
					$this->mwGlobalsToUnset[$globalKey] = $globalKey;
					continue;
				}
				// NOTE: we serialize then unserialize the value in case it is an object
				// this stops any objects being passed by reference. We could use clone
				// and if is_object but this does account for objects within objects!
				if ( self::canShallowCopy( $GLOBALS[$globalKey] ) ) {
					$this->mwGlobals[$globalKey] = $GLOBALS[$globalKey];
				} elseif (
					// Many MediaWiki types are safe to clone. These are the
					// ones that are most commonly stashed.
					$GLOBALS[$globalKey] instanceof Language ||
					$GLOBALS[$globalKey] instanceof User ||
					$GLOBALS[$globalKey] instanceof FauxRequest
				) {
					$this->mwGlobals[$globalKey] = clone $GLOBALS[$globalKey];
				} elseif ( $this->containsClosure( $GLOBALS[$globalKey] ) ) {
					// Serializing Closure only gives a warning on HHVM while
					// it throws an Exception on Zend.
					// Workaround for https://github.com/facebook/hhvm/issues/6206
					$this->mwGlobals[$globalKey] = $GLOBALS[$globalKey];
				} else {
					try {
						$this->mwGlobals[$globalKey] = unserialize( serialize( $GLOBALS[$globalKey] ) );
					} catch ( Exception $e ) {
						$this->mwGlobals[$globalKey] = $GLOBALS[$globalKey];
					}
				}
			}
		}
	}

	/**
	 * @param mixed $var
	 * @param int $maxDepth
	 *
	 * @return bool
	 */
	private function containsClosure( $var, $maxDepth = 15 ) {
		if ( $var instanceof Closure ) {
			return true;
		}
		if ( !is_array( $var ) || $maxDepth === 0 ) {
			return false;
		}

		foreach ( $var as $value ) {
			if ( $this->containsClosure( $value, $maxDepth - 1 ) ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * Merges the given values into a MW global array variable.
	 * Useful for setting some entries in a configuration array, instead of
	 * setting the entire array.
	 *
	 * @param string $name The name of the global, as in wgFooBar
	 * @param array $values The array containing the entries to set in that global
	 *
	 * @throws MWException If the designated global is not an array.
	 *
	 * @note To allow changes to global variables to take effect on global service instances,
	 *       call overrideMwServices().
	 *
	 * @since 1.21
	 */
	protected function mergeMwGlobalArrayValue( $name, $values ) {
		if ( !isset( $GLOBALS[$name] ) ) {
			$merged = $values;
		} else {
			if ( !is_array( $GLOBALS[$name] ) ) {
				throw new MWException( "MW global $name is not an array." );
			}

			// NOTE: do not use array_merge, it screws up for numeric keys.
			$merged = $GLOBALS[$name];
			foreach ( $values as $k => $v ) {
				$merged[$k] = $v;
			}
		}

		$this->setMwGlobals( $name, $merged );
	}

	/**
	 * Stashes the global instance of MediaWikiServices, and installs a new one,
	 * allowing test cases to override settings and services.
	 * The previous instance of MediaWikiServices will be restored on tearDown.
	 *
	 * @since 1.27
	 *
	 * @param Config|null $configOverrides Configuration overrides for the new MediaWikiServices
	 *        instance.
	 * @param callable[] $services An associative array of services to re-define. Keys are service
	 *        names, values are callables.
	 *
	 * @return MediaWikiServices
	 * @throws MWException
	 */
	protected function overrideMwServices( Config $configOverrides = null, array $services = [] ) {
		if ( !$configOverrides ) {
			$configOverrides = new HashConfig();
		}

		$oldInstance = MediaWikiServices::getInstance();
		$oldConfigFactory = $oldInstance->getConfigFactory();
		$oldLoadBalancerFactory = $oldInstance->getDBLoadBalancerFactory();

		$testConfig = self::makeTestConfig( null, $configOverrides );
		$newInstance = new MediaWikiServices( $testConfig );

		// Load the default wiring from the specified files.
		// NOTE: this logic mirrors the logic in MediaWikiServices::newInstance.
		$wiringFiles = $testConfig->get( 'ServiceWiringFiles' );
		$newInstance->loadWiringFiles( $wiringFiles );

		// Provide a traditional hook point to allow extensions to configure services.
		Hooks::run( 'MediaWikiServices', [ $newInstance ] );

		foreach ( $services as $name => $callback ) {
			$newInstance->redefineService( $name, $callback );
		}

		self::installTestServices(
			$oldConfigFactory,
			$oldLoadBalancerFactory,
			$newInstance
		);
		MediaWikiServices::forceGlobalInstance( $newInstance );

		return $newInstance;
	}

	/**
	 * @since 1.27
	 * @param string|Language $lang
	 */
	public function setUserLang( $lang ) {
		RequestContext::getMain()->setLanguage( $lang );
		$this->setMwGlobals( 'wgLang', RequestContext::getMain()->getLanguage() );
	}

	/**
	 * @since 1.27
	 * @param string|Language $lang
	 */
	public function setContentLang( $lang ) {
		if ( $lang instanceof Language ) {
			$langCode = $lang->getCode();
			$langObj = $lang;
		} else {
			$langCode = $lang;
			$langObj = Language::factory( $langCode );
		}
		$this->setMwGlobals( 'wgLanguageCode', $langCode );
		$this->setService( 'ContentLanguage', $langObj );
	}

	/**
	 * Alters $wgGroupPermissions for the duration of the test.  Can be called
	 * with an array, like
	 *   [ '*' => [ 'read' => false ], 'user' => [ 'read' => false ] ]
	 * or three values to set a single permission, like
	 *   $this->setGroupPermissions( '*', 'read', false );
	 *
	 * @since 1.31
	 * @param array|string $newPerms Either an array of permissions to change,
	 *   in which case the next two parameters are ignored; or a single string
	 *   identifying a group, to use with the next two parameters.
	 * @param string|null $newKey
	 * @param mixed|null $newValue
	 */
	public function setGroupPermissions( $newPerms, $newKey = null, $newValue = null ) {
		global $wgGroupPermissions;

		$this->stashMwGlobals( 'wgGroupPermissions' );

		if ( is_string( $newPerms ) ) {
			$newPerms = [ $newPerms => [ $newKey => $newValue ] ];
		}

		foreach ( $newPerms as $group => $permissions ) {
			foreach ( $permissions as $key => $value ) {
				$wgGroupPermissions[$group][$key] = $value;
			}
		}
	}

	/**
	 * Sets the logger for a specified channel, for the duration of the test.
	 * @since 1.27
	 * @param string $channel
	 * @param LoggerInterface $logger
	 */
	protected function setLogger( $channel, LoggerInterface $logger ) {
		// TODO: Once loggers are managed by MediaWikiServices, use
		//       overrideMwServices() to set loggers.

		$provider = LoggerFactory::getProvider();
		$wrappedProvider = TestingAccessWrapper::newFromObject( $provider );
		$singletons = $wrappedProvider->singletons;
		if ( $provider instanceof MonologSpi ) {
			if ( !isset( $this->loggers[$channel] ) ) {
				$this->loggers[$channel] = $singletons['loggers'][$channel] ?? null;
			}
			$singletons['loggers'][$channel] = $logger;
		} elseif ( $provider instanceof LegacySpi ) {
			if ( !isset( $this->loggers[$channel] ) ) {
				$this->loggers[$channel] = $singletons[$channel] ?? null;
			}
			$singletons[$channel] = $logger;
		} else {
			throw new LogicException( __METHOD__ . ': setting a logger for ' . get_class( $provider )
				. ' is not implemented' );
		}
		$wrappedProvider->singletons = $singletons;
	}

	/**
	 * Restores loggers replaced by setLogger().
	 * @since 1.27
	 */
	private function restoreLoggers() {
		$provider = LoggerFactory::getProvider();
		$wrappedProvider = TestingAccessWrapper::newFromObject( $provider );
		$singletons = $wrappedProvider->singletons;
		foreach ( $this->loggers as $channel => $logger ) {
			if ( $provider instanceof MonologSpi ) {
				if ( $logger === null ) {
					unset( $singletons['loggers'][$channel] );
				} else {
					$singletons['loggers'][$channel] = $logger;
				}
			} elseif ( $provider instanceof LegacySpi ) {
				if ( $logger === null ) {
					unset( $singletons[$channel] );
				} else {
					$singletons[$channel] = $logger;
				}
			}
		}
		$wrappedProvider->singletons = $singletons;
		$this->loggers = [];
	}

	/**
	 * @return string
	 * @since 1.18
	 */
	public function dbPrefix() {
		return self::getTestPrefixFor( $this->db );
	}

	/**
	 * @param IDatabase $db
	 * @return string
	 * @since 1.32
	 */
	public static function getTestPrefixFor( IDatabase $db ) {
		return $db->getType() == 'oracle' ? self::ORA_DB_PREFIX : self::DB_PREFIX;
	}

	/**
	 * @return bool
	 * @since 1.18
	 */
	public function needsDB() {
		// If the test says it uses database tables, it needs the database
		if ( $this->tablesUsed ) {
			return true;
		}

		// If the test class says it belongs to the Database group, it needs the database.
		// NOTE: This ONLY checks for the group in the class level doc comment.
		$rc = new ReflectionClass( $this );
		if ( preg_match( '/@group +Database/im', $rc->getDocComment() ) ) {
			return true;
		}

		return false;
	}

	/**
	 * Insert a new page.
	 *
	 * Should be called from addDBData().
	 *
	 * @since 1.25 ($namespace in 1.28)
	 * @param string|Title $pageName Page name or title
	 * @param string $text Page's content
	 * @param int|null $namespace Namespace id (name cannot already contain namespace)
	 * @param User|null $user If null, static::getTestSysop()->getUser() is used.
	 * @return array Title object and page id
	 */
	protected function insertPage(
		$pageName,
		$text = 'Sample page for unit test.',
		$namespace = null,
		User $user = null
	) {
		if ( is_string( $pageName ) ) {
			$title = Title::newFromText( $pageName, $namespace );
		} else {
			$title = $pageName;
		}

		if ( !$user ) {
			$user = static::getTestSysop()->getUser();
		}
		$comment = __METHOD__ . ': Sample page for unit test.';

		$page = WikiPage::factory( $title );
		$page->doEditContent( ContentHandler::makeContent( $text, $title ), $comment, 0, false, $user );

		return [
			'title' => $title,
			'id' => $page->getId(),
		];
	}

	/**
	 * Stub. If a test suite needs to add additional data to the database, it should
	 * implement this method and do so. This method is called once per test suite
	 * (i.e. once per class).
	 *
	 * Note data added by this method may be removed by resetDB() depending on
	 * the contents of $tablesUsed.
	 *
	 * To add additional data between test function runs, override prepareDB().
	 *
	 * @see addDBData()
	 * @see resetDB()
	 *
	 * @since 1.27
	 */
	public function addDBDataOnce() {
	}

	/**
	 * Stub. Subclasses may override this to prepare the database.
	 * Called before every test run (test function or data set).
	 *
	 * @see addDBDataOnce()
	 * @see resetDB()
	 *
	 * @since 1.18
	 */
	public function addDBData() {
	}

	/**
	 * @since 1.32
	 */
	protected function addCoreDBData() {
		if ( $this->db->getType() == 'oracle' ) {
			# Insert 0 user to prevent FK violations
			# Anonymous user
			if ( !$this->db->selectField( 'user', '1', [ 'user_id' => 0 ] ) ) {
				$this->db->insert( 'user', [
					'user_id' => 0,
					'user_name' => 'Anonymous' ], __METHOD__, [ 'IGNORE' ] );
			}

			# Insert 0 page to prevent FK violations
			# Blank page
			if ( !$this->db->selectField( 'page', '1', [ 'page_id' => 0 ] ) ) {
				$this->db->insert( 'page', [
					'page_id' => 0,
					'page_namespace' => 0,
					'page_title' => ' ',
					'page_restrictions' => null,
					'page_is_redirect' => 0,
					'page_is_new' => 0,
					'page_random' => 0,
					'page_touched' => $this->db->timestamp(),
					'page_latest' => 0,
					'page_len' => 0 ], __METHOD__, [ 'IGNORE' ] );
			}
		}

		SiteStatsInit::doPlaceholderInit();

		User::resetIdByNameCache();

		// Make sysop user
		$user = static::getTestSysop()->getUser();

		// Make 1 page with 1 revision
		$page = WikiPage::factory( Title::newFromText( 'UTPage' ) );
		if ( $page->getId() == 0 ) {
			$page->doEditContent(
				new WikitextContent( 'UTContent' ),
				'UTPageSummary',
				EDIT_NEW | EDIT_SUPPRESS_RC,
				false,
				$user
			);
			// an edit always attempt to purge backlink links such as history
			// pages. That is unneccessary.
			JobQueueGroup::singleton()->get( 'htmlCacheUpdate' )->delete();
			// WikiPages::doEditUpdates randomly adds RC purges
			JobQueueGroup::singleton()->get( 'recentChangesUpdate' )->delete();

			// doEditContent() probably started the session via
			// User::loadFromSession(). Close it now.
			if ( session_id() !== '' ) {
				session_write_close();
				session_id( '' );
			}
		}
	}

	/**
	 * Restores MediaWiki to using the table set (table prefix) it was using before
	 * setupTestDB() was called. Useful if we need to perform database operations
	 * after the test run has finished (such as saving logs or profiling info).
	 *
	 * This is called by phpunit/bootstrap.php after the last test.
	 *
	 * @since 1.21
	 */
	public static function teardownTestDB() {
		global $wgJobClasses;

		if ( !self::$dbSetup ) {
			return;
		}

		Hooks::run( 'UnitTestsBeforeDatabaseTeardown' );

		foreach ( $wgJobClasses as $type => $class ) {
			// Delete any jobs under the clone DB (or old prefix in other stores)
			JobQueueGroup::singleton()->get( $type )->delete();
		}

		CloneDatabase::changePrefix( self::$oldTablePrefix );

		self::$oldTablePrefix = false;
		self::$dbSetup = false;
	}

	/**
	 * Prepares the given database connection for usage in the context of usage tests.
	 * This sets up clones database tables and changes the table prefix as appropriate.
	 * If the database connection already has cloned tables, calling this method has no
	 * effect. The tables are not re-cloned or reset in that case.
	 *
	 * @param IMaintainableDatabase $db
	 */
	protected function prepareConnectionForTesting( IMaintainableDatabase $db ) {
		if ( !self::$dbSetup ) {
			throw new LogicException(
				'Cannot use prepareConnectionForTesting()'
				. ' if the test case is not defined to use the database!'
			);
		}

		if ( isset( $db->_originalTablePrefix ) ) {
			// The DB connection was already prepared for testing.
			return;
		}

		$testPrefix = self::getTestPrefixFor( $db );
		$oldPrefix = $db->tablePrefix();

		$tablesCloned = self::listTables( $db );

		if ( $oldPrefix === $testPrefix ) {
			// The database connection already has the test prefix, but presumably not
			// the cloned tables. This is the typical case, since the LBFactory will
			// have the prefix set during testing, but LoadBalancers will still return
			// connections that don't have the cloned table structure.
			$oldPrefix = self::$oldTablePrefix;
		}

		$dbClone = new CloneDatabase( $db, $tablesCloned, $testPrefix, $oldPrefix );
		$dbClone->useTemporaryTables( self::$useTemporaryTables );

		$db->_originalTablePrefix = $oldPrefix;

		if ( ( $db->getType() == 'oracle' || !self::$useTemporaryTables ) && self::$reuseDB ) {
			throw new LogicException( 'Cannot clone database tables' );
		} else {
			$dbClone->cloneTableStructure();
		}
	}

	/**
	 * Setups a database with cloned tables using the given prefix.
	 *
	 * If reuseDB is true and certain conditions apply, it will just change the prefix.
	 * Otherwise, it will clone the tables and change the prefix.
	 *
	 * @param IMaintainableDatabase $db Database to use
	 * @param string|null $prefix Prefix to use for test tables. If not given, the prefix is determined
	 *        automatically for $db.
	 * @return bool True if tables were cloned, false if only the prefix was changed
	 */
	protected static function setupDatabaseWithTestPrefix(
		IMaintainableDatabase $db,
		$prefix = null
	) {
		if ( $prefix === null ) {
			$prefix = self::getTestPrefixFor( $db );
		}

		if ( ( $db->getType() == 'oracle' || !self::$useTemporaryTables ) && self::$reuseDB ) {
			$db->tablePrefix( $prefix );
			return false;
		}

		if ( !isset( $db->_originalTablePrefix ) ) {
			$oldPrefix = $db->tablePrefix();

			if ( $oldPrefix === $prefix ) {
				// table already has the correct prefix, but presumably no cloned tables
				$oldPrefix = self::$oldTablePrefix;
			}

			$db->tablePrefix( $oldPrefix );
			$tablesCloned = self::listTables( $db );
			$dbClone = new CloneDatabase( $db, $tablesCloned, $prefix, $oldPrefix );
			$dbClone->useTemporaryTables( self::$useTemporaryTables );

			$dbClone->cloneTableStructure();

			$db->tablePrefix( $prefix );
			$db->_originalTablePrefix = $oldPrefix;
		}

		return true;
	}

	/**
	 * Set up all test DBs
	 */
	public function setupAllTestDBs() {
		global $wgDBprefix;

		self::$oldTablePrefix = $wgDBprefix;

		$testPrefix = $this->dbPrefix();

		// switch to a temporary clone of the database
		self::setupTestDB( $this->db, $testPrefix );

		if ( self::isUsingExternalStoreDB() ) {
			self::setupExternalStoreTestDBs( $testPrefix );
		}

		// NOTE: Change the prefix in the LBFactory and $wgDBprefix, to prevent
		// *any* database connections to operate on live data.
		CloneDatabase::changePrefix( $testPrefix );
	}

	/**
	 * Creates an empty skeleton of the wiki database by cloning its structure
	 * to equivalent tables using the given $prefix. Then sets MediaWiki to
	 * use the new set of tables (aka schema) instead of the original set.
	 *
	 * This is used to generate a dummy table set, typically consisting of temporary
	 * tables, that will be used by tests instead of the original wiki database tables.
	 *
	 * @since 1.21
	 *
	 * @note the original table prefix is stored in self::$oldTablePrefix. This is used
	 * by teardownTestDB() to return the wiki to using the original table set.
	 *
	 * @note this method only works when first called. Subsequent calls have no effect,
	 * even if using different parameters.
	 *
	 * @param Database $db The database connection
	 * @param string $prefix The prefix to use for the new table set (aka schema).
	 *
	 * @throws MWException If the database table prefix is already $prefix
	 */
	public static function setupTestDB( Database $db, $prefix ) {
		if ( self::$dbSetup ) {
			return;
		}

		if ( $db->tablePrefix() === $prefix ) {
			throw new MWException(
				'Cannot run unit tests, the database prefix is already "' . $prefix . '"' );
		}

		// TODO: the below should be re-written as soon as LBFactory, LoadBalancer,
		// and Database no longer use global state.

		self::$dbSetup = true;

		if ( !self::setupDatabaseWithTestPrefix( $db, $prefix ) ) {
			return;
		}

		// Assuming this isn't needed for External Store database, and not sure if the procedure
		// would be available there.
		if ( $db->getType() == 'oracle' ) {
			$db->query( 'BEGIN FILL_WIKI_INFO; END;' );
		}

		Hooks::run( 'UnitTestsAfterDatabaseSetup', [ $db, $prefix ] );
	}

	/**
	 * Clones the External Store database(s) for testing
	 *
	 * @param string|null $testPrefix Prefix for test tables. Will be determined automatically
	 *        if not given.
	 */
	protected static function setupExternalStoreTestDBs( $testPrefix = null ) {
		$connections = self::getExternalStoreDatabaseConnections();
		foreach ( $connections as $dbw ) {
			self::setupDatabaseWithTestPrefix( $dbw, $testPrefix );
		}
	}

	/**
	 * Gets master database connections for all of the ExternalStoreDB
	 * stores configured in $wgDefaultExternalStore.
	 *
	 * @return Database[] Array of Database master connections
	 */
	protected static function getExternalStoreDatabaseConnections() {
		global $wgDefaultExternalStore;

		/** @var ExternalStoreDB $externalStoreDB */
		$externalStoreDB = ExternalStore::getStoreObject( 'DB' );
		$defaultArray = (array)$wgDefaultExternalStore;
		$dbws = [];
		foreach ( $defaultArray as $url ) {
			if ( strpos( $url, 'DB://' ) === 0 ) {
				list( $proto, $cluster ) = explode( '://', $url, 2 );
				// Avoid getMaster() because setupDatabaseWithTestPrefix()
				// requires Database instead of plain DBConnRef/IDatabase
				$dbws[] = $externalStoreDB->getMaster( $cluster );
			}
		}

		return $dbws;
	}

	/**
	 * Check whether ExternalStoreDB is being used
	 *
	 * @return bool True if it's being used
	 */
	protected static function isUsingExternalStoreDB() {
		global $wgDefaultExternalStore;
		if ( !$wgDefaultExternalStore ) {
			return false;
		}

		$defaultArray = (array)$wgDefaultExternalStore;
		foreach ( $defaultArray as $url ) {
			if ( strpos( $url, 'DB://' ) === 0 ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * @throws LogicException if the given database connection is not a set up to use
	 * mock tables.
	 *
	 * @since 1.31 this is no longer private.
	 */
	protected function ensureMockDatabaseConnection( IDatabase $db ) {
		if ( $db->tablePrefix() !== $this->dbPrefix() ) {
			throw new LogicException(
				'Trying to delete mock tables, but table prefix does not indicate a mock database.'
			);
		}
	}

	private static $schemaOverrideDefaults = [
		'scripts' => [],
		'create' => [],
		'drop' => [],
		'alter' => [],
	];

	/**
	 * Stub. If a test suite needs to test against a specific database schema, it should
	 * override this method and return the appropriate information from it.
	 *
	 * @param IMaintainableDatabase $db The DB connection to use for the mock schema.
	 *        May be used to check the current state of the schema, to determine what
	 *        overrides are needed.
	 *
	 * @return array An associative array with the following fields:
	 *  - 'scripts': any SQL scripts to run. If empty or not present, schema overrides are skipped.
	 * - 'create': A list of tables created (may or may not exist in the original schema).
	 * - 'drop': A list of tables dropped (expected to be present in the original schema).
	 * - 'alter': A list of tables altered (expected to be present in the original schema).
	 */
	protected function getSchemaOverrides( IMaintainableDatabase $db ) {
		return [];
	}

	/**
	 * Undoes the specified schema overrides..
	 * Called once per test class, just before addDataOnce().
	 *
	 * @param IMaintainableDatabase $db
	 * @param array $oldOverrides
	 */
	private function undoSchemaOverrides( IMaintainableDatabase $db, $oldOverrides ) {
		$this->ensureMockDatabaseConnection( $db );

		$oldOverrides = $oldOverrides + self::$schemaOverrideDefaults;
		$originalTables = $this->listOriginalTables( $db, 'unprefixed' );

		// Drop tables that need to be restored or removed.
		$tablesToDrop = array_merge( $oldOverrides['create'], $oldOverrides['alter'] );

		// Restore tables that have been dropped or created or altered,
		// if they exist in the original schema.
		$tablesToRestore = array_merge( $tablesToDrop, $oldOverrides['drop'] );
		$tablesToRestore = array_intersect( $originalTables, $tablesToRestore );

		if ( $tablesToDrop ) {
			$this->dropMockTables( $db, $tablesToDrop );
		}

		if ( $tablesToRestore ) {
			$this->recloneMockTables( $db, $tablesToRestore );
		}
	}

	/**
	 * Applies the schema overrides returned by getSchemaOverrides(),
	 * after undoing any previously applied schema overrides.
	 * Called once per test class, just before addDataOnce().
	 */
	private function setUpSchema( IMaintainableDatabase $db ) {
		// Undo any active overrides.
		$oldOverrides = $db->_schemaOverrides ?? self::$schemaOverrideDefaults;

		if ( $oldOverrides['alter'] || $oldOverrides['create'] || $oldOverrides['drop'] ) {
			$this->undoSchemaOverrides( $db, $oldOverrides );
		}

		// Determine new overrides.
		$overrides = $this->getSchemaOverrides( $db ) + self::$schemaOverrideDefaults;

		$extraKeys = array_diff(
			array_keys( $overrides ),
			array_keys( self::$schemaOverrideDefaults )
		);

		if ( $extraKeys ) {
			throw new InvalidArgumentException(
				'Schema override contains extra keys: ' . var_export( $extraKeys, true )
			);
		}

		if ( !$overrides['scripts'] ) {
			// no scripts to run
			return;
		}

		if ( !$overrides['create'] && !$overrides['drop'] && !$overrides['alter'] ) {
			throw new InvalidArgumentException(
				'Schema override scripts given, but no tables are declared to be '
				. 'created, dropped or altered.'
			);
		}

		$this->ensureMockDatabaseConnection( $db );

		// Drop the tables that will be created by the schema scripts.
		$originalTables = $this->listOriginalTables( $db, 'unprefixed' );
		$tablesToDrop = array_intersect( $originalTables, $overrides['create'] );

		if ( $tablesToDrop ) {
			$this->dropMockTables( $db, $tablesToDrop );
		}

		// Run schema override scripts.
		foreach ( $overrides['scripts'] as $script ) {
			$db->sourceFile(
				$script,
				null,
				null,
				__METHOD__,
				function ( $cmd ) {
					return $this->mungeSchemaUpdateQuery( $cmd );
				}
			);
		}

		$db->_schemaOverrides = $overrides;
	}

	private function mungeSchemaUpdateQuery( $cmd ) {
		return self::$useTemporaryTables
			? preg_replace( '/\bCREATE\s+TABLE\b/i', 'CREATE TEMPORARY TABLE', $cmd )
			: $cmd;
	}

	/**
	 * Drops the given mock tables.
	 *
	 * @param IMaintainableDatabase $db
	 * @param array $tables
	 */
	private function dropMockTables( IMaintainableDatabase $db, array $tables ) {
		$this->ensureMockDatabaseConnection( $db );

		foreach ( $tables as $tbl ) {
			$tbl = $db->tableName( $tbl );
			$db->query( "DROP TABLE IF EXISTS $tbl", __METHOD__ );

			if ( $tbl === 'page' ) {
				// Forget about the pages since they don't
				// exist in the DB.
				MediaWikiServices::getInstance()->getLinkCache()->clear();
			}
		}
	}

	/**
	 * Lists all tables in the live database schema.
	 *
	 * @param IMaintainableDatabase $db
	 * @param string $prefix Either 'prefixed' or 'unprefixed'
	 * @return array
	 */
	private function listOriginalTables( IMaintainableDatabase $db, $prefix = 'prefixed' ) {
		if ( !isset( $db->_originalTablePrefix ) ) {
			throw new LogicException( 'No original table prefix know, cannot list tables!' );
		}

		$originalTables = $db->listTables( $db->_originalTablePrefix, __METHOD__ );
		if ( $prefix === 'unprefixed' ) {
			$originalPrefixRegex = '/^' . preg_quote( $db->_originalTablePrefix ) . '/';
			$originalTables = array_map(
				function ( $pt ) use ( $originalPrefixRegex ) {
					return preg_replace( $originalPrefixRegex, '', $pt );
				},
				$originalTables
			);
		}

		return $originalTables;
	}

	/**
	 * Re-clones the given mock tables to restore them based on the live database schema.
	 * The tables listed in $tables are expected to currently not exist, so dropMockTables()
	 * should be called first.
	 *
	 * @param IMaintainableDatabase $db
	 * @param array $tables
	 */
	private function recloneMockTables( IMaintainableDatabase $db, array $tables ) {
		$this->ensureMockDatabaseConnection( $db );

		if ( !isset( $db->_originalTablePrefix ) ) {
			throw new LogicException( 'No original table prefix know, cannot restore tables!' );
		}

		$originalTables = $this->listOriginalTables( $db, 'unprefixed' );
		$tables = array_intersect( $tables, $originalTables );

		$dbClone = new CloneDatabase( $db, $tables, $db->tablePrefix(), $db->_originalTablePrefix );
		$dbClone->useTemporaryTables( self::$useTemporaryTables );

		$dbClone->cloneTableStructure();
	}

	/**
	 * Empty all tables so they can be repopulated for tests
	 *
	 * @param Database $db|null Database to reset
	 * @param array $tablesUsed Tables to reset
	 */
	private function resetDB( $db, $tablesUsed ) {
		if ( $db ) {
			$userTables = [ 'user', 'user_groups', 'user_properties', 'actor' ];
			$pageTables = [
				'page', 'revision', 'ip_changes', 'revision_comment_temp', 'comment', 'archive',
				'revision_actor_temp', 'slots', 'content', 'content_models', 'slot_roles',
			];
			$coreDBDataTables = array_merge( $userTables, $pageTables );

			// If any of the user or page tables were marked as used, we should clear all of them.
			if ( array_intersect( $tablesUsed, $userTables ) ) {
				$tablesUsed = array_unique( array_merge( $tablesUsed, $userTables ) );
				TestUserRegistry::clear();
			}
			if ( array_intersect( $tablesUsed, $pageTables ) ) {
				$tablesUsed = array_unique( array_merge( $tablesUsed, $pageTables ) );
			}

			// Postgres, Oracle, and MSSQL all use mwuser/pagecontent
			// instead of user/text. But Postgres does not remap the
			// table name in tableExists(), so we mark the real table
			// names as being used.
			if ( $db->getType() === 'postgres' ) {
				if ( in_array( 'user', $tablesUsed ) ) {
					$tablesUsed[] = 'mwuser';
				}
				if ( in_array( 'text', $tablesUsed ) ) {
					$tablesUsed[] = 'pagecontent';
				}
			}

			$truncate = in_array( $db->getType(), [ 'oracle', 'mysql' ] );
			foreach ( $tablesUsed as $tbl ) {
				if ( !$db->tableExists( $tbl ) ) {
					continue;
				}

				if ( $truncate ) {
					$db->query( 'TRUNCATE TABLE ' . $db->tableName( $tbl ), __METHOD__ );
				} else {
					$db->delete( $tbl, '*', __METHOD__ );
				}

				if ( in_array( $db->getType(), [ 'postgres', 'sqlite' ], true ) ) {
					// Reset the table's sequence too.
					$db->resetSequenceForTable( $tbl, __METHOD__ );
				}

				if ( $tbl === 'interwiki' ) {
					if ( !$this->interwikiTable ) {
						// @todo We should probably throw here, but this causes test failures that I
						// can't figure out, so for now we silently continue.
						continue;
					}
					$db->insert(
						'interwiki',
						array_map( 'get_object_vars', iterator_to_array( $this->interwikiTable ) ),
						__METHOD__
					);
				}

				if ( $tbl === 'page' ) {
					// Forget about the pages since they don't
					// exist in the DB.
					MediaWikiServices::getInstance()->getLinkCache()->clear();
				}
			}

			if ( array_intersect( $tablesUsed, $coreDBDataTables ) ) {
				// Re-add core DB data that was deleted
				$this->addCoreDBData();
			}
		}
	}

	private static function unprefixTable( &$tableName, $ind, $prefix ) {
		$tableName = substr( $tableName, strlen( $prefix ) );
	}

	private static function isNotUnittest( $table ) {
		return strpos( $table, self::DB_PREFIX ) !== 0;
	}

	/**
	 * @since 1.18
	 *
	 * @param IMaintainableDatabase $db
	 *
	 * @return array
	 */
	public static function listTables( IMaintainableDatabase $db ) {
		$prefix = $db->tablePrefix();
		$tables = $db->listTables( $prefix, __METHOD__ );

		if ( $db->getType() === 'mysql' ) {
			static $viewListCache = null;
			if ( $viewListCache === null ) {
				$viewListCache = $db->listViews( null, __METHOD__ );
			}
			// T45571: cannot clone VIEWs under MySQL
			$tables = array_diff( $tables, $viewListCache );
		}
		array_walk( $tables, [ __CLASS__, 'unprefixTable' ], $prefix );

		// Don't duplicate test tables from the previous fataled run
		$tables = array_filter( $tables, [ __CLASS__, 'isNotUnittest' ] );

		if ( $db->getType() == 'sqlite' ) {
			$tables = array_flip( $tables );
			// these are subtables of searchindex and don't need to be duped/dropped separately
			unset( $tables['searchindex_content'] );
			unset( $tables['searchindex_segdir'] );
			unset( $tables['searchindex_segments'] );
			$tables = array_flip( $tables );
		}

		return $tables;
	}

	/**
	 * Copy test data from one database connection to another.
	 *
	 * This should only be used for small data sets.
	 *
	 * @param IDatabase $source
	 * @param IDatabase $target
	 */
	public function copyTestData( IDatabase $source, IDatabase $target ) {
		$tables = self::listOriginalTables( $source, 'unprefixed' );

		foreach ( $tables as $table ) {
			$res = $source->select( $table, '*', [], __METHOD__ );
			$allRows = [];

			foreach ( $res as $row ) {
				$allRows[] = (array)$row;
			}

			$target->insert( $table, $allRows, __METHOD__, [ 'IGNORE' ] );
		}
	}

	/**
	 * @throws MWException
	 * @since 1.18
	 */
	protected function checkDbIsSupported() {
		if ( !in_array( $this->db->getType(), $this->supportedDBs ) ) {
			throw new MWException( $this->db->getType() . " is not currently supported for unit testing." );
		}
	}

	/**
	 * @since 1.18
	 * @param string $offset
	 * @return mixed
	 */
	public function getCliArg( $offset ) {
		if ( isset( PHPUnitMaintClass::$additionalOptions[$offset] ) ) {
			return PHPUnitMaintClass::$additionalOptions[$offset];
		}

		return null;
	}

	/**
	 * @since 1.18
	 * @param string $offset
	 * @param mixed $value
	 */
	public function setCliArg( $offset, $value ) {
		PHPUnitMaintClass::$additionalOptions[$offset] = $value;
	}

	/**
	 * Don't throw a warning if $function is deprecated and called later
	 *
	 * @since 1.19
	 *
	 * @param string $function
	 */
	public function hideDeprecated( $function ) {
		Wikimedia\suppressWarnings();
		wfDeprecated( $function );
		Wikimedia\restoreWarnings();
	}

	/**
	 * Asserts that the given database query yields the rows given by $expectedRows.
	 * The expected rows should be given as indexed (not associative) arrays, with
	 * the values given in the order of the columns in the $fields parameter.
	 * Note that the rows are sorted by the columns given in $fields.
	 *
	 * @since 1.20
	 *
	 * @param string|array $table The table(s) to query
	 * @param string|array $fields The columns to include in the result (and to sort by)
	 * @param string|array $condition "where" condition(s)
	 * @param array $expectedRows An array of arrays giving the expected rows.
	 * @param array $options Options for the query
	 * @param array $join_conds Join conditions for the query
	 *
	 * @throws MWException If this test cases's needsDB() method doesn't return true.
	 *         Test cases can use "@group Database" to enable database test support,
	 *         or list the tables under testing in $this->tablesUsed, or override the
	 *         needsDB() method.
	 */
	protected function assertSelect(
		$table, $fields, $condition, array $expectedRows, array $options = [], array $join_conds = []
	) {
		if ( !$this->needsDB() ) {
			throw new MWException( 'When testing database state, the test cases\'s needDB()' .
				' method should return true. Use @group Database or $this->tablesUsed.' );
		}

		$db = wfGetDB( DB_REPLICA );

		$res = $db->select(
			$table,
			$fields,
			$condition,
			wfGetCaller(),
			$options + [ 'ORDER BY' => $fields ],
			$join_conds
		);
		$this->assertNotEmpty( $res, "query failed: " . $db->lastError() );

		$i = 0;

		foreach ( $expectedRows as $expected ) {
			$r = $res->fetchRow();
			self::stripStringKeys( $r );

			$i += 1;
			$this->assertNotEmpty( $r, "row #$i missing" );

			$this->assertEquals( $expected, $r, "row #$i mismatches" );
		}

		$r = $res->fetchRow();
		self::stripStringKeys( $r );

		$this->assertFalse( $r, "found extra row (after #$i)" );
	}

	/**
	 * Utility method taking an array of elements and wrapping
	 * each element in its own array. Useful for data providers
	 * that only return a single argument.
	 *
	 * @since 1.20
	 *
	 * @param array $elements
	 *
	 * @return array
	 */
	protected function arrayWrap( array $elements ) {
		return array_map(
			function ( $element ) {
				return [ $element ];
			},
			$elements
		);
	}

	/**
	 * Assert that two arrays are equal. By default this means that both arrays need to hold
	 * the same set of values. Using additional arguments, order and associated key can also
	 * be set as relevant.
	 *
	 * @since 1.20
	 *
	 * @param array $expected
	 * @param array $actual
	 * @param bool $ordered If the order of the values should match
	 * @param bool $named If the keys should match
	 */
	protected function assertArrayEquals( array $expected, array $actual,
		$ordered = false, $named = false
	) {
		if ( !$ordered ) {
			$this->objectAssociativeSort( $expected );
			$this->objectAssociativeSort( $actual );
		}

		if ( !$named ) {
			$expected = array_values( $expected );
			$actual = array_values( $actual );
		}

		call_user_func_array(
			[ $this, 'assertEquals' ],
			array_merge( [ $expected, $actual ], array_slice( func_get_args(), 4 ) )
		);
	}

	/**
	 * Put each HTML element on its own line and then equals() the results
	 *
	 * Use for nicely formatting of PHPUnit diff output when comparing very
	 * simple HTML
	 *
	 * @since 1.20
	 *
	 * @param string $expected HTML on oneline
	 * @param string $actual HTML on oneline
	 * @param string $msg Optional message
	 */
	protected function assertHTMLEquals( $expected, $actual, $msg = '' ) {
		$expected = str_replace( '>', ">\n", $expected );
		$actual = str_replace( '>', ">\n", $actual );

		$this->assertEquals( $expected, $actual, $msg );
	}

	/**
	 * Does an associative sort that works for objects.
	 *
	 * @since 1.20
	 *
	 * @param array &$array
	 */
	protected function objectAssociativeSort( array &$array ) {
		uasort(
			$array,
			function ( $a, $b ) {
				return serialize( $a ) <=> serialize( $b );
			}
		);
	}

	/**
	 * Utility function for eliminating all string keys from an array.
	 * Useful to turn a database result row as returned by fetchRow() into
	 * a pure indexed array.
	 *
	 * @since 1.20
	 *
	 * @param mixed &$r The array to remove string keys from.
	 */
	protected static function stripStringKeys( &$r ) {
		if ( !is_array( $r ) ) {
			return;
		}

		foreach ( $r as $k => $v ) {
			if ( is_string( $k ) ) {
				unset( $r[$k] );
			}
		}
	}

	/**
	 * Asserts that the provided variable is of the specified
	 * internal type or equals the $value argument. This is useful
	 * for testing return types of functions that return a certain
	 * type or *value* when not set or on error.
	 *
	 * @since 1.20
	 *
	 * @param string $type
	 * @param mixed $actual
	 * @param mixed $value
	 * @param string $message
	 */
	protected function assertTypeOrValue( $type, $actual, $value = false, $message = '' ) {
		if ( $actual === $value ) {
			$this->assertTrue( true, $message );
		} else {
			$this->assertType( $type, $actual, $message );
		}
	}

	/**
	 * Asserts the type of the provided value. This can be either
	 * in internal type such as boolean or integer, or a class or
	 * interface the value extends or implements.
	 *
	 * @since 1.20
	 *
	 * @param string $type
	 * @param mixed $actual
	 * @param string $message
	 */
	protected function assertType( $type, $actual, $message = '' ) {
		if ( class_exists( $type ) || interface_exists( $type ) ) {
			$this->assertInstanceOf( $type, $actual, $message );
		} else {
			$this->assertInternalType( $type, $actual, $message );
		}
	}

	/**
	 * Returns true if the given namespace defaults to Wikitext
	 * according to $wgNamespaceContentModels
	 *
	 * @param int $ns The namespace ID to check
	 *
	 * @return bool
	 * @since 1.21
	 */
	protected function isWikitextNS( $ns ) {
		global $wgNamespaceContentModels;

		if ( isset( $wgNamespaceContentModels[$ns] ) ) {
			return $wgNamespaceContentModels[$ns] === CONTENT_MODEL_WIKITEXT;
		}

		return true;
	}

	/**
	 * Returns the ID of a namespace that defaults to Wikitext.
	 *
	 * @throws MWException If there is none.
	 * @return int The ID of the wikitext Namespace
	 * @since 1.21
	 */
	protected function getDefaultWikitextNS() {
		global $wgNamespaceContentModels;

		static $wikitextNS = null; // this is not going to change
		if ( $wikitextNS !== null ) {
			return $wikitextNS;
		}

		// quickly short out on most common case:
		if ( !isset( $wgNamespaceContentModels[NS_MAIN] ) ) {
			return NS_MAIN;
		}

		// NOTE: prefer content namespaces
		$namespaces = array_unique( array_merge(
			MWNamespace::getContentNamespaces(),
			[ NS_MAIN, NS_HELP, NS_PROJECT ], // prefer these
			MWNamespace::getValidNamespaces()
		) );

		$namespaces = array_diff( $namespaces, [
			NS_FILE, NS_CATEGORY, NS_MEDIAWIKI, NS_USER // don't mess with magic namespaces
		] );

		$talk = array_filter( $namespaces, function ( $ns ) {
			return MWNamespace::isTalk( $ns );
		} );

		// prefer non-talk pages
		$namespaces = array_diff( $namespaces, $talk );
		$namespaces = array_merge( $namespaces, $talk );

		// check default content model of each namespace
		foreach ( $namespaces as $ns ) {
			if ( !isset( $wgNamespaceContentModels[$ns] ) ||
				$wgNamespaceContentModels[$ns] === CONTENT_MODEL_WIKITEXT
			) {
				$wikitextNS = $ns;

				return $wikitextNS;
			}
		}

		// give up
		// @todo Inside a test, we could skip the test as incomplete.
		//        But frequently, this is used in fixture setup.
		throw new MWException( "No namespace defaults to wikitext!" );
	}

	/**
	 * Check, if $wgDiff3 is set and ready to merge
	 * Will mark the calling test as skipped, if not ready
	 *
	 * @since 1.21
	 */
	protected function markTestSkippedIfNoDiff3() {
		global $wgDiff3;

		# This check may also protect against code injection in
		# case of broken installations.
		Wikimedia\suppressWarnings();
		$haveDiff3 = $wgDiff3 && file_exists( $wgDiff3 );
		Wikimedia\restoreWarnings();

		if ( !$haveDiff3 ) {
			$this->markTestSkipped( "Skip test, since diff3 is not configured" );
		}
	}

	/**
	 * Check if $extName is a loaded PHP extension, will skip the
	 * test whenever it is not loaded.
	 *
	 * @since 1.21
	 * @param string $extName
	 * @return bool
	 */
	protected function checkPHPExtension( $extName ) {
		$loaded = extension_loaded( $extName );
		if ( !$loaded ) {
			$this->markTestSkipped( "PHP extension '$extName' is not loaded, skipping." );
		}

		return $loaded;
	}

	/**
	 * Skip the test if using the specified database type
	 *
	 * @param string $type Database type
	 * @since 1.32
	 */
	protected function markTestSkippedIfDbType( $type ) {
		if ( $this->db->getType() === $type ) {
			$this->markTestSkipped( "The $type database type isn't supported for this test" );
		}
	}

	/**
	 * Used as a marker to prevent wfResetOutputBuffers from breaking PHPUnit.
	 * @param string $buffer
	 * @return string
	 */
	public static function wfResetOutputBuffersBarrier( $buffer ) {
		return $buffer;
	}

	/**
	 * Create a temporary hook handler which will be reset by tearDown.
	 * This replaces other handlers for the same hook.
	 * @param string $hookName Hook name
	 * @param mixed $handler Value suitable for a hook handler
	 * @since 1.28
	 */
	protected function setTemporaryHook( $hookName, $handler ) {
		$this->mergeMwGlobalArrayValue( 'wgHooks', [ $hookName => [ $handler ] ] );
	}

	/**
	 * Check whether file contains given data.
	 * @param string $fileName
	 * @param string $actualData
	 * @param bool $createIfMissing If true, and file does not exist, create it with given data
	 *                              and skip the test.
	 * @param string $msg
	 * @since 1.30
	 */
	protected function assertFileContains(
		$fileName,
		$actualData,
		$createIfMissing = true,
		$msg = ''
	) {
		if ( $createIfMissing ) {
			if ( !file_exists( $fileName ) ) {
				file_put_contents( $fileName, $actualData );
				$this->markTestSkipped( 'Data file $fileName does not exist' );
			}
		} else {
			self::assertFileExists( $fileName );
		}
		self::assertEquals( file_get_contents( $fileName ), $actualData, $msg );
	}

	/**
	 * Edits or creates a page/revision
	 * @param string $pageName Page title
	 * @param string $text Content of the page
	 * @param string $summary Optional summary string for the revision
	 * @param int $defaultNs Optional namespace id
	 * @return array Array as returned by WikiPage::doEditContent()
	 */
	protected function editPage( $pageName, $text, $summary = '', $defaultNs = NS_MAIN ) {
		$title = Title::newFromText( $pageName, $defaultNs );
		$page = WikiPage::factory( $title );

		return $page->doEditContent( ContentHandler::makeContent( $text, $title ), $summary );
	}

	/**
	 * Revision-deletes a revision.
	 *
	 * @param Revision|int $rev Revision to delete
	 * @param array $value Keys are Revision::DELETED_* flags.  Values are 1 to set the bit, 0 to
	 *   clear, -1 to leave alone.  (All other values also clear the bit.)
	 * @param string $comment Deletion comment
	 */
	protected function revisionDelete(
		$rev, array $value = [ Revision::DELETED_TEXT => 1 ], $comment = ''
	) {
		if ( is_int( $rev ) ) {
			$rev = Revision::newFromId( $rev );
		}
		RevisionDeleter::createList(
			'revision', RequestContext::getMain(), $rev->getTitle(), [ $rev->getId() ]
		)->setVisibility( [
			'value' => $value,
			'comment' => $comment,
		] );
	}
}
