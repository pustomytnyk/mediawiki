<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

require_once __DIR__ . '/Maintenance.php';

/**
 * Populate and improve accuracy of change_tag_def statistics.
 *
 * @ingroup Maintenance
 */
class PopulateChangeTagDef extends Maintenance {
	/** @var Wikimedia\Rdbms\ILBFactory */
	protected $lbFactory;

	public function __construct() {
		parent::__construct();
		$this->addDescription( 'Populate and improve accuracy of change_tag_def statistics' );
		$this->addOption( 'dry-run', 'Print debug info instead of actually deleting' );
		$this->setBatchSize( 1000 );
		$this->addOption(
			'sleep',
			'Sleep time (in seconds) between every batch',
			false,
			true
		);
	}

	public function execute() {
		global $wgChangeTagsSchemaMigrationStage;
		$this->lbFactory = MediaWiki\MediaWikiServices::getInstance()->getDBLoadBalancerFactory();
		$this->setBatchSize( $this->getOption( 'batch-size', $this->getBatchSize() ) );

		$this->countDown( 5 );
		if ( $wgChangeTagsSchemaMigrationStage < MIGRATION_NEW ) {
			$this->updateCountTag();
			$this->backpopulateChangeTagId();
		} else {
			$this->updateCountTagId();
		}

		// TODO: Implement
		// $this->cleanZeroCountRows();
	}

	private function updateCountTagId() {
		$dbr = $this->lbFactory->getMainLB()->getConnection( DB_REPLICA );

		// This query can be pretty expensive, don't run it on master
		$res = $dbr->select(
			'change_tag',
			[ 'ct_tag_id', 'hitcount' => 'count(*)' ],
			[],
			__METHOD__,
			[ 'GROUP BY' => 'ct_tag_id' ]
		);

		$dbw = $this->lbFactory->getMainLB()->getConnection( DB_MASTER );

		foreach ( $res as $row ) {
			if ( !$row->ct_tag_id ) {
				continue;
			}

			if ( $this->hasOption( 'dry-run' ) ) {
				$this->output( 'This row will be updated: ' . implode( ', ', $row ) . "\n" );
				continue;
			}

			$dbw->update(
				'change_tag_def',
				[ 'ctd_count' => $row->hitcount ],
				[ 'ctd_id' => $row->ct_tag_id ],
				__METHOD__
			);
		}
		$this->lbFactory->waitForReplication();
	}

	private function updateCountTag() {
		$dbr = $this->lbFactory->getMainLB()->getConnection( DB_REPLICA );

		// This query can be pretty expensive, don't run it on master
		$res = $dbr->select(
			'change_tag',
			[ 'ct_tag', 'hitcount' => 'count(*)' ],
			[],
			__METHOD__,
			[ 'GROUP BY' => 'ct_tag' ]
		);

		$dbw = $this->lbFactory->getMainLB()->getConnection( DB_MASTER );

		foreach ( $res as $row ) {
			// Hygiene check
			if ( !$row->ct_tag ) {
				continue;
			}

			if ( $this->hasOption( 'dry-run' ) ) {
				$this->output( 'This row will be updated: ' . $row->ct_tag . $row->hitcount . "\n" );
				continue;
			}

			$dbw->upsert(
				'change_tag_def',
				[
					'ctd_name' => $row->ct_tag,
					'ctd_user_defined' => 0,
					'ctd_count' => $row->hitcount
				],
				[ 'ctd_name' ],
				[ 'ctd_count' => $row->hitcount ],
				__METHOD__
			);
		}
		$this->lbFactory->waitForReplication();
	}

	private function backpopulateChangeTagId() {
		$dbr = $this->lbFactory->getMainLB()->getConnection( DB_REPLICA );
		$changeTagDefs = $dbr->select(
			'change_tag_def',
			[ 'ctd_name', 'ctd_id' ],
			[],
			__METHOD__,
			[ 'ORDER BY' => 'ctd_id' ]
		);

		foreach ( $changeTagDefs as $row ) {
			$this->backpopulateChangeTagPerTag( $row->ctd_name, $row->ctd_id );
		}
	}

	private function backpopulateChangeTagPerTag( $tagName, $tagId ) {
		$dbr = $this->lbFactory->getMainLB()->getConnection( DB_REPLICA );
		$dbw = $this->lbFactory->getMainLB()->getConnection( DB_MASTER );
		$sleep = (int)$this->getOption( 'sleep', 10 );
		$lastId = 0;
		$this->output( "Starting to add ct_tag_id = {$tagId} for ct_tag = {$tagName}\n" );
		while ( true ) {
			// Given that indexes might not be there, it's better to use replica
			$ids = $dbr->selectFieldValues(
				'change_tag',
				'ct_id',
				[ 'ct_tag' => $tagName, 'ct_tag_id' => null, 'ct_id > ' . $lastId ],
				__METHOD__,
				[ 'LIMIT' => $this->getBatchSize(), 'ORDER BY' => 'ct_id' ]
			);

			if ( !$ids ) {
				break;
			}
			$lastId = end( $ids );

			if ( $this->hasOption( 'dry-run' ) ) {
				$this->output(
					"These ids will be changed to have \"{$tagId}\" as tag id: " . implode( ', ', $ids ) . "\n"
				);
				continue;
			} else {
				$this->output( "Updating ct_tag_id = {$tagId} up to row ct_id = {$lastId}\n" );
			}

			$dbw->update(
				'change_tag',
				[ 'ct_tag_id' => $tagId ],
				[ 'ct_id' => $ids ],
				__METHOD__
			);

			$this->lbFactory->waitForReplication();
			if ( $sleep > 0 ) {
				sleep( $sleep );
			}
		}

		$this->output( "Finished adding ct_tag_id = {$tagId} for ct_tag = {$tagName}\n" );
	}

}

$maintClass = PopulateChangeTagDef::class;
require_once RUN_MAINTENANCE_IF_MAIN;
