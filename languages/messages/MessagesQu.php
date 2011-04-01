<?php
/** Quechua (Runa Simi)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author AlimanRuna
 * @author Diego Grez
 * @author Omnipaedista
 * @author Reedy
 * @author The Evil IP address
 * @author לערי ריינהארט
 */

$fallback = 'es';

$namespaceNames = array(
	NS_MEDIA            => 'Midya',
	NS_SPECIAL          => 'Sapaq',
	NS_TALK             => 'Rimanakuy',
	NS_USER             => 'Ruraq',
	NS_USER_TALK        => 'Ruraq_rimanakuy',
	NS_PROJECT_TALK     => '$1_rimanakuy',
	NS_FILE             => 'Rikcha',
	NS_FILE_TALK        => 'Rikcha_rimanakuy',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_rimanakuy',
	NS_TEMPLATE         => 'Plantilla',
	NS_TEMPLATE_TALK    => 'Plantilla_rimanakuy',
	NS_HELP             => 'Yanapa',
	NS_HELP_TALK        => 'Yanapa_rimanakuy',
	NS_CATEGORY         => 'Katiguriya',
	NS_CATEGORY_TALK    => 'Katiguriya_rimanakuy',
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'IskayllaPusapuna' ),
	'BrokenRedirects'           => array( 'PantaPusapuna', 'PitisqaPusapuna' ),
	'Disambiguations'           => array( 'SutichanaQillqa' ),
	'Userlogin'                 => array( 'RuraqYaykuy' ),
	'Userlogout'                => array( 'RuraqLluqsiy' ),
	'CreateAccount'             => array( 'RakiqunaKamariy' ),
	'Preferences'               => array( 'Allinkachina', 'Allinkachinakuna' ),
	'Watchlist'                 => array( 'Watiqasqa', 'Watiqasqakuna' ),
	'Recentchanges'             => array( 'NaqhaHukchasqa' ),
	'Upload'                    => array( 'Churkuy' ),
	'Listfiles'                 => array( 'RikchaSutisuyu' ),
	'Newimages'                 => array( 'MusuqRikcha', 'MusuqRikchakuna' ),
	'Listusers'                 => array( 'Ruraqkuna', 'RuraqSutisuyu' ),
	'Listgrouprights'           => array( 'HunuHayni', 'HunupHaynin', 'RuraqkunapHayninkuna' ),
	'Statistics'                => array( 'Ranuy', 'Kanchachani' ),
	'Randompage'                => array( 'MayninpiPanqa' ),
	'Lonelypages'               => array( 'WakchaPanqa' ),
	'Uncategorizedpages'        => array( 'KatiguriyannaqPanqa' ),
	'Uncategorizedcategories'   => array( 'KatiguriyannaqKatiguriya' ),
	'Uncategorizedimages'       => array( 'KatiguriyannaqRikcha' ),
	'Uncategorizedtemplates'    => array( 'KatiguriyannaqPlantilla' ),
	'Unusedcategories'          => array( 'ChusaqKatiguriya', 'ManaLlamkachisqaKatiguriya' ),
	'Unusedimages'              => array( 'ManaLlamkachisqaRikcha' ),
	'Wantedpages'               => array( 'MunasqaPanqa', 'MunakusqaPanqa', 'MuchusqaPanqa' ),
	'Wantedcategories'          => array( 'MunasqaKatiguriya', 'MunakusqaKatiguriya', 'MuchusqaKatiguriya' ),
	'Wantedfiles'               => array( 'MunasqaWillaniqi', 'MunakusqaWillaniqi', 'MuchusqaWillaniqi' ),
	'Wantedtemplates'           => array( 'MunasqaPlantilla', 'MunakusqaPlantilla', 'MuchusqaPlantilla' ),
	'Mostlinked'                => array( 'Tinkimuqsapa', 'LliwmantaAswanTinkimuqniyuq' ),
	'Mostlinkedcategories'      => array( 'TinkimuqsapaKatiguriya', 'AnchaLlamkachisqa', 'AchkaKutiLlamkachisqa' ),
	'Mostlinkedtemplates'       => array( 'TinkimuqsapaPlantilla' ),
	'Mostimages'                => array( 'TinkimuqsapaRikcha' ),
	'Mostcategories'            => array( 'Katiguriyasapa' ),
	'Mostrevisions'             => array( 'AnchaLlamkapusqa', 'AchkaKutiLlamkapusqa' ),
	'Fewestrevisions'           => array( 'AsllaLlamkapusqa', 'AsllaKutiLlamkapusqa' ),
	'Shortpages'                => array( 'UchuyPanqa' ),
	'Longpages'                 => array( 'HatunPanqa' ),
	'Newpages'                  => array( 'MusuqPanqa' ),
	'Ancientpages'              => array( 'MawkaPanqa' ),
	'Deadendpages'              => array( 'Lluqsinannaq' ),
	'Protectedpages'            => array( 'AmachasqaPanqa' ),
	'Protectedtitles'           => array( 'AmachasqaSuti' ),
	'Allpages'                  => array( 'TukuyPanqakuna' ),
	'Prefixindex'               => array( 'QallarinaKaskaSutisuyu' ),
	'Ipblocklist'               => array( 'HarkasqaRuraq', 'HarkasqaIP', 'HarkasqaRuraqkuna' ),
	'Specialpages'              => array( 'SapaqPanqa', 'SapaqPanqakuna' ),
	'Contributions'             => array( 'Rurasqakuna', 'Llamkapusqakuna' ),
	'Emailuser'                 => array( 'EChaskitaManakuy' ),
	'Confirmemail'              => array( 'EChaskitaTakyachiy' ),
	'Whatlinkshere'             => array( 'KaymanTinkimuq' ),
	'Recentchangeslinked'       => array( 'HukchasqaTinkimuq' ),
	'Movepage'                  => array( 'PanqataAstay' ),
	'Blockme'                   => array( 'Harkaway' ),
	'Booksources'               => array( 'PukyuLiwru' ),
	'Categories'                => array( 'Katiguriyakuna' ),
	'Export'                    => array( 'HawamanQuy' ),
	'Version'                   => array( 'Musuqchasqa' ),
	'Allmessages'               => array( 'TukuyWillaykuna' ),
	'Log'                       => array( 'Hallcha', 'Hallchasqa' ),
	'Blockip'                   => array( 'Harkay', 'RuraqtaHarkay', 'IPHarkay' ),
	'Undelete'                  => array( 'QullusqataPaqarichiy' ),
	'Import'                    => array( 'HawamantaChaskiy' ),
	'Lockdb'                    => array( 'WillaniqintintaHarkay' ),
	'Unlockdb'                  => array( 'WillaniqintintaPaskay' ),
	'Userrights'                => array( 'RuraqpaHaynin' ),
	'MIMEsearch'                => array( 'MIMEkamaMaskay' ),
	'FileDuplicateSearch'       => array( 'IskayllaWillaniqitaMaskay' ),
	'Unwatchedpages'            => array( 'ManaWatiqasqa' ),
	'Listredirects'             => array( 'Pusapunakuna', 'TukuyPusapuna' ),
	'Revisiondelete'            => array( 'MusuqchasqaQulluy' ),
	'Unusedtemplates'           => array( 'ManaLlamkachisqaPlantilla' ),
	'Randomredirect'            => array( 'KikinmantaPusapuna' ),
	'Mypage'                    => array( 'Panqay', 'NuqapPanqay' ),
	'Mytalk'                    => array( 'Rimachinay', 'RimanakuyPanqay', 'NuqapRimachinay', 'NuqapRimanakuyPanqay' ),
	'Mycontributions'           => array( 'Rurasqaykuna', 'Llamkapusqaykuna' ),
	'Listadmins'                => array( 'Kamachiqkuna' ),
	'Listbots'                  => array( 'RuranaAntachakuna' ),
	'Popularpages'              => array( 'WatukuqsapaPanqa', 'RikuqsapaPanqa', 'QhawaqsapaPanqa' ),
	'Search'                    => array( 'Maskay' ),
	'Resetpass'                 => array( 'YaykunaRimataKutichiy' ),
	'Withoutinterwiki'          => array( 'Interwikinnaq', 'Wikipurannaq' ),
	'MergeHistory'              => array( 'WinayKawsaytaHunuy' ),
	'Filepath'                  => array( 'WillaniqiNan' ),
	'Invalidateemail'           => array( 'EChaskitaManaallinchay' ),
	'Blankpage'                 => array( 'PanqataChusaqchay' ),
	'LinkSearch'                => array( 'TinkitaMaskay', 'TinkikunataMaskay' ),
	'DeletedContributions'      => array( 'QullusqaRurasqa', 'QullusqaLlamkapusqa' ),
);

$magicWords = array(
	'redirect'              => array( '0', '#PUSAPUNA', '#REDIRECCIÓN', '#REDIRECCION', '#REDIRECT' ),
	'notoc'                 => array( '0', '__YUYARINANNAQ__', '__NOTDC__', '__NOTOC__' ),
	'nogallery'             => array( '0', '__RIKCHASUYUNNAQ__', '__NOGALERÍA__', '__NOGALERIA__', '__NOGALLERY__' ),
	'forcetoc'              => array( '0', '__YUYARINATAATIPACHIY__', '__FORZARTDC__', '__FORZARTOC__', '__FORCETOC__' ),
	'toc'                   => array( '0', '__YUYARINA__', '__TDC__', '__TOC__' ),
	'noeditsection'         => array( '0', '__AMARAKITAHUKCHAYCHU__', '__NOEDITARSECCIÓN__', '__NOEDITARSECCION__', '__NOEDITSECTION__' ),
	'noheader'              => array( '0', '__UMANNAQ__', '__NOTÍTULO__', '__NOTITULO__', '__NOHEADER__' ),
	'currentmonth'          => array( '1', 'KUNANKILLA', 'MESACTUAL', 'MES_ACTUAL', 'MESACTUAL2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'      => array( '1', 'KUNANKILLASUTI', 'NOMBREMESACTUAL', 'NOMBRE_MES_ACTUAL', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'   => array( '1', 'KUNANKILLASUTIP', 'GENERADORNOMBREMESACTUAL', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'    => array( '1', 'KUNANKILLAPISI', 'ABREVIACIONNOMBREMESACTUAL', 'ABREVIACIÓNNOMBREMESACTUAL', 'CURRENTMONTHABBREV' ),
	'currentday'            => array( '1', 'KUNANPUNCHAW', 'DÍAACTUAL', 'DIAACTUAL', 'DÍA_ACTUAL', 'DIA_ACTUAL', 'CURRENTDAY' ),
	'currentday2'           => array( '1', 'KUNANPUNCHAW2', 'DÍAACTUAL2', 'DIAACTUAL2', 'DÍA_ACTUAL2', 'DIA_ACTUAL2', 'CURRENTDAY2' ),
	'currentdayname'        => array( '1', 'KUNANPUNCHAWSUTI', 'NOMBREDÍAACTUAL', 'NOMBREDIAACTUAL', 'CURRENTDAYNAME' ),
	'currentyear'           => array( '1', 'KUNANWATA', 'AÑOACTUAL', 'AÑO_ACTUAL', 'CURRENTYEAR' ),
	'currenttime'           => array( '1', 'KUNANPACHA', 'HORAACTUAL', 'HORA_ACTUAL', 'CURRENTTIME' ),
	'currenthour'           => array( '1', 'KUNANURA', 'HORA_ACTUAL', 'HORAACTUAL', 'HORA_MINUTOS_ACTUAL', 'HORAMINUTOSACTUAL', 'CURRENTHOUR' ),
	'localmonth'            => array( '1', 'KAYPIKILLA', 'MESLOCAL', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonthname'        => array( '1', 'KAYPIKILLASUTI', 'NOMBREMESLOCAL', 'LOCALMONTHNAME' ),
	'localmonthnamegen'     => array( '1', 'KAYPIKILLASUTIP', 'GENERADORNOMBREMESLOCAL', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'      => array( '1', 'KAYPIKILLAPISI', 'ABREVIACIONMESLOCAL', 'LOCALMONTHABBREV' ),
	'localday'              => array( '1', 'KAYPIPUNCHAW', 'DÍALOCAL', 'DIALOCAL', 'LOCALDAY' ),
	'localday2'             => array( '1', 'KAYPIPUNCHAW2', 'DIALOCAL2', 'DÍALOCAL2', 'LOCALDAY2' ),
	'localdayname'          => array( '1', 'KAYPIPUNCHAWSUTI', 'NOMBREDIALOCAL', 'NOMBREDÍALOCAL', 'LOCALDAYNAME' ),
	'localyear'             => array( '1', 'KAYPIWATA', 'AÑOLOCAL', 'LOCALYEAR' ),
	'localtime'             => array( '1', 'KAYPIPACHA', 'HORALOCAL', 'LOCALTIME' ),
	'localhour'             => array( '1', 'KAYPIURA', 'HORALOCAL', 'HORAMINUTOSLOCAL', 'LOCALHOUR' ),
	'numberofpages'         => array( '1', 'HAYKAPANQA', 'NÚMERODEPÁGINAS', 'NUMERODEPAGINAS', 'NUMBEROFPAGES' ),
	'numberofarticles'      => array( '1', 'HAYKAQILLQA', 'NÚMERODEARTÍCULOS', 'NUMERODEARTICULOS', 'NUMBEROFARTICLES' ),
	'numberoffiles'         => array( '1', 'HAYKAWILLANIQI', 'NÚMERODEARCHIVOS', 'NUMERODEARCHIVOS', 'NUMBEROFFILES' ),
	'numberofusers'         => array( '1', 'HAYKARURAQ', 'NÚMERODEUSUARIOS', 'NUMERODEUSUARIOS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'   => array( '1', 'HAYKARURACHKAQ', 'NÚMERODEUSUARIOSACTIVOS', 'NUMERODEUSUARIOSACTIVOS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'         => array( '1', 'HAYKALLAMKAPUSQA', 'NÚMERODEEDICIONES', 'NUMERODEEDICIONES', 'NUMBEROFEDITS' ),
	'numberofviews'         => array( '1', 'HAYKAQHAWASQA', 'HAYKAQAWASQA', 'NÚMERODEVISTAS', 'NUMERODEVISTAS', 'NUMBEROFVIEWS' ),
	'pagename'              => array( '1', 'PANQASUTI', 'NOMBREDEPAGINA', 'NOMBREDEPÁGINA', 'PAGENAME' ),
	'pagenamee'             => array( '1', 'PANQASUTIE', 'NOMBREDEPAGINAC', 'NOMBREDEPÁGINAC', 'PAGENAMEE' ),
	'namespace'             => array( '1', 'SUTIKITI', 'ESPACIODENOMBRE', 'NAMESPACE' ),
	'namespacee'            => array( '1', 'SUTIKITIE', 'ESPACIODENOMBREC', 'NAMESPACEE' ),
	'talkspace'             => array( '1', 'RIMANAKUYKITI', 'RIMAYKITI', 'ESPACIODEDISCUSION', 'ESPACIODEDISCUSIÓN', 'TALKSPACE' ),
	'talkspacee'            => array( '1', 'RIMANAKUYKITIE', 'RIMAYKITIE', 'ESPACIODEDISCUSIONC', 'TALKSPACEE' ),
	'subjectspace'          => array( '1', 'QILLQAKITI', 'ESPACIODEASUNTO', 'ESPACIODETEMA', 'ESPACIODEARTÍCULO', 'ESPACIODEARTICULO', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'         => array( '1', 'QILLQAKITIE', 'ESPACIODETEMAC', 'ESPACIODEASUNTOC', 'ESPACIODEARTICULOC', 'ESPACIODEARTÍCULOC', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'          => array( '1', 'HUNTAPANQASUTI', 'NOMBREDEPÁGINACOMPLETA', 'NOMBREDEPAGINACOMPLETA', 'NOMBREDEPÁGINAENTERA', 'NOMBREDEPAGINAENTERA', 'FULLPAGENAME' ),
	'fullpagenamee'         => array( '1', 'HUNTAPANQASUTIE', 'NOMBRECOMPLETODEPAGINAC', 'NOMBRECOMPLETODEPÁGINAC', 'FULLPAGENAMEE' ),
	'subpagename'           => array( '1', 'URINPANQASUTI', 'NOMBREDESUBPAGINA', 'NOMBREDESUBPÁGINA', 'SUBPAGENAME' ),
	'subpagenamee'          => array( '1', 'URINPANQASUTIE', 'NOMBREDESUBPAGINAC', 'NOMBREDESUBPÁGINAC', 'SUBPAGENAMEE' ),
	'basepagename'          => array( '1', 'TIKSIPANQASUTI', 'NOMBREDEPAGINABASE', 'NOMBREDEPÁGINABASE', 'BASEPAGENAME' ),
	'basepagenamee'         => array( '1', 'TIKSIPANQASUTIE', 'NOMBREDEPAGINABASEC', 'NOMBREDEPÁGINABASEC', 'BASEPAGENAMEE' ),
	'talkpagename'          => array( '1', 'RIMANAKUYPANQASUTI', 'NOMBREDEPÁGINADEDISCUSIÓN', 'NOMBREDEPAGINADEDISCUSION', 'NOMBREDEPAGINADISCUSION', 'NOMBREDEPÁGINADISCUSIÓN', 'TALKPAGENAME' ),
	'talkpagenamee'         => array( '1', 'RIMANAKUYPANQASUTIE', 'NOMBREDEPÁGINADEDISCUSIÓNC', 'NOMBREDEPAGINADEDISCUSIONC', 'NOMBREDEPAGINADISCUSIONC', 'NOMBREDEPÁGINADISCUSIÓNC', 'TALKPAGENAMEE' ),
	'subjectpagename'       => array( '1', 'QILLQAPANQASUTI', 'NOMBREDEPAGINADETEMA', 'NOMBREDEPÁGINADETEMA', 'NOMBREDEPÁGINADEASUNTO', 'NOMBREDEPAGINADEASUNTO', 'NOMBREDEPAGINADEARTICULO', 'NOMBREDEPÁGINADEARTÍCULO', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'      => array( '1', 'QILLQAPANQASUTIE', 'NOMBREDEPAGINADETEMAC', 'NOMBREDEPÁGINADETEMAC', 'NOMBREDEPÁGINADEASUNTOC', 'NOMBREDEPAGINADEASUNTOC', 'NOMBREDEPAGINADEARTICULOC', 'NOMBREDEPÁGINADEARTÍCULOC', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                   => array( '0', 'WILLA:', 'MSJ:', 'MSG:' ),
	'subst'                 => array( '0', 'WAKCHAY:', 'SUBST:' ),
	'msgnw'                 => array( '0', 'WILLAMUSUQ:', 'MSGNW:' ),
	'img_thumbnail'         => array( '1', 'rikchacha', 'miniaturadeimagen', 'miniatura', 'mini', 'thumbnail', 'thumb' ),
	'img_manualthumb'       => array( '1', 'rikchacha=$1', 'miniaturadeimagen=$1', 'miniatura=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'             => array( '1', 'paña', 'alliq', 'derecha', 'dcha', 'der', 'right' ),
	'img_left'              => array( '1', 'lluqi', 'ichuq', 'izquierda', 'izda', 'izq', 'left' ),
	'img_none'              => array( '1', 'manaima', 'mana', 'ninguna', 'nada', 'no', 'ninguno', 'none' ),
	'img_center'            => array( '1', 'chawpi', 'centro', 'centrado', 'centrada', 'centrar', 'center', 'centre' ),
	'img_framed'            => array( '1', 'inchuyuq', 'inchu', 'marco', 'enmarcado', 'enmarcada', 'framed', 'enframed', 'frame' ),
	'img_frameless'         => array( '1', 'inchunnaq', 'sinmarco', 'sin_embarcar', 'sinenmarcar', 'sin_enmarcar', 'frameless' ),
	'img_page'              => array( '1', 'panqa=$1', 'pagina=$1', 'página=$1', 'pagina $1', 'página $1', 'page=$1', 'page $1' ),
	'img_upright'           => array( '1', 'sayaq', 'sayaq=$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'            => array( '1', 'saywa', 'borde', 'border' ),
	'img_baseline'          => array( '1', 'tiksisiqi', 'baseline' ),
	'img_sub'               => array( '1', 'uran', 'sub' ),
	'img_super'             => array( '1', 'hanan', 'super', 'sup' ),
	'img_top'               => array( '1', 'hawa', 'top' ),
	'img_text_top'          => array( '1', 'qillqahawa', 'text-top' ),
	'img_middle'            => array( '1', 'ukhupi', 'middle' ),
	'img_bottom'            => array( '1', 'sikipi', 'bottom' ),
	'img_text_bottom'       => array( '1', 'qillqasiki', 'text-bottom' ),
	'img_link'              => array( '1', 'tinki=$1', 'vínculo=$1', 'vinculo=$1', 'enlace=$1', 'link=$1' ),
	'img_alt'               => array( '1', 'wak=$1', 'alt=$1' ),
	'int'                   => array( '0', 'WILLAY:', 'INT:' ),
	'sitename'              => array( '1', 'TIYAYSUTI', 'NOMBREDESITIO', 'SITENAME' ),
	'ns'                    => array( '0', 'SKITI:', 'EN:', 'NS:' ),
	'localurl'              => array( '0', 'KAYLLAURL:', 'URLLOCAL', 'LOCALURL:' ),
	'localurle'             => array( '0', 'KAYLLAURLE:', 'URLLOCALC:', 'LOCALURLE:' ),
	'server'                => array( '0', 'SIRWIQ', 'SERVIDOR', 'SERVER' ),
	'servername'            => array( '0', 'SIRWIQSUTI', 'NOMBRESERVIDOR', 'SERVERNAME' ),
	'scriptpath'            => array( '0', 'QILLQAÑAN', 'QILLQANAN', 'RUTASCRIPT', 'RUTADESCRIPT', 'SCRIPTPATH' ),
	'grammar'               => array( '0', 'SIMIKAMACHIY:', 'GRAMATICA:', 'GRAMÁTICA:', 'GRAMMAR:' ),
	'gender'                => array( '0', 'QHARIWARMI:', 'QARIWARMI:', 'GÉNERO:', 'GENERO:', 'GENDER:' ),
	'notitleconvert'        => array( '0', '__AMASUTITAHUKCHAYCHU__', '__NOCONVERTIRTITULO__', '__NOCONVERTIRTÍTULO__', '__NOCT___', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'      => array( '0', '__AMASAMIQTAHUKCHAYCHU__', '__NOCONVERTIRCONTENIDO__', '__NOCC___', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'           => array( '1', 'KUNANSIMANA', 'SEMANAACTUAL', 'CURRENTWEEK' ),
	'currentdow'            => array( '1', 'KUNANSIMANAPUNCHAW', 'DDSACTUAL', 'DIADESEMANAACTUAL', 'DÍADESEMANAACTUAL', 'CURRENTDOW' ),
	'localweek'             => array( '1', 'KAYLLASIMANA', 'SEMANALOCAL', 'LOCALWEEK' ),
	'localdow'              => array( '1', 'KAYLLASIMANAPUNCHAW', 'DDSLOCAL', 'DIADESEMANALOCAL', 'DÍADESEMANALOCAL', 'LOCALDOW' ),
	'revisionid'            => array( '1', 'MUSUQCHASQAID', 'IDDEREVISION', 'IDREVISION', 'IDDEREVISIÓN', 'IDREVISIÓN', 'REVISIONID' ),
	'revisionday'           => array( '1', 'MUSUQCHASQAPUNCHAW', 'DIADEREVISION', 'DIAREVISION', 'DÍADEREVISIÓN', 'DÍAREVISIÓN', 'REVISIONDAY' ),
	'revisionday2'          => array( '1', 'MUSUQCHASQAPUNCHAW2', 'DIADEREVISION2', 'DIAREVISION2', 'DÍADEREVISIÓN2', 'DÍAREVISIÓN2', 'REVISIONDAY2' ),
	'revisionmonth'         => array( '1', 'MUSUQCHASQAKILLA', 'MESDEREVISION', 'MESDEREVISIÓN', 'MESREVISION', 'MESREVISIÓN', 'REVISIONMONTH' ),
	'revisionyear'          => array( '1', 'MUSUQCHASQAWATA', 'AÑODEREVISION', 'AÑODEREVISIÓN', 'AÑOREVISION', 'AÑOREVISIÓN', 'REVISIONYEAR' ),
	'revisiontimestamp'     => array( '1', 'MUSUQCHASQAPACHAQILLPA', 'MARCADEHORADEREVISION', 'MARCADEHORADEREVISIÓN', 'REVISIONTIMESTAMP' ),
	'revisionuser'          => array( '1', 'MUSUQCHASQARURAQ', 'USUARIODEREVISION', 'USUARIODEREVISIÓN', 'REVISIONUSER' ),
	'plural'                => array( '0', 'ACHKA:', 'PLURAL:' ),
	'fullurl'               => array( '0', 'HUNTAURL:', 'URLCOMPLETA:', 'FULLURL:' ),
	'fullurle'              => array( '0', 'HUNTAURLE:', 'URLCOMPLETAC:', 'FULLURLE:' ),
	'lcfirst'               => array( '0', 'UCHUYÑAWPAQ:', 'UCHUYNAWPAQ:', 'PRIMEROMINUS;', 'PRIMEROMINÚS:', 'LCFIRST:' ),
	'ucfirst'               => array( '0', 'HATUNÑAWPAQ:', 'HATUNNAWPAQ:', 'PRIMEROMAYUS;', 'PRIMEROMAYÚS:', 'UCFIRST:' ),
	'lc'                    => array( '0', 'UCHUY:', 'MINUS:', 'MINÚS:', 'LC:' ),
	'uc'                    => array( '0', 'HATUN:', 'MAYUS:', 'MAYÚS:', 'UC:' ),
	'raw'                   => array( '0', 'CHAWA:', 'RAW:' ),
	'displaytitle'          => array( '1', 'SUTITARIKUCHIY', 'MOSTRARTÍTULO', 'MOSTRARTITULO', 'DISPLAYTITLE' ),
	'currentversion'        => array( '1', 'KUNANMUSUQCHASQA', 'REVISIÓNACTUAL', 'VERSIONACTUAL', 'VERSIÓNACTUAL', 'CURRENTVERSION' ),
	'urlencode'             => array( '0', 'URLLLAWICHAY', 'URL-LLAWICHAY', 'CODIFICAR', 'CODIFICARURL:', 'URLENCODE:' ),
	'anchorencode'          => array( '0', 'WATANALLAWICHAY', 'ANCHORENCODE' ),
	'currenttimestamp'      => array( '1', 'KUNANPACHAQILLPA', 'MARCADEHORAACTUAL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'        => array( '1', 'KAYLLAPACHAQILLPA', 'MARCADEHORALOCAL', 'LOCALTIMESTAMP' ),
	'directionmark'         => array( '1', 'PURIRIYSANANCHA', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'              => array( '0', '#RIMAY:', '#IDIOMA:', '#LANGUAGE:' ),
	'contentlanguage'       => array( '1', 'SAMIQRIMAY', 'IDIOMADELCONTENIDO', 'IDIOMADELCONT', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'      => array( '1', 'SUTIKITIPIPANQAKUNA:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'        => array( '1', 'HAYKAKAMACHIQ', 'NÚMEROADMINISITRADORES', 'NÚMEROADMINS', 'NUMEROADMINS', 'NUMEROADMINISTRADORES', 'NUMERODEADMINISTRADORES', 'NUMERODEADMINS', 'NÚMERODEADMINISTRADORES', 'NÚMERODEADMINS', 'NÚMEROADMINIISTRADORES', 'NUMBEROFADMINS' ),
	'formatnum'             => array( '0', 'YUPAYRIKCHAKUY', 'FORMATONÚMERO', 'FORMATONUMERO', 'FORMATNUM' ),
	'padleft'               => array( '0', 'PADLLUQI', 'PADICHUQ', 'PADLEFT' ),
	'padright'              => array( '0', 'PADPAÑA', 'PADALLIQ', 'PADRIGHT' ),
	'special'               => array( '0', 'sapaq', 'especial', 'special' ),
	'defaultsort'           => array( '1', 'ALLINCHAY:', 'SIQINCHAY:', 'ORDENAR:', 'ORDENPREDETERMINADO:', 'CLAVEDEORDENPREDETERMINADO:', 'ORDENDECATEGORIAPREDETERMINADO:', 'ORDENDECATEGORÍAPREDETERMINADO:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'              => array( '0', 'WILLAÑIQIÑAN', 'WILLANIQINAN', 'RUTAARCHIVO', 'RUTARCHIVO', 'RUTAARCHIVO:', 'RUTARCHIVO:', 'RUTADEARCHIVO:', 'FILEPATH:' ),
	'tag'                   => array( '0', 'unanchacha', 'UNANCHACHA', 'etiqueta', 'ETIQUETA', 'tag' ),
	'hiddencat'             => array( '1', '__PAKASQAKATIGURIYA__', '__CATEGORÍAOCULTA__', '__HIDDENCAT__' ),
	'pagesincategory'       => array( '1', 'KATIGURIYAPIPANQAKUNA', 'PÁGINASENCATEGORÍA', 'PÁGINASENCAT', 'PAGSENCAT', 'PAGINASENCATEGORIA', 'PAGINASENCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'              => array( '1', 'PANQACHHIKAN', 'PANQACHIKAN', 'PANQACHIKA', 'TAMAÑOPÁGINA', 'TAMAÑODEPÁGINA', 'TAMAÑOPAGINA', 'TAMAÑODEPAGINA', 'PAGESIZE' ),
	'index'                 => array( '1', '__UNANCHAY__', '__INDEXAR__', '__INDEX__' ),
	'noindex'               => array( '1', '__AMAUNANCHAYCHU__', '__NOINDEXAR__', '__NOINDEX__' ),
	'numberingroup'         => array( '1', 'HUÑUPIYUPAY', 'HUNUPIYUPAY', 'NÚMEROENGRUPO', 'NUMEROENGRUPO', 'NUMENGRUPO', 'NÚMENGRUPO', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'        => array( '1', '__TIYAQLLAPUSAPUNA__', '__REDIRECCIONESTATICA__', '__REDIRECCIÓNESTÁTICA__', '__STATICREDIRECT__' ),
	'protectionlevel'       => array( '1', 'HAYKAAMACHAY', 'IMASINCHIAMACHAY', 'NIVELDEPROTECCIÓN', 'PROTECTIONLEVEL' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => "T'inkikunata uranpi sikwiy",
'tog-highlightbroken'         => 'Ch\'usaq p\'anqaman t\'inkimuqkunata sananchay <a href="" class="new">kay hinam</a> (icha kay hinam<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Rakirikunata paqtachiy',
'tog-hideminor'               => '«Ñaqha hukchasqa» nisqapi aslla hukchasqakunata pakay',
'tog-hidepatrolled'           => "Patrullasqa llamk'apusqakunata ñaqha hukchasqapi pakay",
'tog-newpageshidepatrolled'   => "Patrullasqa llamk'apusqakunata musuq p'anqakunapi pakay",
'tog-extendwatchlist'         => "Watiqana sutisuyuta tukuy rurachinalla hukchaykunaman mast'ay, ama lliwmanta aswan ñaqhallachu",
'tog-usenewrc'                => "Sananchasqa ñaqha hukchasqakuna (JavaScript nisqallawanmi llamk'an)",
'tog-numberheadings'          => "Uma siq'ikunata kikinmanta yupay",
'tog-showtoolbar'             => "Llamk'apuna sillwita rikuchiy",
'tog-editondblclick'          => "P'anqakunata llamk'apuy iskaylla ñit'iywan (JavaScript)",
'tog-editsection'             => "Rakirilla llamk'apuyta saqillay [qillqay] t'inkiwan",
'tog-editsectiononrightclick' => "Rakirilla llamk'apuyta saqillay paña butunta rakirip sutinpi ñit'ispa (JavaScript)",
'tog-showtoc'                 => "Yuyarina wachuchasqata rikuchiy (kimsamanta aswan uma siq'iyuq p'anqakunapaq)",
'tog-rememberpassword'        => "Ruraqpa sutiyta yaykuna rimaytapas yuyaykuy kay llika wamp'unapi ({{PLURAL:$1|huk p'unchawkama|$1 p'unchawkama}})",
'tog-watchcreations'          => "Qallarisqay p'anqakunata watiqay.",
'tog-watchdefault'            => "Hukchasqay p'anqakunata watiqay",
'tog-watchmoves'              => "Astasqay p'anqakunata watiqay",
'tog-watchdeletion'           => "Qullusqay p'anqakunata watiqay",
'tog-minordefault'            => 'Tukuy hukchasqakunata kikinmanta aslla nispa sananchay',
'tog-previewontop'            => "Rikch'ay qhawana ñawpaqman, ama qhipanpi kachunchu",
'tog-previewonfirst'          => "Manaraq llamk'apuspa rikch'ayta qhaway",
'tog-nocache'                 => "Llika wamp'unap ''cache'' nisqa paki hallch'anman ama niy",
'tog-enotifwatchlistpages'    => "Watiqasqay p'anqa hukchasqa kaptinqa, e-chaskita kachamuway",
'tog-enotifusertalkpages'     => "Rimachinay p'anqa hukchasqa kaptinqa, e-chaskita kachamuway",
'tog-enotifminoredits'        => "P'anqapi uchuy hukchasqamantapas willawaspa e-chaskita kachamuway",
'tog-enotifrevealaddr'        => 'E-chaski imamaytayta rikuchiy willamuwanayki e-chaskikunapi',
'tog-shownumberswatching'     => "Rikuchiy hayk'a watiqaq ruraqkuna",
'tog-oldsig'                  => "Kachkaqña silq'uyta ñawpaqta qhawallay:",
'tog-fancysig'                => "Silq'uyta wiki qillqa hinata llamk'achiy (mana kikinmanta t'inkichaq silq'uy)",
'tog-externaleditor'          => "Kikinmanta hawa llamk'apunata llamk'achiy (kamayuqkunallapaq, antañiqiqniykipi sapaq allinkachinakuna kananmi. [http://www.mediawiki.org/wiki/Manual:External_editors Astawan ñawiriy.])",
'tog-externaldiff'            => "Kikinmanta hawa ''diff'' (wakin kay) nisqata llamk'achiy (kamayuqkunallapaq, antañiqiqniykipi sapaq allinkachinakuna kananmi. [http://www.mediawiki.org/wiki/Manual:External_editors Astawan ñawiriy.])",
'tog-showjumplinks'           => "«Chayman phinkiy» aypanalla t'inkikunata saqillay",
'tog-uselivepreview'          => "''Live preview'' nisqa ñawpaq qhawayta llamk'achiy (JavaScript) (llamiy aknaraq)",
'tog-forceeditsummary'        => "Ch'usaq llamk'apuy waqaychasqa kachkaptinqa ch'itiyay.",
'tog-watchlisthideown'        => "Watiqasqaykunapiqa ñuqap llamk'apusqaykunata pakay",
'tog-watchlisthidebots'       => "Watiqasqaykunapiqa rurana antachakunap llamk'apusqankunata pakay",
'tog-watchlisthideminor'      => "Watiqasqaykunapiqa uchuylla llamk'apusqakunata pakay",
'tog-watchlisthideliu'        => "Rakiqunayuq ruraqkunap llamk'apusqankunata watiqay sutisuyupi pakay",
'tog-watchlisthideanons'      => "Rakiqunannaq ruraqkunap llamk'apusqankunata watiqay sutisuyupi pakay",
'tog-watchlisthidepatrolled'  => "Patrullasqa llamk'apusqakunata watiqasqakunapi pakay",
'tog-nolangconversion'        => 'Simi kutiyman ama niy',
'tog-ccmeonemails'            => 'Huk ruraqkunaman kachasqay e-chaskikunamanta iskaychasqakunata kachamuway',
'tog-diffonly'                => "Huk kaykunap uranpi kaq p'anqap samiqninta ama rikuchiychu",
'tog-showhiddencats'          => 'Pakasqa katiguriyakunata rikuchiy',
'tog-noconvertlink'           => "T'inki suti t'ikrayman ama niy",
'tog-norollbackdiff'          => 'Ruraqpa hukchasqankunata kutichispa ama wakin kayta willaychu',

'underline-always'  => "Hayk'appas",
'underline-never'   => "Mana hayk'appas",
'underline-default' => "Wamp'unap kikinmanta chanin",

# Font style option in Special:Preferences
'editfont-style'     => "Llamk'apuy k'itichapi sanampa rik'chakuynin:",
'editfont-default'   => "Wamp'unapaq kikinmanta:",
'editfont-monospace' => "Ch'ulla chhika sanampa",
'editfont-sansserif' => "Siq'ichannaq sanampa",
'editfont-serif'     => "Siq'ichayuq sanampa",

# Dates
'sunday'        => 'Intichaw',
'monday'        => 'Killachaw',
'tuesday'       => 'Atipachaw',
'wednesday'     => 'Quyllurchaw',
'thursday'      => 'Illapachaw',
'friday'        => "Ch'askachaw",
'saturday'      => "K'uychichaw",
'sun'           => 'Int',
'mon'           => 'Kil',
'tue'           => 'Ati',
'wed'           => 'Quy',
'thu'           => 'Ilp',
'fri'           => 'Cha',
'sat'           => 'Kuy',
'january'       => 'iniru',
'february'      => 'phiwriru',
'march'         => 'marsu',
'april'         => 'awril',
'may_long'      => 'mayukilla',
'june'          => 'hunyu',
'july'          => 'hulyu',
'august'        => 'awustu',
'september'     => 'sitimri',
'october'       => 'uktuwri',
'november'      => 'nuwimri',
'december'      => 'disimri',
'january-gen'   => 'iniru',
'february-gen'  => 'phiwriru',
'march-gen'     => 'marsu',
'april-gen'     => 'awril',
'may-gen'       => 'mayukilla',
'june-gen'      => 'hunyu',
'july-gen'      => 'hulyu',
'august-gen'    => 'awustu',
'september-gen' => 'sitimri',
'october-gen'   => 'uktuwri',
'november-gen'  => 'nuwimri',
'december-gen'  => 'disimri',
'jan'           => 'ini',
'feb'           => 'phi',
'mar'           => 'mar',
'apr'           => 'awr',
'may'           => 'may',
'jun'           => 'hun',
'jul'           => 'hul',
'aug'           => 'awu',
'sep'           => 'sit',
'oct'           => 'ukt',
'nov'           => 'nuw',
'dec'           => 'dis',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Katiguriya|Katiguriyakuna}}',
'category_header'                => '"$1" sutiyuq katiguriyapi qillqakuna',
'subcategories'                  => 'Urin katiguriyakuna',
'category-media-header'          => '"$1" sutiyuq katiguriyapi multimidya willañiqikuna',
'category-empty'                 => "''Kay katiguriyaqa ch'usaqmi.''",
'hidden-categories'              => '{{PLURAL:$1|Pakasqa katiguriya|Pakasqa katiguriyakuna}}',
'hidden-category-category'       => 'Pakasqa katiguriyakuna',
'category-subcat-count'          => '{{PLURAL:$2|Kay katiguriyapiqa kay qatiq huklla urin katiguriyam.|Kay katiguriyapiqa kay qatiq {{PLURAL:$1|urin katiguriyam|$1 urin katiguriyakunam}}, $2-pura.}}',
'category-subcat-count-limited'  => 'Kay katiguriyapiqa kay qatiq {{PLURAL:$1|urin katiguriyam|$1 urin katiguriyakunam}}.',
'category-article-count'         => "{{PLURAL:$2|Kay katiguriyapiqa kay qatiq huklla p'anqam.|Kay katiguriyapiqa kay qatiq {{PLURAL:$1|p'anqam|$1 p'anqakunam}}, $2-pura.}}",
'category-article-count-limited' => "Kay katiguriyapiqa kay qatiq {{PLURAL:$1|p'anqam|$1 p'anqakunam}}.",
'category-file-count'            => '{{PLURAL:$2|Kay katiguriyapiqa kay qatiq huklla willañiqim.|Kay katiguriyapiqa kay qatiq {{PLURAL:$1|willañiqim|$1 willañiqikunam}}, $2-pura.}}',
'category-file-count-limited'    => 'Kay katiguriyapiqa kay qatiq {{PLURAL:$1|willañiqim|$1 willañiqikunam}}.',
'listingcontinuesabbrev'         => 'qatiy',
'index-category'                 => "Yuyarinachasqa p'anqakuna",
'noindex-category'               => "Mana yuyarinachasqa p'anqakuna",

'mainpagetext'      => "'''MediaWiki nisqa llamp'u kaqqa aypaylla takyachisqañam.'''",
'mainpagedocfooter' => "Wiki llamp'u kaqmanta willasunaykipaqqa [http://meta.wikimedia.org/wiki/Help:Contents Ruraqpaq yanapana] ''(User's Guide)'' sutiyuq p'anqata qhaway.

== Qallarichkaspa ==

* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Configuration settings list]
* [http://www.mediawiki.org/wiki/Manual:FAQ MediaWiki FAQ]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce MediaWiki release mailing list]",

'about'         => "P'anqamanta",
'article'       => 'Qillqa',
'newwindow'     => '(Musuq wintanam kichakun)',
'cancel'        => 'Ama niy',
'moredotdotdot' => 'Aswan...',
'mypage'        => "P'anqay",
'mytalk'        => 'Rimachinay',
'anontalk'      => 'Kay IP huchhapaq rimanakuy',
'navigation'    => "Wamp'una",
'and'           => '&#32;-wan',

# Cologne Blue skin
'qbfind'         => 'Maskay',
'qbbrowse'       => 'Maskapuy',
'qbedit'         => "Llamk'apuy",
'qbpageoptions'  => "P'anqap akllanankuna",
'qbpageinfo'     => "P'anqamanta willay",
'qbmyoptions'    => 'Akllanaykuna',
'qbspecialpages' => "Sapaq p'anqakuna",
'faq'            => 'Pasaq tapuykuna',
'faqpage'        => 'Project:Pasaq tapuykuna',

# Vector skin
'vector-action-addsection'       => 'Allwiyta yapay',
'vector-action-delete'           => 'Qulluy',
'vector-action-move'             => 'Astay',
'vector-action-protect'          => 'Amachay',
'vector-action-undelete'         => 'Qullusqata paqarichiy',
'vector-action-unprotect'        => 'Amaña amachaychu',
'vector-simplesearch-preference' => 'Maskanapaq kallpachasqa sakumanakunata atichiy (Vector qarallapi)',
'vector-view-create'             => 'Kamariy',
'vector-view-edit'               => "Llamk'apuy",
'vector-view-history'            => 'Wiñay kawsayta qhaway',
'vector-view-view'               => 'Ñawiriy',
'vector-view-viewsource'         => 'Pukyu qillqata qhaway',
'actions'                        => 'Ruraykuna',
'namespaces'                     => "Suti k'itikuna",
'variants'                       => "Ñawra rikch'akuykuna",

'errorpagetitle'    => 'Pantasqa',
'returnto'          => '$1-man kutimuy.',
'tagline'           => '{{SITENAME}}manta',
'help'              => 'Yanapa',
'search'            => 'Maskay',
'searchbutton'      => 'Maskay',
'go'                => 'Riy',
'searcharticle'     => 'Riy',
'history'           => "Wiñay kawsay p'anqa",
'history_short'     => 'Wiñay kawsay',
'updatedmarker'     => 'qayna watukamusqaymantapacha musuqchasqa',
'info_short'        => 'Willay',
'printableversion'  => "Ch'ipachinapaq",
'permalink'         => "Kakuq t'inki",
'print'             => "Ch'ipachiy",
'edit'              => 'qillqay',
'create'            => 'Kamariy',
'editthispage'      => "Kay p'anqata llamk'apuy",
'create-this-page'  => "Kay p'anqata kamariy",
'delete'            => 'Qulluy',
'deletethispage'    => "Kay p'anqata qulluy",
'undelete_short'    => "Paqarichiy {{PLURAL:$1|huk llamk'apusqa|$1 llamk'apusqa}}",
'protect'           => 'Amachay',
'protect_change'    => 'hukchay',
'protectthispage'   => "Kay p'anqata amachay",
'unprotect'         => 'Amaña amachaychu',
'unprotectthispage' => "Kay p'anqata amaña amachaychu",
'newpage'           => "Musuq p'anqa",
'talkpage'          => "Kay p'anqamanta rimanakuy",
'talkpagelinktext'  => 'rimanakuy',
'specialpage'       => "Sapaq p'anqa",
'personaltools'     => "Kikin ruraqpa llamk'anankuna",
'postcomment'       => 'Musuq raki',
'articlepage'       => 'Qillqata qhaway',
'talk'              => 'Rimachina',
'views'             => 'Rikunakuna',
'toolbox'           => "Llamk'anakuna",
'userpage'          => "Ruraqpa p'anqanta qhaway",
'projectpage'       => "Meta p'anqata qhaway",
'imagepage'         => "Willañiqimanta p'anqata qhaway",
'mediawikipage'     => "Willay p'anqata qhaway",
'templatepage'      => "Plantilla p'anqata qhaway",
'viewhelppage'      => "Yanapana p'anqata qhaway",
'categorypage'      => "Katiguriya p'anqata qhaway",
'viewtalkpage'      => 'Rimachinata qhaway',
'otherlanguages'    => 'Huk simikunapi',
'redirectedfrom'    => '($1-manta pusampusqa)',
'redirectpagesub'   => "Pusampusqa p'anqa",
'lastmodifiedat'    => "Kay p'anqaqa $2, $1 qhipaq kutitam hukchasqa karqan.",
'viewcount'         => "Kay p'anqaqa {{PLURAL:$1|huk kuti|$1 kuti}} watukusqañam.",
'protectedpage'     => "Amachasqa p'anqa",
'jumpto'            => 'Kayman riy:',
'jumptonavigation'  => "wamp'una",
'jumptosearch'      => 'maskana',
'view-pool-error'   => "Achachaw, sirwiqkunaqa nisyu sasachakuyniyuqmi kachkan.
Nisyu ruraqkunam kay p'anqataqa qhawayta munachkan.
Ama hina kaspa, ratullata suyay kay p'anqata manaraq musuqmanta qhawaykachaspa.

$1",
'pool-timeout'      => "Wichq'aypaq suyaspa mit'a llallisqa",
'pool-queuefull'    => "Suyana siq'iqa huntasqañam",
'pool-errorunknown' => 'Mana riqsisqa pantasqa',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}}manta',
'aboutpage'            => 'Project:{{SITENAME}}manta',
'copyright'            => "Ch'aqtasqakunataqa llamk'achinkiman <i>$1</i> nisqap ruraq hayñinkama",
'copyrightpage'        => '{{ns:project}}:Ruraqpa hayñin',
'currentevents'        => 'Kunan pacha',
'currentevents-url'    => 'Project:Kunan pacha',
'disclaimers'          => 'Chiqakunamanta rikuchiy',
'disclaimerpage'       => 'Project:Sapsilla saywachasqa paqtachiy',
'edithelp'             => "Llamk'ana yanapay",
'edithelppage'         => 'Help:Qillqa yanapay',
'helppage'             => 'Help:Yanapana',
'mainpage'             => "Qhapaq p'anqa",
'mainpage-description' => "Qhapaq p'anqa",
'policy-url'           => 'Project:Kawpay',
'portal'               => "Ayllupaq p'anqa",
'portal-url'           => "Project:Ayllupaq p'anqa",
'privacy'              => 'Willakunata amachaynin',
'privacypage'          => 'Project:Willakunata amachay',

'badaccess'        => 'Saqillay pantasqa',
'badaccess-group0' => 'Manam saqillasunkichu munasqayta rurayta.',
'badaccess-groups' => 'Munasqay ruranaqa kay {{PLURAL:$2|huñupi|$2 huñukunapi}} kachkaq ruraqkunallatam rurayta saqillan: $1.',

'versionrequired'     => "$1 nisqa MediaWiki llamk'apusqatam muchunki kay p'anqata llamk'achinaykipaq",
'versionrequiredtext' => "$1 nisqa MediaWiki llamk'apusqatam muchunki kay p'anqata llamk'achinaykipaq. Astawan willasunaykipaqqa, [[Special:Version]] nisqapi qhaway",

'ok'                      => 'OK',
'retrievedfrom'           => '"$1" p\'anqamanta chaskisqa (Qhichwa / Quechua)',
'youhavenewmessages'      => '$1 qhawanayki kachkan ($2).',
'newmessageslink'         => 'Musuq willaymi',
'newmessagesdifflink'     => 'qayna hukchasqapi wakin kaynin',
'youhavenewmessagesmulti' => 'Musuq willaykunam qhawanayki kachkan $1-pi',
'editsection'             => 'allichay',
'editold'                 => "llamk'apuy",
'viewsourceold'           => 'pukyu qillqata qhaway',
'editlink'                => "llamk'apuy",
'viewsourcelink'          => 'pukyu qillqata qhaway',
'editsectionhint'         => 'Allichay rakita: $1',
'toc'                     => 'Yuyarina',
'showtoc'                 => 'rikuchiy',
'hidetoc'                 => 'pakay',
'thisisdeleted'           => '$1-ta rikuy icha paqarichiy?',
'viewdeleted'             => "$1 p'anqata rikuyta munankichu?",
'restorelink'             => '{{PLURAL:$1|qullusqa hukchasqa|$1 qullusqa hukchasqa}}',
'feedlinks'               => 'Mikhuchiy:',
'feed-invalid'            => 'Willaykuna mikhuchina layaqa manam allinchu.',
'feed-unavailable'        => 'Manam sindikasyun mikhuchinachu',
'site-rss-feed'           => '$1 RSS feed',
'site-atom-feed'          => '$1 Atom feed',
'page-rss-feed'           => '"$1" RSS feed',
'page-atom-feed'          => '"$1" Atom Feed',
'red-link-title'          => "$1 (manaraqmi p'anqachu)",

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Qillqa',
'nstab-user'      => "Ruraqpa p'anqan",
'nstab-media'     => 'Midya',
'nstab-special'   => "Sapaq p'anqa",
'nstab-project'   => "Ruraykamaypa p'anqan",
'nstab-image'     => 'Rikcha',
'nstab-mediawiki' => 'Willay',
'nstab-template'  => 'Plantilla',
'nstab-help'      => 'Yanapa',
'nstab-category'  => 'Katiguriya',

# Main script and global functions
'nosuchaction'      => 'Kay hina rurayqa manam kanchu',
'nosuchactiontext'  => "URL tiyaypi sut'ichasqa rurayqa manam kanchu.
Mana allintachá qillqanki, icha p'itisqa t'inkitachá qatinki.
{{SITENAME}} sutiyuq wikipi llamp'u kaqpipas pantasqachá kanman.",
'nosuchspecialpage' => "Kay hina sapaq p'anqaqa manam kanchu",
'nospecialpagetext' => "<strong>Mana kaq sapaq p'anqatam munanki.</strong>

Allin sapaq p'anqakunataqa tarinki [[Special:SpecialPages|Sapaq p'anqakuna]] nisqa p'anqapim.",

# General errors
'error'                => 'Pantasqa',
'databaseerror'        => 'Willañiqintin pantasqa',
'dberrortext'          => 'Willañiqimanta mañakuptiyki sintaksis pantasqam tukurqan.
Llamp\'u kaq wakichipi pantasqachá.
Qayna willañiqimanta mañakusqaqa karqan kaypacham: <blockquote><tt>$1</tt></blockquote> kay ruraypim: "<tt>$2</tt>". MySQL-pa kutichisqan pantasqaqa karqan "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Willañiqimanta mañakuptiyki sintaksis pantasqam tukurqan.
Qayna willañiqimanta mañakusqaqa karqan kaymi:
"$1"
kay ruraymantam: "$2".
MySQL-pa kutichisqan pantasqaqa karqan "$3: $4".',
'laggedslavemode'      => "'''Paqtataq''': Kay p'anqapiqa manaraqchá kachkanchu aswan qayna musuqchasqakuna.",
'readonly'             => "Willañiqintinqa hark'asqam",
'enterlockreason'      => "Qillqamuy imarayku hark'asqa karqan, hayk'appas manañachá hark'asqachu kanqa",
'readonlytext'         => "Kay {{SITENAME}} nisqap willañiqintintaqa manam hukchayta, manam chayman qillqamuyta saqillanchu, mit'awa kakuchiyraykuchá, chaymantataqchá allin kanqa.
Hark'aq kamachiqqa umallirqan kaytam nispa:
<p>$1",
'missing-article'      => "Willañiqintinqa manam tarinchu huk p'anqapi qillqasqata, chay p'anqa tarinan kaptinmanpas. P'anqap sutinqa kay hinam: \"\$1\" \$2.

Kayqa sapsilla hamun manaña kachkaq wakin kay (diff) nisqamanta icha qullusqa p'anqaman t'inkimuq wiñay kawsay t'inkimanta.

Mana kay hina kaptinqa, llamp'u kaqpi wakichiy pantasqatachá tarirqanki.
Ama hina kaspa, huk [[Special:ListUsers/sysop|kamachiqman]] willariy, URL nisqa llika tiyaytapas willaspa.",
'missingarticle-rev'   => '(musuqchasqa#: $1)',
'missingarticle-diff'  => '(wakin kay: $1, $2)',
'readonly_lag'         => "Willañiqintinqa mit'alla hark'asqam, sirwiqkuna kikinpachachastin.",
'internalerror'        => 'Ukhu pantasqa',
'internalerror_info'   => 'Ukhu pantasqa: $1',
'fileappenderrorread'  => 'Manam atinichu "$1"-ta ñawiriyta chupanchachkaspa.',
'fileappenderror'      => 'Manam atinichu "$1"-ta "$2"-man yapayta.',
'filecopyerror'        => 'Manam atinichu willañiqita "$1"-manta "$2"-man iskaychayta.',
'filerenameerror'      => 'Manam atinichu willañiqip sutinta "$1"-manta "$2"-man hukchayta.',
'filedeleteerror'      => 'Manam atinichu "$1" sutiyuq willañiqita qulluyta.',
'directorycreateerror' => 'Manam atinichu "$1" sutiyuq willañiqi churanata kamayta.',
'filenotfound'         => 'Manam tarinichu "$1" sutiyuq willañiqita.',
'fileexistserror'      => 'Manam atinichu "$1" sutiyuq willañiqiman qillqamuyta: willañiqiqa kachkanñam',
'unexpected'           => 'Mana suyaykusqa chani: "$1"="$2".',
'formerror'            => "Pantasqa: manam atinichu hunt'ana p'anqata kachayta",
'badarticleerror'      => "Kay p'anqapiqa manam saqillanchu kay hina rurayta.",
'cannotdelete'         => 'Manam atinichu "$1" sutiyuq p\'anqata icha willañiqita qulluyta.
P\'anqaqa pipapas qullusqanñachá.',
'badtitle'             => "P'anqap sutinqa manam allinchu",
'badtitletext'         => "Kay p'anqap sutinqa manam allinchu, mana allin interwiki t'inkichá icha ch'usaqchá, p'anqa sutipaq mana saqillasqa sananchayuqchá.",
'perfcached'           => "Kay willakunaqa ''cache'' nisqa pakasqa hallch'apim kachkan, chayrayku manañachá musuqchasqachu:",
'perfcachedts'         => 'Kay willakunaqa waqaychasqam. Qhipaq musuqchasqaqa $1 karqan.',
'querypage-no-updates' => "Kay p'anqata musuqchayqa manam atichkanchu. Kunanqa kaypi willakuna manam musuqchasqachu kanqa.",
'wrong_wfQuery_params' => 'Kaypa pantasqa kuskanachina tupunkuna: wfQuery()<br />
Ruray paqtachi: $1<br />
Tapuna: $2',
'viewsource'           => 'Pukyu qillqata qhaway',
'viewsourcefor'        => '$1-paq',
'actionthrottled'      => "Rurayniykiqa hark'asqam",
'actionthrottledtext'  => "Spam nisqa millay rurayta hark'anapaq, manam saqillasunkichu kayta nisyu kutikunata rurayta ratulla mit'api. Nisyutam ruraykachanki. Ama hina kaspa, huk minutukunamanta musuqmanta ruraykachay.",
'protectedpagetext'    => "Kay p'anqaqa llamk'apuymanta amachasqam.",
'viewsourcetext'       => "Kay p'anqatam qhawayta iskaychaytapas atinki:",
'protectedinterface'   => "Kay p'anqapiqa wakichintinpa uyapuranpaq qillqam.
Wandalismu nisqamanta amachasqam kachkan.",
'editinginterface'     => "'''Paqtataq:''' Uyapura p'anqatam llamk'apuchkanki. Hukchaptiykiqa, chay uyapurap rikch'ayninqa hukyanqa huk ruraqkunapaqpas. Uyapurata t'ikrayta munaspaykiqa, [http://translatewiki.net/wiki/Main_Page?setlang=qu translatewiki.net] nisqa MediaWiki t'ikrana ruraykamay llika tiyaypi ruranaykimanta hamut'ariy.",
'sqlhidden'            => '(SQL tapunaqa pakasqam)',
'cascadeprotected'     => "Kay p'anqaqa amachasqam kachkan, ''phaqcha'' nisqa kamachiwan amachasqa kay {{PLURAL:$1|p'anqapi|p'anqakunapi}} ch'aqtasqa kaspanmi:
$2",
'namespaceprotected'   => "'''$1''' nisqa suti k'ititaqa llamk'apuyta manam saqillasunkichu.",
'customcssjsprotected' => "Manam saqillasunkichu kay p'anqata llamk'apuyta, huk ruraqpa kikin tiyachisqankunayuq kaptinmi.",
'ns-specialprotected'  => "{{ns:special}} suti k'itipi p'anqakunaqa manam llamk'apunallachu.",
'titleprotected'       => "Kay p'anqa sutitaqa [[User:$1|$1]] sutiyuq ruraq kamariymanta hark'arqanmi, kayraykum nispa: ''$2''.",

# Virus scanner
'virus-badscanner'     => "Manam allintachu churapusqa: mana riqsisqa añaw maskaq: ''$1''",
'virus-scanfailed'     => 'manam atinchu añaw maskayta (tuyru: $1)',
'virus-unknownscanner' => 'mana riqsisqa añaw qulluna (antivirus):',

# Login and logout pages
'logouttext'                 => "'''Llamk'apuy tiyayniykiqa puchukasqañam.'''

Sutinnaq kaspaykipas {{SITENAME}}pi wamp'uytam atinki. Mana hinataq munaspaykiqa, [[Special:UserLogin|musuqmanta yaykuy]] ñawpaq icha huk sutiwan. Huk p'anqakunaqa kaqllam rikch'akunqa, ''cache'' nisqa pakasqa hallch'ata mana ch'usaqchaptiykiqa.",
'welcomecreation'            => '== Allinmi hamusqayki $1! ==
Rakiqunaykiqa kicharisqañam.
Ama qunqaychu [[Special:Preferences|{{SITENAME}} allinkachinaykikunata]] kikinchayta.',
'yourname'                   => 'Ruraq sutiyki',
'yourpassword'               => 'Yaykuna rimayki',
'yourpasswordagain'          => 'Yaykuna rimaykita kutipayay',
'remembermypassword'         => "Ruraqpa sutiyta yaykuna rimaytapas yuyaykuy llamk'ay tiyayniypura ({{PLURAL:$1|huk p'unchawkama|$1 p'unchawkama}})",
'securelogin-stick-https'    => "Yaykurquspa HTTPS nisqawan t'inkisqa kakuy",
'yourdomainname'             => 'Duminyuykip sutin',
'externaldberror'            => 'Hawa yaykuna pantasqam karqan, ichataq manam saqillasunkichu hawa rakiqunaykita musuqchayta.',
'login'                      => 'Yaykuy',
'nav-login-createaccount'    => 'Yaykuy',
'loginprompt'                => "{{SITENAME}}man yaykunaykipaqqa wamp'unaykipi <i>cookies</i> nisqakunaman ari ninaykim tiyan.",
'userlogin'                  => 'Yaykuy / rakiqunata kamariy',
'userloginnocreate'          => 'Yaykuy',
'logout'                     => 'Lluqsiy',
'userlogout'                 => 'Lluqsiy',
'notloggedin'                => 'Manam yaykurqankichu',
'nologin'                    => "Manaraqchu rakiqunaykichu kachkan? '''$1'''.",
'nologinlink'                => 'Kichariy',
'createaccount'              => 'Musuq rakiqunata kichariy',
'gotaccount'                 => "Rakiqunaykiñachu kachkan? '''$1'''.",
'gotaccountlink'             => 'Rakiqunaykita willaway',
'createaccountmail'          => 'chaskipaq',
'createaccountreason'        => 'Kayrayku:',
'badretype'                  => 'Qusqayki yaykuna rimakunaqa manam kaqllachu.',
'userexists'                 => 'Munasqayki ruraqpa sutiykiqa kachkanñam. Ama hina kaspa, huk ruraqpa sutiykita qillqamuy.',
'loginerror'                 => "Pantasqa llamk'apuy tiyaypa qallarisqan",
'createaccounterror'         => 'Manam atinichu rakiqunata kamariyta: $1',
'nocookiesnew'               => "Ruraqpa rakiqunaykiqa kichasqañam, ichataq manaraqmi yaykurqankichu. {{SITENAME}}qa <em>kuki</em> nisqakunatam llamk'achin ruraqkunata kikinyachinapaq. Antañiqiqniykipiqa manam <em>kuki</em> nisqakuna atinchu. Ama hina kaspa, atichispa huk kutita yaykuykachay.",
'nocookieslogin'             => "{{SITENAME}} <em>kuki</em> nisqakunata llamk'achin ruraqkunata kikinyachinapaq. Antañiqiqniykipiqa manam <em>kuki</em> nisqakuna atinchu. Ama hina kaspa, atichispa huk kutita ruraykachay.",
'noname'                     => 'Manam niwarqankichu ruraqpa allin sutinta.',
'loginsuccesstitle'          => "Llamk'apuy tiyayqa qallarisqañam",
'loginsuccess'               => 'Llamk\'apuy tiyayniykiqa qallarisqam {{SITENAME}}-pi "$1" sutiyuq kaspa.',
'nosuchuser'                 => 'Nisqayki "$1" sutiyuq ruraqqa manam kanchu.
Ruraqpa sutinqa uchuypas hatunpas sanampakunayuqmi kayta atin.
Allin qillqasqaykita llanchiriy, ichataq urapi kaq hunt\'ana p\'anqata llamk\'achiy [[Special:UserLogin/signup|musuq rakiqunata kicharinaykipaq]].',
'nosuchusershort'            => 'Nisqayki "<nowiki>$1</nowiki>" sutiyuq ruraqqa manam kanchu.
Allin qillqasqaykita llanchiriy.',
'nouserspecified'            => 'Ruraqpa sutiykitam qunayki.',
'login-userblocked'          => "Kay ruraqqa hark'asqam. Manam yaykuyta atinchu.",
'wrongpassword'              => 'Qillqamusqayki yaykuna rimaqa manam allinchu. Huk kutita ruraykachay.',
'wrongpasswordempty'         => 'Yaykuna rimaykita qillqamuyta qunqarqunkim, huk kutita ruraykachay.',
'passwordtooshort'           => 'Yaykuna rimayqa {{PLURAL:$1|1 icha aswan sanampayuq|$1 icha aswan sanampayuq}} kananmi.',
'password-name-match'        => 'Yaykuna rimaykiqa ruraqpa sutiykiman mana kaqlla kananmi.',
'password-login-forbidden'   => 'Kay ruraqpa sutinmanqa yaykuna rimanmanpas ama nisqam.',
'mailmypassword'             => 'Musuq yaykuna rimata e-chaskiwan kachamuway',
'passwordremindertitle'      => "{{SITENAME}}paq musuq mit'alla yaykuna rima",
'passwordremindertext'       => 'Pipas (qamchiki, $1 IP huchhayuq tiyaymanta) mañakuwarqan {{SITENAME}}paq musuq yaykuna rimatam e-chaski imamaytaykiman kachayta ($4).
"$2" sutiyuq ruraqpa mit\'alla yaykuna rimanqa kamarisqañam, "$3" sutichasqam kachkan. Munarqaspaykiqa, kunan yaykuspa musuq yaykuna rimaykitam akllay.
Mit\'alla yaykuna rimaykiqa kunanmanta {{PLURAL:$5|huk p\'unchawpi|$5 p\'unchawkunapi}} puchukanqa.

Huk runa kay willayta mañakurqaptinqa icha yaykuna rimaykita hukchayta manaña munaspayki, kay willayta qhawarparispa ñawpaq yaykuna rimaykita llamk\'arayachiytam atinki.',
'noemail'                    => 'Manam kanchu "$1" sutiyuq ruraqpa e-chaski imamaytan.',
'noemailcreate'              => 'Chaniyuq e-chaski imamaytatam willanayki tiyan',
'passwordsent'               => 'Musuq yaykuna rimaqa kachasqañam "$1" sutiyuq ruraqpa e-chaski imamaytanman.
Ama hina kaspa, chaskispaykiqa ruraqpa sutiykita nispa musuqmanta yaykuy.',
'blocked-mailpassword'       => "IP tiyayniykiqa hark'asqam, chayrayku manam saqillanchu yaykuna rimata musuqmanta chaskiyta, millay rurayta hark'anapaq.",
'eauthentsent'               => 'Takyachina e-chaskiqa qusqayki e-chaski imamaytaman kachamusqam. Manaraq huk e-chaskikuna kachamusqa kaptinqa, ñawpaqta e-chaskipi kamachisqakunata qatinaykim tiyan, chiqap e-chaski imamaytaykita takyachinaykipaq.',
'throttled-mailpassword'     => "Huk yaykuna rima yuyachinañam qayna {{PLURAL:$1|huk ura|$1 ura}} mit'api kachamusqam. {{PLURAL:$1|Huk ura|$1 ura}} mit'apiqa hukllam yaykuna rima yuyachina kachasqa kachun millay rurayta hark'anapaq.",
'mailerror'                  => 'E-chaskita kachaspa pantasqa: $1',
'acct_creation_throttle_hit' => "Qampa IP huchhaykiyuq kachkaq ruraqkunaqa kay wikita watukuspa ñaqha 24 urapi {{PLURAL:$1|rakiqunaykim|$1 rakiqunaykim}} kamarirqanña. Manam atinkichikchu astawan kichayta huklla p'unchawpi chay IP huchhallayuq kaspa.",
'emailauthenticated'         => "E-chaski imamaytaykiqa $2 p'unchawpi, $3 pachapi chiqapchasqañam.",
'emailnotauthenticated'      => 'E-chaski imamaytaykitaqa manaraqmi takyachirqunkichu. Mana takyachirquptiykiqa, kay qatiq rurachinakunataqa manam atinkichu.',
'noemailprefs'               => "E-chaski imamaytaykita willaway kay rurachinakunata llamk'achinapaq.",
'emailconfirmlink'           => 'E-chaski imamaytaykita takyachiy',
'invalidemailaddress'        => "E-chaski imamaytaykiqa manam allinchu, manachá allinta qillqasqa. Ama hina kaspa, musuq allin sananchayuq imamaytaykita qillqamuy icha k'itichata ch'usaqchay.",
'accountcreated'             => 'Rakiqunaqa kichasqañam',
'accountcreatedtext'         => '$1 sutiyuq ruraqpa rakiqunanqa kichasqañam.',
'createaccount-title'        => '{{SITENAME}}paq musuq rakiqunata kichariy',
'createaccount-text'         => 'Pipas e-chaski imamaytaykipaq {{SITENAME}}pi ($4) "$2" sutiyuq rakiqunatam kicharqan, "$3" nisqa yaykuna rimayuq. Yaykuspayki yaykuna rimaykita hukchanaykim tiyanman.

Kay willay pantasqa kaptinqa, qhawarparillay.',
'usernamehasherror'          => 'Ruraqpa sutinqa ama iskaychakana (<nowiki>#</nowiki>) sananchayuqchu kachun',
'login-throttled'            => 'Nisyu kutitachá kay rakiqunapaq yaykuna rimawan ñaqha yaykuykachanki. Ama hina kaspa, suyariy manaraq musuqmanta yaykuykachaspa.',
'loginlanguagelabel'         => 'Rimay: $1',
'suspicious-userlogout'      => "Lluqsiy mañakuyniykiqa mananchasqam karqan, waqllisqa wamp'unamanta icha pakaq proksimanta kachasqa kaspanchá.",

# E-mail sending
'php-mail-error-unknown' => 'Mana riqsisqa pantasqa PHP mail() rurananpi',

# Password reset dialog
'resetpass'                 => 'Ruraqpa yaykuna rimanta hukchay',
'resetpass_announce'        => "E-chaskiwan kachasqa mit'alla yaykuna rimawanmi yaykurqunki. Ama hina kaspa, musuq yaykuna rimaykita qillqamuy:",
'resetpass_text'            => '<!-- Añada texto aquí -->',
'resetpass_header'          => 'Yaykuna rimata hukchay',
'oldpassword'               => "Mawk'a yaykuna rima:",
'newpassword'               => 'Musuq yaykuna rima:',
'retypenew'                 => 'Musuq yaykuna rimaykita takyachiy:',
'resetpass_submit'          => 'Yaykuna rimata hukchaspa yaykuy',
'resetpass_success'         => 'Yaykuna rimaykiqa hukchasqañam. Yaykamuchkankim...',
'resetpass_forbidden'       => 'Manam saqillanchu yaykuna rimata hukchayta',
'resetpass-no-info'         => "Yaykunaykim tiyan kay p'anqata chiqalla aypanaykipaq.",
'resetpass-submit-loggedin' => 'Yaykuna rimata hukchay',
'resetpass-submit-cancel'   => 'Tatiy',
'resetpass-wrong-oldpass'   => "Mit'alla icha kunan yaykuna rimaqa manam allinchu.
Yaykuna rimaykitaqa aypalla hukcharqunkiñachá icha huk mit'alla yaykuna rimata mañakurqunkiñachá.",
'resetpass-temp-password'   => "Mit'alla yaykuna rima:",

# Edit page toolbar
'bold_sample'     => 'Yanasapa qillqa',
'bold_tip'        => 'Yanasapa qillqa',
'italic_sample'   => 'Wiksu qillqa',
'italic_tip'      => 'Wiksu qillqa',
'link_sample'     => "T'inkip sutin",
'link_tip'        => "Ukhu t'inki",
'extlink_sample'  => "http://www.example.com t'inkip umallin",
'extlink_tip'     => "Hawa t'inki (ñawpaqta http:// nisqata yapariy)",
'headline_sample' => "Uma siq'i qillqa",
'headline_tip'    => "Iskay ñiqi hanaq siq'i qillqa",
'math_sample'     => 'Kayman minuywata qillqamuy',
'math_tip'        => 'Yupana minuywa (LaTeX)',
'nowiki_sample'   => "Kayman mana wiki rikch'akuyniyuq qillqata yapamuy",
'nowiki_tip'      => "Wiki rikch'akuy ama kachunchu",
'image_sample'    => 'Qhawarichiy.jpg',
'image_tip'       => "Ch'aqtasqa rikcha",
'media_tip'       => "Multimidya willañiqiman t'inki",
'sig_tip'         => "Sutiykita, p'unchawta, pachatapas silq'umuy",
'hr_tip'          => "Siriq siq'i (ama nisyutachu llamk'apuy)",

# Edit pages
'summary'                          => 'Pisichay:',
'subject'                          => 'Yachaywa/umalli:',
'minoredit'                        => 'Kayqa uchuylla hukchaymi',
'watchthis'                        => 'Kay qillqata watiqay',
'savearticle'                      => "P'anqata waqaychay",
'preview'                          => 'Manaraq waqaychaspa qhawariy',
'showpreview'                      => 'Ñawpaqta qhawallay',
'showlivepreview'                  => 'Kawsaqlla qhawariy',
'showdiff'                         => 'Hukchasqakunata rikuchiy',
'anoneditwarning'                  => "''Paqtataq:'' Manaraqmi ruraqpa sutiykita qumurqunkichu. IP huchhaykim kay p'anqap hukchay hallch'ayninpi waqaychasqa kanqa.",
'anonpreviewwarning'               => "''Manam ruraqpa sutiykiwan yaykusqa kachkankichu. Imatapas waqaychaptiykiqa, IP huchhaykim hallch'asqa kanqa kay p'anqap llamk'apuy wiñay kawsayninpi.''",
'missingsummary'                   => "'''Paqtataq:''' Manaraqmi llamk'apusqaykimanta pisichaytachu qillqamurqunki. Musuqmanta «{{int:savearticle}}» nisqapi ñit'iptiykiqa, llamk'apusqayki waqaychasqam kanqa mana pisichay kaptinpas.",
'missingcommenttext'               => 'Ama hina kaspa, kay qatiqpi willaspa qillqamuy.',
'missingcommentheader'             => "'''Paqtataq:''' Manaraqmi kay willaypa umallintachu qillqamurqunki. Musuqmanta \"{{int:savearticle}}\" nisqapi ñit'iptiykiqa, llamk'apusqayki waqaychasqam kanqa mana willaypa umallin kaptinpas.",
'summary-preview'                  => 'Pisichayta ñawpaqta qhawarillay:',
'subject-preview'                  => 'Yachaywata/umallita ñawpaqta qhawarillay:',
'blockedtitle'                     => "Ruraqqa hark'asqam",
'blockedtext'                      => "'''Ruraqpa sutiykiqa icha IP huchhaykiqa hark'asqam.'''

$1 sutiyuqmi hark'asurqunki ''$2'' nisqarayku.

* Hark'aypa qallarisqan: $8
* Hark'aypa puchukanan: $6
* Awaytiyasqa hark'ana ruraq: $7

Hark'aymanta rimanakunapaqqa $1-man icha huk [[{{MediaWiki:Grouppage-sysop}}|kamachiqman]] willariy.
Manam saqillasunkichu 'Kay ruraqman e-chaskita kachay' nisqata llamk'achiyta manaraq allin e-chaski imamaytaykita [[Special:Preferences|allinkachinaykikunaman]] quptiyki manaraqpas chaymanta hark'asqa kaptiyki.
Kunan IP huchhaykiqa $3 nisqam, hark'ay huchhataq #$5 nisqam. Mañakuspaykiqa kay p'anqapi tukuy nisqakunata willay.",
'autoblockedtext'                  => "IP huchhaykiqa kikinmanta hark'asqam, $1-pa hark'asqan ruraqpa llamk'achisqan kaptinmi. Hark'asqaqa kayraykum:

:''$2''

* Hark'aypa qallarisqan: $8
* Hark'aypa puchukanan: $6
* Awaytiyasqa hark'ana ruraq: $7

Hark'aymanta rimanakunapaqqa $1-man icha huk [[{{MediaWiki:Grouppage-sysop}}|kamachiqman]] willariy.
Manam saqillasunkichu 'Kay ruraqman e-chaskita kachay' nisqata llamk'achiyta manaraq allin e-chaski imamaytaykita [[Special:Preferences|allinkachinaykikunaman]] quptiyki manaraqpas chaymanta hark'asqa kaptiyki.

Kunan IP huchhaykiqa $3 nisqam, hark'ay huchhataq #$5 nisqam. Mañakuspaykiqa kay p'anqapi tukuy nisqakunata willay.",
'blockednoreason'                  => "hark'aqqa manam ninchu imarayku",
'blockedoriginalsource'            => "'''$1'''-pa pukyu qillqanqa kaymi:",
'blockededitsource'                => "'''$1'''-pi '''llamk'apusqaykikuna''' nisqapi qillqasqaqa kaymi:",
'whitelistedittitle'               => "Yaykuspallaykim llamk'apuyta atinki.",
'whitelistedittext'                => "$1ta ruranaykim tiyan qillqakunata llamk'apunaykipaq.",
'confirmedittext'                  => "P'anqakunata llamk'apunaykipaqqa e-chaski imamaytaykita takyachinaykim tiyan. Ama hina kaspa, e-chaski imamaytata kicharispa takyachiy [[Special:Preferences|allinkachinaykikunapi]].",
'nosuchsectiontitle'               => 'Manam tarinichu chay rakita',
'nosuchsectiontext'                => 'Allichaykacharqunki mana kachkaq rakitam.
Astasqachá icha qullusqachá qhawachkaptiyki.',
'loginreqtitle'                    => 'Yaykunaykim tiyan',
'loginreqlink'                     => 'yaykuna',
'loginreqpagetext'                 => "Huk p'anqakunata rikunaykipaqqa $1ykim tiyan.",
'accmailtitle'                     => 'Yaykuna rimaqa kachasqañam.',
'accmailtext'                      => "Kikinmanta kamarisqa [[User talk:$1|$1]]-paq yaykuna rimaqa $2-manmi kachasqaña.

Yaykurqaspaqa ''[[Special:ChangePassword|yaykuna rima hukchana]]'' p'anqapi kay musuq rakiqunapaq yaykuna rimata hukchaytam atinki.",
'newarticle'                       => '(Musuq)',
'newarticletext'                   => "Manaraq kachkaq p'anqatam llamk'apuchkanki. Musuq p'anqata kamariyta munaspaykiqa, qillqarillay. Astawan ñawiriyta munaspaykiqa, [[{{MediaWiki:Helppage}}|yanapana p'anqata]] qhaway. Mana munaspaykitaq, ñawpaq p'anqaman ripuy.",
'anontalkpagetext'                 => "---- ''Kayqa huk sutinnaq icha mana sutinta llamk'achiq ruraqpa rimanakuyninmi. IP huchhantam hallch'asunchik payta sutinchanapaq. Achka ruraqkunam huklla IP huchhanta llamk'achiyta atin. Sutinnaq ruraq kaspaykiqa, mana qampa rurasqaykimanta willamusqakunata rikuspaykiqa, ama hina kaspa [[Special:UserLogin/signup|rakiqunaykita kamariy]] icha [[Special:UserLogin|yaykuy]] huk sutinnaq ruraqkunawan ama pantasqa kanaykipaq.''",
'noarticletext'                    => "Kunanqa kay p'anqa ch'usaqmi. Kaytam rurayta atinkiman: kay p'anqap sutinta [[Special:Search/{{PAGENAME}}|huk p'anqakunapi maskay]], <span class=\"plainlinks\">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} hallch'ankunapi maskay] icha [{{fullurl:{{FULLPAGENAME}}|action=edit}} kay p'anqata llamk'apuy]</span>.",
'noarticletext-nopermission'       => "Kay p'anqaqa ch'usaqmi.
Kay p'anqap sutintaqa [[Special:Search/{{PAGENAME}}|huk p'anqakunapi maskaytam atinki]],
icha payman kapuq <span class=\"plainlinks\">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} hallch'akunapi maskaykiman]</span>.",
'userpage-userdoesnotexist'        => '"$1" sutiyuq ruraqpa rakiqunanqa manam kanchu. Ama hina kaspa, llanchikuy kay p\'anqata kamarinaykimanta.',
'userpage-userdoesnotexist-view'   => '"$1" sutiyuq rakiqunaqa manam hallch\'asqachu.',
'blocked-notice-logextract'        => "Kay ruraqqa hark'asqam kachkan.
Hark'ay hallch'api qhipaq hark'asqataqa kaypim rikunki willasunaykipaq:",
'clearyourcache'                   => "'''Paqtataq''': Willañiqita waqaycharquspaykiqa, wamp'unaykip ''cache'' nisqa pakasqa waqaychananta ch'usaqchanaykichá tiyanman hukchasqaykikunata rikunaykipaq:
'''Mozilla / Firefox / Safari:''' ''Shift'' yatachkaspa ''Reload'' ñit'iy, ichataq ''Ctrl-F5'' icha ''Ctrl-R'' yatay (''Command-R'' Macintosh nisqapi); '''Konqueror: '''''Reload'' ñit'iy icha ''F5'' yatay; '''Opera:''' ''cache'' nisqata ch'usaqchay kaypi: ''Tools → Preferences;'' '''Internet Explorer:''' ''Ctrl'' yatachkaspa ''Refresh'' ñit'iy, icha ''Ctrl-F5'' yatay.",
'usercssyoucanpreview'             => "'''Kunay:''' \"{{int:showpreview}}\" nisqa ñit'inata llamk'achiy musuq css nisqata qhawanaykipaq, manaraq waqaychaspa.",
'userjsyoucanpreview'              => "'''Kunay:''' \"{{int:showpreview}}\" nisqa ñit'inata llamk'achiy musuq JavaScript nisqata qhawanaykipaq, manaraq waqaychaspa.",
'usercsspreview'                   => "Yuyariy, qhawarillachkankim ruraqpa CSS-niykita, manaraqmi waqaychasqachu!'''",
'userjspreview'                    => "'''Yuyariy, qhawarillachkankim ruraqpa JavaScript-niykita, manaraqmi waqaychasqachu!'''",
'sitecsspreview'                   => "'''Yuyariy, qhawarillachkankim kay CSS-ta.'''
'''Manaraqmi waqaychasqachu!'''",
'sitejspreview'                    => "'''Yuyariy, qhawarillachkankim kay JavaScript qillqata.'''
'''Manaraqmi waqaychasqachu!'''",
'userinvalidcssjstitle'            => "'''Paqtataq:''' Manam kanchu \"\$1\" qara. Yuyariy, kikinpa .css, .js p'anqankunaqa uchuy sanampa umalliyuqmi, ahinataq {{ns:user}}:Foo/vector.css manataq  {{ns:user}}:Foo/Vector.css nisqachu.",
'updated'                          => '(Musuqchasqa)',
'note'                             => "'''Musyay:'''",
'previewnote'                      => "'''Yuyaykuy: Kayqa manaraq waqaychaspa qhawariymi!'''",
'previewconflict'                  => "Rikuchkanki kay p'anqataqa, ima hinachus waqaychasqa kanqa.",
'session_fail_preview'             => "'''Achachaw! Llamk'apusqaykiqa manam waqaychasqachu, llamk'ana tiyaypa willankuna chinkaptinmi. Ama hina kaspa, musuqmanta ruraykachay. Mana atispaykiqa, [[Special:UserLogout|lluqsispa]] musuqmanta yaykuy.'''",
'session_fail_preview_html'        => "'''Achachaw! Llamk'apusqaykiqa manam waqaychasqachu, llamk'ana tiyaypa willankuna chinkaptinmi.'''

''{{SITENAME}} llump'aq HTML nisqawan llamk'achkaptinmi, ñawpaq qhawariyqa pakasqam kachkan JavaScript nisqawan wankhayta hark'anapaq.''

'''Allin sunquwan kamarirqaspaykiqa, musuqmanta ruraykachay. Mana atispaykiqa, [[Special:UserLogout|lluqsispa]] musuqmanta yaykuspa ruraykachay.'''",
'token_suffix_mismatch'            => "'''Llamk'apusqaykimanqa ama nisqam, mink'akuqniyki llamk'apuy willaypi sapaq sananchakunata arwiptinmi. Ama nisqa karqanqa qillqata waqlliymantam amachanapaq.
Kayqa maykunapi tukukun, mana allin wakichisqa proxy sirwiytam llamk'achiptiyki.'''",
'editing'                          => "Llamk'apuspa: $1",
'editingsection'                   => "Llamk'apuspa: $1 (raki)",
'editingcomment'                   => "Llamk'apuspa: $1 (musuq raki)",
'editconflict'                     => 'Ruray taripanakuy: $1',
'explainconflict'                  => "Ruray taripanakuy: Huk runam kay p'anqata llamk'apurqun, qamtaq manaraq waqaychaptiyki.
Umapi kaq qillqana k'itipi kunan kachkaq qillqam.
Qampa hukchasqaykikunataq sikipi kaq qillqana k'itipim.
Kunanqa rurasqaykikunata musuq qillqaman ch'aqtanaykim tiyan.
'''Umapi kaq qillqallam''' waqaychasqa kanqa.",
'yourtext'                         => 'Qillqasqayki',
'storedversion'                    => "Hallch'asqa musuqchasqa",
'nonunicodebrowser'                => "'''Paqtataq: Wamp'unaykiqa manam Unicode nisqawan llamk'anchu. Huk llamk'apuna llikam llamk'achkan p'anqakunata takyasqalla llamk'apunaykipaq: mana ASCII kaq sananchakunaqa chunka suqtayuqnintin huchha llikapim kanqa.'''",
'editingold'                       => "'''Paqtataq: Kay p'anqap mawk'a hukchasqantam llamk'apuchkanki. Waqaychaptiykiqa, chaymanta aswan musuq hukchasqankuna chinkanqam.'''",
'yourdiff'                         => 'Hukchasqaykikuna',
'copyrightwarning'                 => "Lliw {{SITENAME}}paq llamk'apuykunaqa $2 nisqawanmi uyaychasqa kanqa ($1 p'anqata qhaway). Llamk'asqaykikunata huk runakunap allinchayninta qispilla mast'ariyninta mana munaspaykiqa, ama kayman qillqamuychu.<br />
Takyachichkankim: Kayqa ñuqap qillqasqaymi icha qispi pukyumanta iskaychamusqaymi, nispa.
<br />'''Mana saqillasqa kaspaykiqa, ama qillqarimuychu iskaychay hayñi ''(copyright)'' nisqayuq qillqakunata iskaychamuspa!'''",
'copyrightwarning2'                => "Lliw {{SITENAME}}paq llamk'apuykunaqa huk ruraqkunap llamk'apunallanmi, hukchanallanmi icha qullunallanmi. Llamk'asqaykikunata huk runakunap allinchayninta qispilla mast'ariyninta mana munaspaykiqa, ama kayman qillqamuychu.<br />
Takyachichkankim: Kayqa ñuqap qillqasqaymi, ñuqamanmi kapuwan icha qispi pukyumanta iskaychamusqaymi, nispa ($1 p'anqata qhaway).
<br />'''Mana saqillasqa kaspaykiqa, ama qillqarimuychu iskaychay hayñi ''(copyright)'' nisqayuq qillqakunata iskaychamuspa!'''",
'longpageerror'                    => "'''PANTASQA: Kachasqayki qillqaqa $1 kB hatunmi, $2 kB-manta aswan hatunmi. Manam waqaychasqa kayta atinchu.'''",
'readonlywarning'                  => "'''PAQTATAQ: Willañiqintinqa hark'asqam mit'awa kakuchinapaq. Chayrayku kunanqa manam atichkankichu llamk'apusqaykikunata waqaychayta.
Qillqasqaykita iskaychaspa antañiqiqniykipi willañiqiman llut'amuspa chaypi waqaychariy. Kunanmanta huk pachallapi musuqmanta waqaychaykachay.'''

Hark'aq kamachiqqa kaytam nirqan: $1, kayraykum nispa.",
'protectedpagewarning'             => "'''Paqtataq: Kay p'anqaqa llamk'apuymanta amachasqam kamachiqkunallap hukchananpaq.'''
Hallch'api qhipaq kaq yaykuchisqataqa kay qatiqpim rikunki willasunaykipaq:",
'semiprotectedpagewarning'         => "'''Musyay:''' Kay p'anqaqa amachasqam rakiqunayuq ruraqkunallap hukchananpaq.
Hallch'api qhipaq kaq yaykuchisqataqa kay qatiqpim rikunki willasunaykipaq:",
'cascadeprotectedwarning'          => "'''Paqtataq:''' Kay p'anqaqa amachasqam, kamachiqkunallam llamk'apuyta atin, ''phaqcha'' nisqa kamachiwan amachasqa kay {{PLURAL:$1|p'anqapim|p'anqakunapim}} ch'aqtasqa kaspanmi:",
'titleprotectedwarning'            => "'''Paqtataq:  Kay p'anqaqa hark'asqam, chayrayku [[Special:ListGroupRights|sapaq hayñiyuqlla ruraqkunam]] kamariyta atin.'''
Hallch'api qhipaq kaq yaykuchisqataqa kay qatiqpim rikunki willasunaykipaq:",
'templatesused'                    => "Kay p'anqapi llamk'achisqa {{PLURAL:$1|plantilla|plantillakuna}}:",
'templatesusedpreview'             => "Kay qhawariypi llamk'achisqa {{PLURAL:$1|plantilla|plantillakuna}}:",
'templatesusedsection'             => "Kay p'anqa rakipi llamk'achisqa {{PLURAL:$1|plantilla|plantillakuna}}:",
'template-protected'               => '(amachasqa)',
'template-semiprotected'           => '(rakilla amachasqa)',
'hiddencategories'                 => "Kay p'anqaqa {{PLURAL:$1|1 pakasqa katiguriya|$1 pakasqa katiguriyakuna}}manmi kapun:",
'nocreatetitle'                    => "P'anqa kamariyqa saywachasqam",
'nocreatetext'                     => "{{SITENAME}}piqa saywachasqam musuq p'anqakunata kamariy. Ñawpaqman kutiytam atinkiman kachkaqña p'anqata llamk'apuspa. Astawantaq, [[Special:UserLogin|yaykuy icha musuq rakiqunata kichariy]].",
'nocreate-loggedin'                => "Manam saqillasunkichu musuq p'anqakunata kamariyta.",
'sectioneditnotsupported-title'    => "Raki allichayqa manam q'imisqachu",
'sectioneditnotsupported-text'     => "Raki allichayqa kay p'anqapi manam q'imisqachu.",
'permissionserrors'                => 'Saqillay pantasqakuna',
'permissionserrorstext'            => 'Manam saqillasunkichu, {{PLURAL:$1|kayraykum|kayraykum}}:',
'permissionserrorstext-withaction' => 'Manam saqillasunkichu $2-ta, {{PLURAL:$1|kayraykum|kayraykum}}:',
'recreate-moveddeleted-warn'       => "'''Paqtataq: Ñawpaqta qullusqaña p'anqatam musuqmanta kamarichkanki.'''

Hamut'arillay, chayaqillachu manallachu kay p'anqata kamariy.
Kaymi kay p'anqamanta qulluy hallch'a, astay hallch'apas, yanapasunaykipaq:",
'moveddeleted-notice'              => "Kay p'anqaqa qullusqam.
Kaymi kay p'anqamanta qulluy hallch'a, astay hallch'apas, willasunaykipaq:",
'log-fulllog'                      => "Hunt'a hallch'ata qhaway",
'edit-hook-aborted'                => "Ch'iwinam llamk'apuyta t'ipirqan.
Manam nirqanchu imarayku.",
'edit-gone-missing'                => "Manam atirqanichu p'anqata musuqchayta.
Qullusqachá.",
'edit-conflict'                    => "Tuylla llamk'apuymanta sasachakuy.",
'edit-no-change'                   => "Manapuni hukchaptiykim, llamk'apusqayki manam hallch'asqachu.",
'edit-already-exists'              => "Manam atinichu musuq p'anqata kamariyta.
Kachkañam.",

# Parser/template warnings
'expensive-parserfunction-warning'        => "Paqtataq: Kay p'anqaqa nisyu achka qullqipaq t'ikrana rurana qayayniyuqmi.

$2-manta aswan pisillam {{PLURAL:$2|qayayniyuq|qayayniyuq}} kanman, kunantaq {{PLURAL:$1|$1 qayayniyuqmi|$1 qayayniyuqmi}} kachkan.",
'expensive-parserfunction-category'       => "Nisyu achka qullqipaq t'ikrana rurana qayayniyuq p'anqakuna",
'post-expand-template-inclusion-warning'  => "Paqtataq: Nisyum ch'aqtasqa plantillakuna.
Huk plantillakunaqa manam ch'aqtasqachu kanqa.",
'post-expand-template-inclusion-category' => "Nisyu ch'aqtasqa plantillakunayuq p'anqakuna",
'post-expand-template-argument-warning'   => "Paqtataq: Kay p'anqaqa huk icha aswan nisyu ch'aqtasqa plantilla niyniyuqmi.
Chay niykunaqa manam chaninchasqachu.",
'post-expand-template-argument-category'  => "Mana chaninchasqa plantilla niyniyuq p'anqakuna",
'parser-template-loop-warning'            => 'Muyurikuq pusapunam tarisqa: [[$1]]',
'parser-template-recursion-depth-warning' => 'Pusapunap muyurikuy saywanmi yallisqa ($1)',
'language-converter-depth-warning'        => "Rimay t'ikranap ukhu kayninpa saywanqa yallisqam ($1)",

# "Undo" feature
'undo-success' => 'Rurasqata kutichiyta atinkim. Manaraq kutichispaykiqa, kay qatiq wakichayta qhawariy rikunaykipaq chiqapta munasqaykichu manallachu, chaymantataq waqaychay kutichinapaq.',
'undo-failure' => "Manam atinichu llamk'apusqata kutichiyta, huk ruraqtaq musuqta llamk'apurquptinñam.",
'undo-norev'   => "Manam atinichu llamk'apusqata kutichiyta, mana kaptinmi icha qullusqa kaptinmi.",
'undo-summary' => '[[Special:Contributions/$2|$2]]-pa $1 hukchasqanta kutichisqa ([[User talk:$2|rimay]])',

# Account creation failure
'cantcreateaccounttitle' => 'Manam atinichu rakiqunata kichayta',
'cantcreateaccount-text' => "Kay IP tiyaymanta ('''$1''') rakiquna kichariyqa [[User:$3|$3]]-pa hark'asqanmi.

$3-qa nirqan kayraykum: ''$2''",

# History pages
'viewpagelogs'           => "Kay p'anqamanta hallch'akunata qhaway",
'nohistory'              => "Kay p'anqamantaqa manam llamk'apuy wiñay kawsay kanchu.",
'currentrev'             => 'Kunan hukchasqa',
'currentrev-asof'        => 'Kunan musuqchasqa, $1 pacha',
'revisionasof'           => "$1-pa llamk'apusqan",
'revision-info'          => "Kayqa p'anqap mawk'a llamk'apusqa kasqanmi, $1 p'unchawpi $2-pa rurasqan",
'previousrevision'       => '← ñawpaq hukchasqa',
'nextrevision'           => 'Qatiq hukchasqa →',
'currentrevisionlink'    => 'Kunan hukchasqata qhaway',
'cur'                    => 'kunan',
'next'                   => 'qat',
'last'                   => 'ñawpaq',
'page_first'             => 'ñawpaqkuna',
'page_last'              => 'qhipaqkuna',
'histlegend'             => "Sut'ichana: (kunan) = p'anqap kunan kachkayninwan huk kaykuna,
(ñawpaq) = ñawpaq kachkasqanwan huk kaykuna, a = aslla hukchasqa",
'history-fieldset-title' => 'Wiñay kawsaypi maskay',
'history-show-deleted'   => 'Qullusqalla',
'histfirst'              => 'Ñawpaqkuna',
'histlast'               => 'Qhipaqkuna',
'historysize'            => '({{PLURAL:$1|1 byte|$1 byte}})',
'historyempty'           => "(ch'usaq)",

# Revision feed
'history-feed-title'          => 'Hukchasqakunap wiñay kawsaynin',
'history-feed-description'    => "Kay p'anqata hukchasqakunap wiñay kawsaynin",
'history-feed-item-nocomment' => '$1, $2-pi',
'history-feed-empty'          => "Mañakusqayki p'anqaqa manam kanchu.
Wikimanta qullusqachá icha astasqachá.
Musuq chaniyuq p'anqakunata [[Special:Search|wikipi maskaykachay]].",

# Revision deletion
'rev-deleted-comment'         => '(qullusqa rimapuy)',
'rev-deleted-user'            => '(qullusqa ruraqpa sutin)',
'rev-deleted-event'           => "(qullusqa hallch'a)",
'rev-deleted-user-contribs'   => "[ruraqpa sutinqa icha IP tiyayqa qichusqam - musuqchasqaqa llamk'apusqakunamanta pakasqam]",
'rev-deleted-text-permission' => "P'anqamanta kay llamk'apusqaqa '''qullusqam'''.
Astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} qulluy hallch'apichá].",
'rev-deleted-text-unhide'     => "P'anqamanta kay llamk'apusqaqa '''qullusqam'''.
Astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} qulluy hallch'apichá].
Kamachiq kaspayki kunanraqpas munaspaykiqa, [$1 kay wakin kayta qhawayta] atinkiraqmi.",
'rev-suppressed-text-unhide'  => "P'anqamanta kay llamk'apusqaqa '''ñit'ipasqam'''.
Astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ñit'ipay hallch'apichá].
Kamachiq kaspayki kunanraqpas munaspaykiqa, [$1 kay wakin kayta qhawayta] atinkiraqmi.",
'rev-deleted-text-view'       => "P'anqamanta kay llamk'apusqaqa '''qullusqam'''.
Kamachiq kaspaykiqa rikuyta atinkim;
astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} qulluy hallch'apichá].",
'rev-suppressed-text-view'    => "P'anqamanta kay llamk'apusqaqa '''ñit'ipasqam'''.
Kamachiq kaspayki kunanraqpas munaspaykiqa, qhawayta atinkiraqmi.
Astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ñit'ipay hallch'apichá].",
'rev-deleted-no-diff'         => "Kay hukchasqataqa manam rikuyta atinkichu, huk musuqchasqa '''qullusqa''' kaptinmi.
Astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} qulluy hallch'apichá].",
'rev-suppressed-no-diff'      => "Kay wakin kaytaqa manam rikuyta atinkichu, huk musuqchasqa '''qullusqa''' kaptinmi.",
'rev-deleted-unhide-diff'     => "Kay wakin kaypaqqa huk musuqchasqa '''qullusqam'''.
Astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} qulluy hallch'apichá].
Kamachiq kaspayki kunanraqpas munaspaykiqa, [$1 kay wakin kayta qhawayta] atinkiraqmi.",
'rev-suppressed-unhide-diff'  => "Kay wakin kaypaq huk musuqchasqaqa '''ñit'ipasqam'''.
Astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ñit'ipay hallch'apichá].
Kamachiq kaspayki kunanraqpas munaspaykiqa, [$1 kay wakin kayta qhawayta] atinkiraqmi.",
'rev-deleted-diff-view'       => "Kay wakin kaypaq huk musuqchasqaqa '''qullusqam'''.
Kamachiq kaspayki kay wakin kayta qhawayta atinkim; astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} qulluy hallch'apichá].",
'rev-suppressed-diff-view'    => "Kay wakin kaypaq huk musuqchasqaqa '''ñit'ipasqam'''.
Kamachiq kaspayki kay wakin kayta qhawayta atinkim; astawanchá rikunkiman [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ñit'ipay hallch'apichá].",
'rev-delundel'                => 'rikuchiy/pakay',
'rev-showdeleted'             => 'rikuchiy',
'revisiondelete'              => "Mawk'a llamk'apusqakunata qulluy/paqarichiy",
'revdelete-nooldid-title'     => "Taripana llamk'apusqaqa manam allinchu",
'revdelete-nooldid-text'      => "Manam taripana llamk'apusqata akllarqunkichu imawanchus kay ruranata aknachanaykipaq, icha akllasqa llamk'apusqaqa manam kanchu, icha kachkaq llamk'apusqata pakaykachachkanki.",
'revdelete-nologtype-title'   => "Mana ima qusqa hallch'a layapas",
'revdelete-nologtype-text'    => "Manam ima hallch'a layatapas qurqankichu kay rurayta qallarinaykipaq.",
'revdelete-nologid-title'     => "Hallch'asqa willayqa manam allinchu",
'revdelete-nologid-text'      => "Manam taripana hallch'a rurayta churarqankichu kay ruranata qallarinaykipaq, icha churasqayki willayqa manam kanchu.",
'revdelete-no-file'           => 'Sapaqchasqa willañiqiqa manam kanchu.',
'revdelete-show-file-confirm' => 'Allinta yachankichu "<nowiki>$1</nowiki>" willañiqimanta qullusqa $2-manta $3-pi musuqchasqata qhawayta munaspayki?',
'revdelete-show-file-submit'  => 'Arí',
'revdelete-selected'          => "'''{{PLURAL:$2|Akllasqa llamk'apusqa|Akllasqa llamk'apusqakuna}} [[:$1]]-manta:'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Akllasqa tukusqa|Akllasqa tukusqakuna}} hallch'api:'''",
'revdelete-text'              => "'''Qullusqa llamk'apusqakunaqa p'anqap wiñay kawsayninpi hallch'ankunapipas paqarinqaraqmi, samiqninpa rakinkunataq manam uyanalla qhawanapaqchu.'''
{{SITENAME}}pi huk kamachiqkunaqa p'anqap pakasqa samiqninta qhawaspa qullusqa kaymanta kutichiyta atinkuraqmi kay kaqlla uyapuratam llamk'achispa, kay wikip kamariqninkuna mana huk saywachanakunata tiyachiptinqa.",
'revdelete-confirm'           => 'Ama hina kaspa, takyachiy munayniykita, qatiqninkunata riqsiyniykita, [[{{MediaWiki:Policy-url}}|kawpaykama]] rurayniykitapas.',
'revdelete-suppress-text'     => "Pakay ruranata '''kaylla kaptin''' llamk'achiy:
* Runamanta mana allin willakuna
*: ''wasi tiyay imamaytakuna, karu rimay huchhakuna, allin kawsay tarikuq wasimanta huchhakuna, chay hinakunapas.''",
'revdelete-legend'            => 'Rikunapaq saywachanakunata tiyachiy',
'revdelete-hide-text'         => 'Qhawana qillqata pakay',
'revdelete-hide-image'        => 'Willañiqip samiqninta pakay',
'revdelete-hide-name'         => 'Rurayta paqtaytapas pakay',
'revdelete-hide-comment'      => "Llamk'apuymanta willapuyta pakay",
'revdelete-hide-user'         => 'Ruraqpa sutinta/IP huchhanta pakay',
'revdelete-hide-restricted'   => "Kamachiqkunamanta willakunata huk ruraqkunamanta hina hark'ay",
'revdelete-radio-same'        => '(ama hukchaychu)',
'revdelete-radio-set'         => 'Arí',
'revdelete-radio-unset'       => 'Ama kachunchu',
'revdelete-suppress'          => 'Kamachiqkunamantapas willakunata huk ruraqkunamanta hina raqpay',
'revdelete-unsuppress'        => "Qullusqamanta paqarisqa llamk'apusqakunapaq saywachanakunata raqpay",
'revdelete-log'               => 'Kayrayku:',
'revdelete-submit'            => "Akllasqa {{PLURAL:$1|llamk'apusqapaq|llamk'apusqakunapaq}} llamk'achiy",
'revdelete-logentry'          => "hukchasqa [[$1]]-paq llamk'apusqap rikunalla kaynin",
'logdelete-logentry'          => 'hukchasqa [[$1]]-paq tukusqap rikunalla kaynin',
'revdelete-success'           => "'''Llamk'apusqap rikunalla kayninqa aypalla musuqchasqañam.'''",
'revdelete-failure'           => "'''Manam atinichu musuqchasqakunap rikunalla kayninta musuqchayta:'''
$1",
'logdelete-success'           => "'''Tukusqap rikunalla kayninqa aypalla hukchasqañam.'''",
'logdelete-failure'           => "'''Manam atinichu hallch'ap rikunalla kayninta churayta:'''
$1",
'revdel-restore'              => 'Rikunalla kayta hukchay',
'revdel-restore-deleted'      => 'qullusqa musuqchasqakuna',
'revdel-restore-visible'      => 'rikuna musuqchasqakuna',
'pagehist'                    => "P'anqap wiñay kawsaynin",
'deletedhist'                 => 'Qullusqa wiñay kawsay',
'revdelete-content'           => 'samiq',
'revdelete-summary'           => "yuyarinata llamk'apuy",
'revdelete-uname'             => 'ruraqpa sutin',
'revdelete-restricted'        => "kamachiqkunaman llamk'achisqa saywachanakuna",
'revdelete-unrestricted'      => 'kamachiqkunamanta qichusqa saywachanakuna',
'revdelete-hid'               => 'pakasqa $1',
'revdelete-unhid'             => 'rikuchisqa $1',
'revdelete-log-message'       => '$1, $2 {{PLURAL:$2|musuqchasqa|musuqchasqakuna}}paq',
'logdelete-log-message'       => '$1, $2 {{PLURAL:$2|tukusqa|tukusqakuna}}paq',
'revdelete-hide-current'      => "Pantasqa, imatapas pakaspa $2 pacha, $1 p'unchawmanta: kayqa kunan kachkaq musuqchasqam.
Manam pakanallachu.",
'revdelete-show-no-access'    => 'Pantasqa, imatapas rikuchispa $2 pacha, $1 p\'unchawmanta: kayqa "manam tukuykunapaqchu" nispa sananchasqam.
Manam aypayta atinkichu.',
'revdelete-modify-no-access'  => 'Pantasqa, imatapas hukchaspa $2 pacha, $1 p\'unchawmanta: kayqa "manam tukuykunapaqchu" nispa sananchasqam.
Manam aypayta atinkichu.',
'revdelete-modify-missing'    => 'Pantasqa, ID $1 sutiyuqta hukchaspa: manam kanchu willañiqintinpi!',
'revdelete-no-change'         => "'''Paqtataq:''' $2 pacha, $1 p'unchawmanta kaqqa munasqa rikunalla kayniyuqñam.",
'revdelete-concurrent-change' => "Pantasqa, imatapas hukchaspa $2 pacha, $1 p'unchawmanta: pipas rikunalla kaynintaqa hukcharqunñam qam hukchaykachachkaptiyki.
Ama hina kaspa, hallch'akunapi qhaway.",
'revdelete-only-restricted'   => "Pantasqa tukurqan $2 p'unchawmanta $1 pachamanta ilimintuta pakaykachaptiyki: Manam atinkichu ilimintukunata kamachiqkunamanta pakayta mana wakin pakay akllanatapas akllaspa.",
'revdelete-reason-dropdown'   => "*Qulluypaq sapsi raykukuna
** Ruraqpa hayñinta k'irisqa
** Runamanta mana allin willaykuna
** Runata k'amiqchá willaykuna",
'revdelete-otherreason'       => 'Huk/aswan rayku:',
'revdelete-reasonotherlist'   => 'Huk rayku',
'revdelete-edit-reasonlist'   => "Qulluypaq raykukunata llamk'apuy",
'revdelete-offender'          => 'Musuqchaq ruraq:',

# Suppression log
'suppressionlog'     => "Ñit'ipay hallch'asqa",
'suppressionlogtext' => "Kay qatiq sutisuyupiqa ñaqha qullusqakunatam hark'asqakunatapas rikunki, kamachiqkunamanta pakasqa samiqniyuq. [[Special:IPBlockList|IP hark'ay sutisuyuta]] qhaway kunan hark'asqakunata rikunaykipaq.",

# History merging
'mergehistory'                     => "P'anqa wiñay kawsaykunata huñuy",
'mergehistory-header'              => "Kay p'anqawanqa huk pukyu p'anqamanta llamk'apusqakunata huk taripana p'anqamanmi huñuyta atinki.
Takyachikuy kay hukchayqa allin wiñay kawsay ñiqita ama waqllichunchu chaylla.",
'mergehistory-box'                 => "Iskay p'anqamanta llamk'apusqakunata huñuy:",
'mergehistory-from'                => "Pukyu p'anqa:",
'mergehistory-into'                => "Taripana p'anqa:",
'mergehistory-list'                => 'Huñunalla wiñay kawsay',
'mergehistory-merge'               => "[[:$1]] nisqamantaqa kay qatiq llamk'apusqakuna huñunallam [[:$2]]-man. Radyu ñit'ina wachuta llamk'achiy akllasqayki pachallapi chay pachakamallapas llamk'apusqakunata huñumunapaq. Musyariy: Wamp'una t'inkikunata ñit'ispaykiqa kay wachuta kutichinkim.",
'mergehistory-go'                  => "Huñunalla llamk'apusqakunata rikuchiy",
'mergehistory-submit'              => "Llamk'apusqakunata huñuy",
'mergehistory-empty'               => "Manam atinichu llamk'apusqakunata huñuyta.",
'mergehistory-success'             => "[[:$1]]-paq $3 {{PLURAL:$3|llamk'apusqaqa|llamk'apusqakunaqa}} aypalla [[:$2]]-man huñusqañam.",
'mergehistory-fail'                => "Manam atinichu wiñay kawsaykunata huñuyta. Ama hina kaspa, p'anqata pacha kuskanachina tupukunatapas musuqmanta llanchiy.",
'mergehistory-no-source'           => "Pukyu p'anqaqa $1 manam kanchu.",
'mergehistory-no-destination'      => "Taripana p'anqaqa $1 manam kanchu.",
'mergehistory-invalid-source'      => "Qusqayki pukyu p'anqap sutinqa manam allinchu.",
'mergehistory-invalid-destination' => "Qusqayki taripana p'anqap sutinqa manam allinchu.",
'mergehistory-autocomment'         => '[[:$1]]-ta [[:$2]]-man huñusqa',
'mergehistory-comment'             => '[[:$1]]-ta [[:$2]]-man huñusqa: $3',
'mergehistory-same-destination'    => "Qallarinapas taripanapas p'anqakunaqa manam kaqlla kayta atinchu",
'mergehistory-reason'              => 'Kayrayku:',

# Merge log
'mergelog'           => "Huñuy hallch'a",
'pagemerge-logentry' => "[[$1]]-ta [[$2]]-man huñusqa (llamk'apusqakuna $3-kama)",
'revertmerge'        => 'Huñusqata kutichiy',
'mergelogpagetext'   => "Kay qatiqpiqa aswan ñaqha huk p'anqa wiñay kawsaymanta huk p'anqa wiñay kawsayman huñusqakunatam rikunki.",

# Diffs
'history-title'            => '"$1" p\'anqata hukchasqakunap wiñay kawsaynin',
'difference'               => '(Hukchasqapura wak kaynin)',
'difference-multipage'     => "(P'anqakunaqa manam kaqllachu)",
'lineno'                   => "Siq'i $1:",
'compareselectedversions'  => "Akllasqa llamk'apusqakunata wakichay",
'showhideselectedversions' => 'Akllasqa musuqchasqakunata rikuchiy/pakay',
'editundo'                 => 'kutichiy',
'diff-multi'               => "({{PLURAL:$2|Huk ruraqpa|$2 ruraqpa}} {{PLURAL:$1|chawpipi huk llamk'apusqanqa manam rikuchisqachu|chawpipi $1 llamk'apusqankunaqa manam rikuchisqachu}})",
'diff-multi-manyusers'     => "({{PLURAL:$2|Hukmanta|$2-manta}} aswan ruraqkunap {{PLURAL:$1|chawpipi huk llamk'apusqanqa manam rikuchisqachu|chawpipi $1 llamk'apusqankunaqa manam rikuchisqachu}})",

# Search results
'searchresults'                    => 'Maskaymanta tarisqakuna',
'searchresults-title'              => '"$1" nisqapaq maskaspa taripasqakuna',
'searchresulttext'                 => '{{SITENAME}}pi maskaymanta astawan ñawirinaykipaqqa, [[{{MediaWiki:Helppage}}|{{int:help}}]] nisqapi qhaway.',
'searchsubtitle'                   => '\'\'\'[[:$1]]\'\'\' nisqatam maskanki ([[Special:Prefixindex/$1|tukuy "$1" nisqawan qallariq p\'anqakuna]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|tukuy "$1" nisqaman t\'inkimuq p\'anqakuna]])',
'searchsubtitleinvalid'            => '"$1" nisqatam maskanki',
'toomanymatches'                   => 'Nisyu taripasqakunam kutisqa, ama hina kaspa, huk taripanawan ruraykachay',
'titlematches'                     => "P'anqakunap sutinkunapi tarisqa",
'notitlematches'                   => "Manam ima p'anqakunap sutinkunapipas tarisqachu",
'textmatches'                      => "P'anqakunap qillqankunapi tarisqa",
'notextmatches'                    => "Manam ima p'anqakunap qillqankunapipas tarisqachu",
'prevn'                            => '{{PLURAL:$1|$1}} ñawpaq',
'nextn'                            => '{{PLURAL:$1|$1}} qatiq',
'prevn-title'                      => 'Ñawpaq $1 {{PLURAL:$1|taripasqa|taripasqakuna}}',
'nextn-title'                      => 'Qatiq $1 {{PLURAL:$1|taripasqa|taripasqakuna}}',
'shown-title'                      => "Huk p'anqapi $1 {{PLURAL:$1|taripasqata|taripasqakunata}} rikuchiy",
'viewprevnext'                     => 'Qhaway ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend'                => 'Maskaypaq akllanakuna',
'searchmenu-exists'                => "'''Kay wikipiqa «[[$1]]» sutiyuq p'anqam kachkan'''",
'searchmenu-new'                   => "'''Kay wikipi \"[[:\$1]]\" sutiyuq p'anqata kamariy!'''",
'searchhelp-url'                   => 'Help:Yanapana',
'searchmenu-prefix'                => "[[Special:PrefixIndex/$1|Kay ñawpa k'askaqchayuq huk p'anqakunata maskay]]",
'searchprofile-articles'           => "Samiq p'anqakuna",
'searchprofile-project'            => "Yanapanapaq ruraykamaypaqpas p'anqakuna",
'searchprofile-images'             => 'Multimidya',
'searchprofile-everything'         => 'Tukuy',
'searchprofile-advanced'           => 'Ñawparikusqa',
'searchprofile-articles-tooltip'   => '$1 nisqapi maskay',
'searchprofile-project-tooltip'    => '$1 nisqapi maskay',
'searchprofile-images-tooltip'     => 'Willañiqikunata maskay',
'searchprofile-everything-tooltip' => "Tukuy samiqninpi maskay (rimanakuy p'anqakunapipas)",
'searchprofile-advanced-tooltip'   => "Akllasqa suti k'itikunapi maskay",
'search-result-size'               => '$1 ({{PLURAL:$2|1 rima|$2 rimakuna}})',
'search-result-category-size'      => '{{PLURAL:$1|1 wankurisqa|$1 wankurisqa}} ({{PLURAL:$2|1 urin katiguriya|$2 urin katiguriya}}, {{PLURAL:$3|1 willañiqi|$3 willañiqi}})',
'search-result-score'              => 'Chaniyuq kaynin: $1%',
'search-redirect'                  => '(pusapuna $1)',
'search-section'                   => '(raki $1)',
'search-suggest'                   => 'Kaytachu niyta munanki? - $1',
'search-interwiki-caption'         => 'Ñaña ruraykamaykuna',
'search-interwiki-default'         => '$1 taripasqakuna:',
'search-interwiki-more'            => '(aswan)',
'search-mwsuggest-enabled'         => 'rimapusqakunawan',
'search-mwsuggest-disabled'        => 'mana rimapusqakunawanchu',
'search-relatedarticle'            => 'Apanakuq',
'mwsuggest-disable'                => 'AJAX rimapuykunaman ama niy',
'searcheverything-enable'          => "Tukuy suti k'itikunapi maskay",
'searchrelated'                    => 'apanakuq',
'searchall'                        => 'tukuy',
'showingresults'                   => "Qhipanpiqa rikuchkanki {{PLURAL:$1|'''1''' tarisqatam|'''$1'''-kama tarisqakunatam}}, '''$2''' huchhawan qallarispa.",
'showingresultsnum'                => "Qhipanpiqa rikuchkanki {{PLURAL:$3|'''1''' tarisqatam|'''$3''' tarisqakunatam}}, '''$2''' yupaywan qallarispa.",
'showingresultsheader'             => "{{PLURAL:$5|Taripasqa: '''$1''', '''$3'''-manta|Taripasqa: '''$1 - $2''', '''$3'''-manta}}, '''$4'''-paq",
'nonefound'                        => "'''Musyay''': Kikinmantaqa huk suti k'itikunallapim maskanki, manataqmi tukuykunapichu. Ñawpaqninpi ''all:'' nisqata qillqaspaykiqa, tukuy suti k'itikunapim maskanki (rimachinakunapipas, plantillakunapipas). Huk sapaq suti k'itipi maskayta munaspaykiqa, chay k'itip sutinta k'askaq hina ñawpaqninpi qillqamuy.",
'search-nonefound'                 => 'Maskaypaq kay hina kachun nisqakamaqa manam kanchu taripasqakuna.',
'powersearch'                      => 'Maskay',
'powersearch-legend'               => 'Ñawparikusqa maskay',
'powersearch-ns'                   => "Kay suti k'itikunapi maskay:",
'powersearch-redir'                => 'Pusapunakunata rikuchiy',
'powersearch-field'                => 'Kayta maskay:',
'powersearch-togglelabel'          => 'Llanchiy:',
'powersearch-toggleall'            => 'Tukuy',
'powersearch-togglenone'           => 'Mana imapas',
'search-external'                  => 'Hawapi maskay',
'searchdisabled'                   => "{{SITENAME}} nisqapi maskaymanqa ama nisqam. Hinachkaptinqa, maskariy google nisqawan icha huk hawa maskanakunawan, ichataq yuyariy, {{SITENAME}}manta hallch'asqankunaqa manañachá musuqllachu.",

# Quickbar
'qbsettings'               => 'Utqaytawna ("Quickbar") allinkachinakuna',
'qbsettings-none'          => 'Mana imapas',
'qbsettings-fixedleft'     => "Lluq'iman watay",
'qbsettings-fixedright'    => 'Pañaman watay',
'qbsettings-floatingleft'  => "Lluq'iman tuytuy",
'qbsettings-floatingright' => 'Pañaman tuytuy',

# Preferences page
'preferences'                   => 'Allinkachinakuna',
'mypreferences'                 => 'Allinkachinaykuna',
'prefs-edits'                   => 'Hukchasqakunap yupaynin:',
'prefsnologin'                  => 'Manam yaykurqankichu',
'prefsnologintext'              => '<span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} Yaykunaykim]</span> tiyan allinkachinaykikunata hukchanaykipaq.',
'changepassword'                => 'Yaykuna rimata hukchay',
'prefs-skin'                    => 'Qara',
'skin-preview'                  => 'Ñawpaqta qhaway',
'prefs-math'                    => 'Minuywa',
'datedefault'                   => 'Kikinmanta allinkachina',
'prefs-datetime'                => "P'unchaw, pacha",
'prefs-personal'                => 'Kikinpa willankuna',
'prefs-rc'                      => 'Ñaqha hukchasqakuna',
'prefs-watchlist'               => "Watiqasqa p'anqakuna",
'prefs-watchlist-days'          => "Hayk'a p'unchawkunata watiqana sutisuyupi rikuchiy:",
'prefs-watchlist-days-max'      => "(ama qanchismanta aswan p'unchaw kachunchu)",
'prefs-watchlist-edits'         => "Hayk'a hukchasqakunata hatunchasqa watiqana sutisuyupi rikuchiy:",
'prefs-watchlist-edits-max'     => '(ama waranqamanta aswan kachunchu)',
'prefs-watchlist-token'         => 'Watiqay sutisuyu sanancha:',
'prefs-misc'                    => 'Ñawra',
'prefs-resetpass'               => 'Yaykuna rimata hukchay',
'prefs-email'                   => 'E-chaskipaq akllanakuna',
'prefs-rendering'               => "Rikch'akuynin",
'saveprefs'                     => 'Allinkachinakunata waqaychay',
'resetprefs'                    => 'Mana waqaychasqa hukchasqakunaman ama niy',
'restoreprefs'                  => 'Tukuy kikinmanta allinkachinakunata kutichimuy',
'prefs-editing'                 => "Llamk'apusqa",
'prefs-edit-boxsize'            => "Llamk'apuna wintanap chhikan.",
'rows'                          => 'Sinrukuna:',
'columns'                       => 'Wachukuna:',
'searchresultshead'             => 'Maskay',
'resultsperpage'                => "Huk p'anqapi hayk'a tarinakuna:",
'contextlines'                  => "Siq'ikuna taripasqaman:",
'contextchars'                  => "Ukhunpuray sananchakuna siq'iman:",
'stub-threshold'                => 'Kay hatun kaykamam <a href="#" class="stub">t\'una qillqasqa t\'inki</a> nisqa kachun (byte):',
'stub-threshold-disabled'       => 'Ama nisqa',
'recentchangesdays'             => "Ñaqha hukchasqakunapi rikuchina p'unchawkuna:",
'recentchangesdays-max'         => "(ama $1-manta aswan {{PLURAL:$1|p'unchaw|p'unchaw}} kachunchu)",
'recentchangescount'            => 'Rikuchina hukchasqakunap yupaynin, kikinmanta:',
'prefs-help-recentchangescount' => "Kaypiqa ñaqha hukchasqakunam, p'anqap wiñay kawsayninkunam, hallch'akunapas.",
'prefs-help-watchlist-token'    => "Kay k'itichata pakasqa llawiwan hunt'aspaykiqa, watiqasqaykikunapaq RSS mikhuchinatam kamarinki.
Pi kay k'itichapi llawiykita riqsiqpas watiqasqaykikunata ñawiriytam atinqa. Chayrayku takyaq chanita akllay. Kaypiqa kikinmanta kamarisqa akllanallayki chanitam rikunki: $1",
'savedprefs'                    => "Allinkachinaykikunaqa hallch'asqañam.",
'timezonelegend'                => "Pacha t'urpi:",
'localtime'                     => 'Tiyaylla pacha:',
'timezoneuseserverdefault'      => 'Sirwiqpa kikinmanta',
'timezoneuseoffset'             => 'Huk pacha (pachap wakin kayninta willay)',
'timezoneoffset'                => 'Huk kay¹:',
'servertime'                    => 'Sirwiqpa pachan:',
'guesstimezone'                 => 'Pacha suyuta chaskimuy',
'timezoneregion-africa'         => 'Aphrika',
'timezoneregion-america'        => 'Awya Yala',
'timezoneregion-antarctica'     => 'Antartika',
'timezoneregion-arctic'         => 'Artiku',
'timezoneregion-asia'           => 'Asya',
'timezoneregion-atlantic'       => 'Atlantiku mama qucha',
'timezoneregion-australia'      => 'Awstralya',
'timezoneregion-europe'         => 'Iwrupa',
'timezoneregion-indian'         => 'Indiku mama qucha',
'timezoneregion-pacific'        => 'Pasiphiku mama qucha',
'allowemail'                    => 'Huk ruraqkunamanta e-chaskita saqillay',
'prefs-searchoptions'           => 'Akllanakunata maskay',
'prefs-namespaces'              => "Suti k'itikuna",
'defaultns'                     => "Mana hinaptintaq kay suti k'itikunapi maskay:",
'default'                       => 'kikinmanta',
'prefs-files'                   => 'Willañiqikuna',
'prefs-custom-css'              => 'Munakusqa CSS',
'prefs-custom-js'               => 'Munakusqa JS',
'prefs-common-css-js'           => 'Tukuy qarakunapaq rakinakusqa CSS/JS:',
'prefs-reset-intro'             => "Kay p'anqataqa llamk'achiyta atinki allinkachinaykikunata kikinmanta kasqaman kutichinaykipaq.
Chaytataq manam kutichiyta atinkichu.",
'prefs-emailconfirm-label'      => 'E-chaskita takyachiy:',
'prefs-textboxsize'             => "Llamk'apuna wintanap chhikan kaynin",
'youremail'                     => 'E-chaski imamaytayki',
'username'                      => 'Ruraqpa sutin:',
'uid'                           => 'Ruraqpa ID-nin:',
'prefs-memberingroups'          => 'Kay {{PLURAL:$1|huñuman|huñukunaman}} kapuq:',
'prefs-registration'            => "Hallch'ay pacha:",
'yourrealname'                  => 'Chiqap sutiyki*',
'yourlanguage'                  => 'Rimay',
'yourvariant'                   => "Rimaypa rikch'aynin",
'yournick'                      => 'Chutu sutiyki (ruruchinapaq)',
'prefs-help-signature'          => "Rimanakuy p'anqakunapi qillqamuspaykiqa, \"<nowiki>~~~~</nowiki>\" sananchakunawanmi silq'unkiman. Chay sananchakunaqa silq'uyniykiyuq, pachayuq, p'unchawniyuq qillqamanmi tukukunqa.",
'badsig'                        => "Chawa silq'usqaykiqa manam allinchu; HTML sananchakunata llanchiy.",
'badsiglength'                  => 'Chutu sutiykiqa nisyu sunim.
$1 {{PLURAL:$1|sanampamanta|sanampakunamanta}} aswan pisi kananmi.',
'yourgender'                    => 'Qhari icha warmi:',
'gender-unknown'                => 'Mana riqsisqa',
'gender-male'                   => 'Qhari',
'gender-female'                 => 'Warmi',
'prefs-help-gender'             => "Munaspaykiqa: llamp'u kaqpa allinlla warmi icha qhari nispa napaykusunaykipaq. Kay willayqa sapsim kanqa.",
'email'                         => 'E-chaski',
'prefs-help-realname'           => "* Chiqap sutiyki (munaspaqa): quwaptiykiqa, llamk'apusqaykikunam paywan sananchasqa kanqa.",
'prefs-help-email'              => "E-chaskita munaspayki akllayta atinki. Arí nispaykiqa, yaykuna rimata qunqaspayki musuq yaykuna rimata e-chaski imamaytaykiman kachachikamuyta atinki.
Huk ruraqkunata ruraqpa p'anqaykimanta icha rimachinaykimanta qamman qillqamusunaykiwan atichin qampa sutiykita mana rikuchispa.",
'prefs-help-email-required'     => 'E-chaski imamaytaykitam willaway.',
'prefs-info'                    => 'Tiksi willaykuna',
'prefs-i18n'                    => 'Mamallaqtapurapaq',
'prefs-signature'               => "Silq'uy",
'prefs-dateformat'              => "P'unchaw rikch'ay",
'prefs-timeoffset'              => 'Pacha wakinyay',
'prefs-advancedediting'         => 'Ñawparikusqa akllanakuna',
'prefs-advancedrc'              => 'Ñawparikusqa akllanakuna',
'prefs-advancedrendering'       => 'Ñawparikusqa akllanakuna',
'prefs-advancedsearchoptions'   => 'Ñawparikusqa akllanakuna',
'prefs-advancedwatchlist'       => 'Ñawparikusqa akllanakuna',
'prefs-displayrc'               => 'Akllanakunata rikuchiy',
'prefs-displaysearchoptions'    => 'Akllanakunata rikuchiy',
'prefs-displaywatchlist'        => 'Akllanakunata rikuchiy',
'prefs-diffs'                   => 'Wakin kaykuna',

# User preference: e-mail validation using jQuery
'email-address-validity-valid'   => 'E-chaski imamaytaqa allinchá',
'email-address-validity-invalid' => 'Allin e-chaski imamaytata yaykuchiy',

# User rights
'userrights'                   => 'Ruraqkunata saqillanap allinkachinan',
'userrights-lookup-user'       => 'Ruraqkunap huñunkunata allinkachiy',
'userrights-user-editname'     => 'Ruraqpa sutinta qillqamuy:',
'editusergroup'                => 'Ruraqkunap huñunkunata hukchay',
'editinguser'                  => "Kay ruraqpa hayñinkunata hukchaspa: '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup'     => 'Ruraqkunap huñunkunata hukchay',
'saveusergroups'               => 'Ruraq huñukunata waqaychay',
'userrights-groupsmember'      => 'Kayman kapuq:',
'userrights-groupsmember-auto' => "Ch'aqtasqalla wankurisqa kaypi:",
'userrights-groups-help'       => 'Ima huñukunapichus kay ruraq kachkan, chaytam hukchayta atinki.
* Sananchasqa kahacha niyta munan, ruraqqa kay huñupim kachkan, nispa.
* Mana sananchasqa kahachataq niyta munan, ruraqqa manam kay huñupichu kachkan, nispa.
* <nowiki>*</nowiki> quyllurchataq niyta munan, yaparqaspaykiqa manam atinkichu huñuta qichuyta, qichurqaspaykitaq manam atinkichu yapayta, nispa.',
'userrights-reason'            => 'Kayrayku:',
'userrights-no-interwiki'      => 'Manam saqillasunkichu huk wikikunapi ruraqkunap hayñinkunata hukchayta.',
'userrights-nodatabase'        => '$1 sutiyuq willañiqintinqa manam kanchu icha manam kayllapichu.',
'userrights-nologin'           => 'Kamachiqpa rakiqunaykiwan [[Special:UserLogin|yaykunaykim]] tiyan ruraqkunap hayñinkunata rurapunaykipaq.',
'userrights-notallowed'        => 'Qampa rakiqunaykiwanqa manam ruraqkunap hayñinkunata rurapuyta atinkichu.',
'userrights-changeable-col'    => 'Hukchanayki huñukuna',
'userrights-unchangeable-col'  => 'Mana hukchanayki huñukuna',

# Groups
'group'               => 'Huñu:',
'group-user'          => 'Ruraqkuna',
'group-autoconfirmed' => 'Rakiqunayuq ruraqkuna',
'group-bot'           => 'Rurana antachakuna',
'group-sysop'         => 'Kamachiqkuna',
'group-bureaucrat'    => 'Burukratakuna',
'group-suppress'      => 'Rikurpariykuna',
'group-all'           => '(tukuy)',

'group-user-member'          => 'Ruraq',
'group-autoconfirmed-member' => 'Rakiqunayuq ruraq',
'group-bot-member'           => 'Rurana antacha',
'group-sysop-member'         => 'Kamachiq',
'group-bureaucrat-member'    => 'Burukrata',
'group-suppress-member'      => 'Rikurpariy',

'grouppage-user'          => '{{ns:project}}:Ruraqkuna',
'grouppage-autoconfirmed' => '{{ns:project}}:Rakiqunayuq ruraq',
'grouppage-bot'           => '{{ns:project}}:Rurana antacha',
'grouppage-sysop'         => '{{ns:project}}:Kamachiq',
'grouppage-bureaucrat'    => '{{ns:project}}:Burukrata',
'grouppage-suppress'      => '{{ns:project}}:Rikurpariy',

# Rights
'right-read'                  => "P'anqakunata ñawiriy",
'right-edit'                  => "P'anqakunata llamk'apuy",
'right-createpage'            => "P'anqakunata kamariy (mana rimanakuy kaq)",
'right-createtalk'            => "Rimanakuy p'anqakunata kamariy",
'right-createaccount'         => 'Musuq rakiqunakunata kamariy',
'right-minoredit'             => 'Llamk\'apusqakunata "Kayqa uchuylla hukchaymi" nispa sananchay',
'right-move'                  => "P'anqakunata astay",
'right-move-subpages'         => "P'anqakunata urin p'anqankunatawan astay",
'right-move-rootuserpages'    => "Ruraqpa saphi p'anqankunata astay",
'right-movefile'              => 'Willañiqikunata astay',
'right-suppressredirect'      => "Huk p'anqata astaspa pusapuna p'anqata mana kamariy",
'right-upload'                => 'Willañiqikunata churkuy',
'right-reupload'              => 'Kachkaqña willañiqita huknachay',
'right-reupload-own'          => 'Kikin ruraqpa churkusqan kachkaqña willañiqita huknachay',
'right-reupload-shared'       => 'Rakinakusqa midya waqaychanallapi kaq willañiqikunata huknachay',
'right-upload_by_url'         => 'URL tiyaymanta willañiqita churkuy',
'right-purge'                 => "''Cache'' nisqa pakasqa hallch'ata ch'usaqchay mana takyachina p'anqawan",
'right-autoconfirmed'         => "Kuskan amachasqa p'anqakunata llamk'apuy",
'right-bot'                   => 'Rurana antachap ruraykachasqanta hina hatalliy',
'right-nominornewtalk'        => 'Kikinpa rimachinanpi uchuylla hukchasqakunata "musuq willaykuna" nisqapi mana rikuy',
'right-apihighlimits'         => "API maskanakunapi aswan hanaq saywakunata llamk'achiy",
'right-writeapi'              => "Ima hina qillqana API-ta llamk'achiy",
'right-delete'                => "P'anqakunata qulluy",
'right-bigdelete'             => "Wiñay kawsaysapa p'anqakunatapas qulluy",
'right-deleterevision'        => "P'anqakunapaq sapaq musuqchasqankunata qulluy paqarichiy ima",
'right-deletedhistory'        => 'Wiñay kawsaymanta qullusqa musuqchasqakunapaq pisichaykunata qhaway, manataq kapuq qillqakunatachu',
'right-deletedtext'           => 'Qullusqa musuqchasqapura qullusqa qillqata hukchasqakunatapas qhaway',
'right-browsearchive'         => "Qullusqa p'anqakunata maskay",
'right-undelete'              => "Qullusqa p'anqata paqarichiy",
'right-suppressrevision'      => 'Kamachiqkunamanta pakasqa musuqchasqakunata qhawaspa paqarichiy',
'right-suppressionlog'        => "Hukllap hallch'ankunata qhaway",
'right-block'                 => "Huk ruraqkunata llamk'apuymanta hark'ay",
'right-blockemail'            => "Ruraqta e-chaski kachaymanta hark'ay",
'right-hideuser'              => "Ruraqpa sutinta hark'ay, sapsimanta pakaspa",
'right-ipblock-exempt'        => "IP hark'ayta, kikinmanta hark'ayta, tawqa hark'aytapas pulqaspa pasay",
'right-proxyunbannable'       => "Kikinmanta ''proxy'' nisqa sirwiq hark'ayta pulqaspa pasay",
'right-unblockself'           => "Kikinta hark'asqamanta qispikuy",
'right-protect'               => "Amachasqa kachkayta hukchay, amachasqa p'anqakunata llamk'apuy",
'right-editprotected'         => "Amachasqa p'anqakunata llamk'apuy (mana phaqcha amachasqa)",
'right-editinterface'         => "Ruraqpaq uyapurata llamk'apuy",
'right-editusercssjs'         => "Huk ruraqkunap CSS, JS willañiqinkunata llamk'apuy",
'right-editusercss'           => "Huk ruraqkunap CSS willañiqinkunata llamk'apuy",
'right-edituserjs'            => "Huk ruraqkunap JS willañiqinkunata llamk'apuy",
'right-rollback'              => "Huk p'anqapi qhipaq llamk'apuqpa hukchasqankunata utqaylla kutichiy",
'right-markbotedits'          => "Kutichisqa llamk'apusqakunata rurana antachap llamk'apusqankunata hina sananchay",
'right-noratelimit'           => 'Achura saywakunap manam chayachisqanchu',
'right-import'                => "P'anqakunata hawa wikikunamanta chaskiy",
'right-importupload'          => "P'anqakunata willañiqi churkusqamanta chaskiy",
'right-patrol'                => "Llamk'apusqakunata qhawaykusqa kayninman sananchay",
'right-autopatrol'            => "Llamk'apusqakunata kikinmanta qhawaykusqa kananman sananchay",
'right-patrolmarks'           => 'Ñaqha hukchasqakunapi qhawaykusqa sananchasqakunata qhaway',
'right-unwatchedpages'        => "Mana qhawaykusqa p'anqakunap sutisuyunta qhaway",
'right-trackback'             => "Ñawpaqman yupita qatiyta (''trackback'' nisqata) kachamuy",
'right-mergehistory'          => "P'anqakunap wiñay kawsayninkunata huñuy",
'right-userrights'            => "Tukuy ruraqkunap hayñinkunata llamk'apuy",
'right-userrights-interwiki'  => "Wakin wiki tiyaykunapi ruraqkunap hayñinkunata llamk'apuy",
'right-siteadmin'             => "Willañiqintinta hark'ay, paskaypas",
'right-reset-passwords'       => 'Huk ruraqkunap yaykuna rimanta kutichiy',
'right-override-export-depth' => "P'anqakunata hawaman quy, t'inkisqa p'anqakunatapas pichqa ñiqin t'inkipayasqakama",
'right-sendemail'             => 'Huk ruraqkunaman e-chaskita kachay',
'right-disableaccount'        => "Rakiqunakunata hark'ay",

# User rights log
'rightslog'      => 'Ruraqpa hayñinkunap hukyasqankuna',
'rightslogtext'  => "Kayqa hayñi hukchasqa hallch'aymi.",
'rightslogentry' => 'hukchan $1-pa hayñinkunata $2-manta $3-man',
'rightsnone'     => '(-)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => "kay p'anqata ñawiriy",
'action-edit'                 => "kay p'anqata llamk'apuy",
'action-createpage'           => "p'anqakunata kamariy",
'action-createtalk'           => "rimanakuy p'anqakunata kamariy",
'action-createaccount'        => 'kay ruraqpa rakiqunanta kamariy',
'action-minoredit'            => "kay llamk'apusqata asllalla nispa sananchay",
'action-move'                 => "kay p'anqata astay",
'action-move-subpages'        => "kay p'anqata urin p'anqankunatapas astay",
'action-move-rootuserpages'   => "ruraqpa saphi p'anqankunata astay",
'action-movefile'             => 'kay willañiqita astay',
'action-upload'               => 'kay willañiqita churkuy',
'action-reupload'             => 'kay kachkaqña willañiqita huknachay',
'action-reupload-shared'      => 'kay willañiqita rakinakusqa churanapi qhawarpariy',
'action-upload_by_url'        => 'kay willañiqita URL tiyaymanta churkuy',
'action-writeapi'             => "qillqay API nisqata llamk'achiy",
'action-delete'               => "kay p'anqata qulluy",
'action-deleterevision'       => 'kay musuqchasqata qulluy',
'action-deletedhistory'       => "kay qullusqa p'anqap wiñay kawsasqanta qhaway",
'action-browsearchive'        => "qullusqa p'anqakunata maskay",
'action-undelete'             => "kay qullusqa p'anqata paqarichiy",
'action-suppressrevision'     => 'kay pakasqa musuqchasqata musuqchaspa kutichimuy',
'action-suppressionlog'       => "kay sapaqpa hallch'anta qhaway",
'action-block'                => "kay ruraqta llamk'apuymanta hark'ay",
'action-protect'              => "kay p'anqapaq amachana kamachisqakunata hukchay",
'action-import'               => "kay p'anqata hawa wikimanta chaskimuy",
'action-importupload'         => "kay p'anqata willañiqi churkusqamanta chaskimuy",
'action-patrol'               => "huk ruraqpa llamk'apusqanta patrullasqa nispa sananchay",
'action-autopatrol'           => "kikiykip llamk'apusqaykita patrullasqa nispa sananchakuy",
'action-unwatchedpages'       => "mana watiqasqa p'anqa sutisuyuta qhaway",
'action-trackback'            => "ñawpaqman yupi qatiyta (''trackback'' nisqata) kachamuy",
'action-mergehistory'         => "kay p'anqap wiñay kawsayninta huñuy",
'action-userrights'           => "tukuy ruraqkunap hayñinkunata llamk'apuy",
'action-userrights-interwiki' => "hawa wikikunapi ruraqkunap hayñinkunata llamk'apuy",
'action-siteadmin'            => "willañiqintinta hark'ay icha paskay",

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|hukchasqa|hukchasqakuna}}',
'recentchanges'                     => 'Ñaqha hukchasqa',
'recentchanges-legend'              => 'Ñaqha hukchasqapaq allinkachinakuna',
'recentchangestext'                 => "Kay p'anqapiqa aswan qhipaq ñaqha hukchasqakunam.",
'recentchanges-feed-description'    => 'Kay mikhuchinapi wikipi qhipaq ñaqha hukchasqakunata qatiy.',
'recentchanges-label-newpage'       => "Kayta llamk'apuptiykim musuq p'anqam tukukurqun",
'recentchanges-label-minor'         => "Kayqa aslla llamk'apuymi",
'recentchanges-label-bot'           => "Kayqa rurana antachap llamk'apusqanmi",
'recentchanges-label-unpatrolled'   => "Kay llamk'apusqaqa manaraqmi patrullasqachu",
'rcnote'                            => "Kay qatiqpiqa qhipaq {{PLURAL:$1|'''1''' hukchasqam|'''$1''' hukchasqakunam}} qhipaq {{PLURAL:$2|p'unchawpi|'''$2''' p'unchawkunapi}}, musuqchasqa $5, $4.",
'rcnotefrom'                        => "Kay qatiqpiqa '''$2'''-mantapacha ('''$1'''-kama) hukchasqakunatam rikunki.",
'rclistfrom'                        => '$1-manta musuq hukchasqakunata rikuchiy',
'rcshowhideminor'                   => "$1 uchuylla llamk'apusqakunata",
'rcshowhidebots'                    => '$1 rurana antachakunata',
'rcshowhideliu'                     => "$1 hallch'asqa ruraqkunata",
'rcshowhideanons'                   => '$1 IP-niyuq ruraqkunata',
'rcshowhidepatr'                    => "$1 patrullachasqa llamk'apusqakunata",
'rcshowhidemine'                    => "$1 llamk'apusqaykunata",
'rclinks'                           => "Qhipaq $1 hukchasqata qhipaq $2 p'unchawmanta qhaway.<br />$3",
'diff'                              => 'dif',
'hist'                              => 'wñka',
'hide'                              => 'pakay',
'show'                              => 'rikuchiy',
'minoreditletter'                   => 'a',
'newpageletter'                     => 'M',
'boteditletter'                     => 'r',
'number_of_watching_users_pageview' => '[$1 watiqachkaq {{PLURAL:$1|ruraq|ruraqkuna}}]',
'rc_categories'                     => 'Kay katiguriyakunaman saywachay ("|" nisqawan rakisqa)',
'rc_categories_any'                 => 'Imallapas',
'newsectionsummary'                 => 'Musuq raki: /* $1 */',
'rc-enhanced-expand'                => 'Imaymanachakunata rikuchiy (JavaScript kananmi)',
'rc-enhanced-hide'                  => 'Imaymanachakunata pakay',

# Recent changes linked
'recentchangeslinked'          => "Hukchasqa t'inkimuq",
'recentchangeslinked-feed'     => "T'inkisqapi hukchasqakuna",
'recentchangeslinked-toolbox'  => "T'inkisqapi hukchasqakuna",
'recentchangeslinked-title'    => '"$1"-wan t\'inkisqa hukchasqa',
'recentchangeslinked-noresult' => "Nisqa mit'apiqa manam hukchasqa t'inkimuqkuna kanchu.",
'recentchangeslinked-summary'  => "Kay sapaq p'anqaqa t'inkisqa p'anqakunapi ñaqha hukchasqakunatam rikuchin. Watiqasqayki p'anqakunaqa '''yanasapa qillqasqam'''.",
'recentchangeslinked-page'     => "P'anqap sutin:",
'recentchangeslinked-to'       => "Qusqa p'anqaman t'inkimuq p'anqakunapi hukchasqakunata rikuchiy chay ranti",

# Upload
'upload'                      => 'Willañiqita churkuy',
'uploadbtn'                   => 'Willañiqita churkuy',
'reuploaddesc'                => "Churkuna hunt'ana p'anqaman kutimuy.",
'upload-tryagain'             => 'Hukchasqa willañiqimanta willaykunata kachay',
'uploadnologin'               => 'Manaraqmi yaykurqunkichu',
'uploadnologintext'           => '[[Special:UserLogin|Yaykunaykim]] tiyan willañiqikunata churkunaykipaq.',
'upload_directory_missing'    => 'Churkuna willañiqi churanaqa ($1) manam kanchu. Llika sirwiqpas manam atinchu churkuna willañiqi churanata kamariyta.',
'upload_directory_read_only'  => "Llika sirwiqqa manam atinchu churkuna hallch'aman ($1) qillqayta.",
'uploaderror'                 => 'Willañiqita churkunayaptiyki pantasqam tukurqan',
'upload-recreate-warning'     => "'''Paqtataq: Kay sutiyuq willañiqiqa qullusqañam icha sutin hukchasqañam.'''

Kay qatiqpiqa kay p'anqapaq qulluy, astay hallch'akunatam rikunki:",
'uploadtext'                  => "Willañiqita churkunaykipaqqa kay qatiqpi kaq hunt'ana p'anqata llamk'achiy.
Churkusqaña rikchakunatataq qhawanaykipaq icha maskanaykipaqqa [[Special:FileList|rikchakuna p'anqaman]] riy. Churkusqakunata [[Special:Log/upload|churkuy hallch'apim]], qullusqakunatataq [[Special:Log/delete|qulluy hallch'apim]] rikunki.

Rikchata huk p'anqaman ch'aqtanaykipaqqa kay hunt'ana p'anqapi t'inkita llamk'achiy:
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Willañiqi.jpg]]</nowiki></tt>''', willañiqip hunt'a musuqchasqan llamk'achinapaq
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Willañiqi.png|huk qillqa]]</nowiki></tt>''', lluq'i manyapi kaq kahapi 200 iñu suni rikch'achisqata llamk'achinapaq
* '''<tt><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Willañiqi.ogg]]</nowiki></tt>''', willañiqiman chiqalla t'inkinapaq, willañiqita mana rikuchispa",
'upload-permitted'            => 'Saqillasqa willañiqi layakuna: $1.',
'upload-preferred'            => 'Astawan munasqa willañiqi layakuna: $1.',
'upload-prohibited'           => 'Mana saqillasqa willañiqi layakuna: $1.',
'uploadlog'                   => "churkuy hallch'a",
'uploadlogpage'               => 'Churkusqa willañiqikuna',
'uploadlogpagetext'           => 'Kay qatiqpiqa ñaqha willañiqi churkusqakunam. [[Special:NewFiles|Musuq willañiqikunayuq suyu-suyuta]] qhaway rikchachakunata rikunaykipaq.',
'filename'                    => 'Willañiqip sutin',
'filedesc'                    => 'Pisichay',
'fileuploadsummary'           => "T'iktu:",
'filereuploadsummary'         => 'Willañiqi astasqakuna:',
'filestatus'                  => 'Ima hina iskaychay hayñiyuq:',
'filesource'                  => 'Pukyu:',
'uploadedfiles'               => 'Churkusqa willañiqikuna',
'ignorewarning'               => 'Paqtataq waqyayta qhawarparispa waqaychay',
'ignorewarnings'              => 'Ima paqtataq waqyaytapas qhawarpariy',
'minlength1'                  => 'Willañiqip sutinqa huk icha aswan sanampayuq kachun.',
'illegalfilename'             => "«$1» nisqa williñiqip sutinqa p'anqa umallipaq mana allin sananchayuqmi. Ama hina kaspa, williñiqita sutincharaspa musuqmanta churkuykachay.",
'badfilename'                 => 'Rikchap sutinqa "$1"-man hukchasqam.',
'filetype-mime-mismatch'      => "Willañiqip chupanqa manam MIME rikch'aqchu.",
'filetype-badmime'            => '"$1" MIME layayuq willañiqikunata churkuyqa manam saqillasqachu.',
'filetype-bad-ie-mime'        => 'Manam atinichu willañiqita churkuyta, Internet Explorer "$1" hina riqsiptinman, mana saqillasqa willañiqi layam, chikim kanman.',
'filetype-unwanted-type'      => "'''\".\$1\"''' nisqaqa manam munasqachu willañiqi laya.  Astawan munasqa willañiqi {{PLURAL:\$3|layaqa|layakunaqa}} kaymi: \$2.",
'filetype-banned-type'        => "'''\".\$1\"''' nisqaqa manam saqillasqachu willañiqi laya.  Saqillasqa willañiqi {{PLURAL:\$3|layaqa|layakunaqa}} kaymi: \$2.",
'filetype-missing'            => 'Manam kachkanchu willañiqip k\'askaqnin (".jpg" hina).',
'empty-file'                  => "Kachasqayki willañiqiqa ch'usaqmi.",
'file-too-large'              => 'Kachasqayki willañiqiqa nisyu hatunmi.',
'filename-tooshort'           => 'Kay willañiqi sutiqa nisyu pisillam.',
'filetype-banned'             => 'Kay willañiqi layaqa manam saqillasqachu.',
'verification-error'          => 'Kay willañiqiqa willañiqi chaninchaypi manam yallirqanchu.',
'hookaborted'                 => "Wakinchaykachasqaykitaqa mast'ari ch'iwinam puchukachirqan.",
'illegal-filename'            => 'Kay willañiqi sutiqa manam saqillasqachu.',
'overwrite'                   => 'Kachkaqña willañiqita huknachayqa manam saqillasqachu.',
'unknown-error'               => 'Mana riqsisqa pantasqam.',
'tmp-create-error'            => "Manam atinichu mit'alla willañiqita qillqayta.",
'tmp-write-error'             => "Mit'alla willañiqita qillqaspa pantakurqan.",
'large-file'                  => 'Kamalliykiku, willañiqikunaqa ama $1-manta aswan hatun kachunchu; kay willañiqiqa $2 hatunmi.',
'largefileserver'             => 'Kay willañiqiqa sirwiqpi allinkachisqakama saqillasqa chhikanmanta aswan hatunmi.',
'emptyfile'                   => "Churkusqayki willañiqiqa ch'usaqmi rikch'akun. Pantasqa sutinchá. Ama hina kaspa, llanchiy, churkuyman munasqayki willañiqichu.",
'fileexists'                  => "Kachkanñam kay sutiyuq willañiqi.
Ama hina kaspa, '''<tt>[[:$1]]</tt>''' nisqata llanchiy, huknachanaykimanta mana allin yachaspaykiqa.
[[$1|thumb]]",
'filepageexists'              => "Kay willañiqipaq sut'ichana p'anqaqa kamarisqañam '''<tt>[[:$1]]</tt>''' nisqapi, ichataq kay sutiyuq willañiqi manaraqmi kanchu. Willanayki pisichayqa manam rikch'akunqachu sut'ichana p'anqapi. Rikch'akunanpaqqa, kikiykip makiykiwanmi llamk'apunayki tiyan.
[[$1|thumb]]",
'fileexists-extension'        => "Kay willañiqip sutinman yaqa kaqlla sutiyuq willañiqim kachkanña: [[$2|thumb]]
* Churkunayasqayki willañiqip sutin: '''<tt>[[:$1]]</tt>'''
* Kachkaqña willañiqip sutin: '''<tt>[[:$2]]</tt>'''
Ama hina kaspa, huk sutita akllay.",
'fileexists-thumbnail-yes'    => "Willañiqiqa ancha uchuylla rikchamanmi rikch'akun ''(thumbnail)''. [[$1|thumb]]
Ama hina kaspa, '''<tt>[[:$1]]</tt>''' nisqa willañiqita llanchiy.
Llanchisqa willañiqi qallariy chhikan kikin rikchaman kaqlla kaptinqa, huk rikchachata churkunaykiqa manam tiyanchu.",
'file-thumbnail-no'           => "Willañiqip sutinqa '''<tt>$1</tt>''' nisqawanmi qallarin. Ancha uchuylla rikchamanmi rikch'akun ''(thumbnail)''.
Kay churkunayki rikcha hunt'a chhikan kayniyuq kaptinqa, chay hunt'atam churkuy, manataq hinaptinqa willañiqip sutinta hukchay.",
'fileexists-forbidden'        => 'Kay sutiyuq willañiqiqa kachkanñam, manam huknachanallachu. Willañiqiykita kunanraq churkuyta munaspaykiqa, ama hina kaspa, willañiqip sutinta hukchaspa musuqmanta churkuy. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => "Kay sutiyuq willañiqiqa kachkañam rakinakusqa willañiqi qullqapi. Ama hina kaspa, churkuyta munaspaykiraq, ñawpaq p'anqaman kutispa willañiqiykita huk sutiwan churkuy. [[File:$1|thumb|center|$1]]",
'file-exists-duplicate'       => 'Kay willañiqiqa kay qatiq {{PLURAL:$1|willañiqip|willañiqikunap}} iskaychasqanmi:',
'file-deleted-duplicate'      => 'Kay hinalla ([[:$1]]) willañiqiña qullusqam karqa. Qhawariy imarayku qullusqa karqa, manaraq musuqmanta churkuykachaspa.',
'uploadwarning'               => 'Willañiqi churkuymanta paqtataq niy',
'uploadwarning-text'          => 'Ama hina kaspa, kay qatiqpi kaq willañiqimanta willaykunata hukchaspa musuqmanta ruraykachay.',
'savefile'                    => 'Willañiqita waqaychay',
'uploadedimage'               => '«[[$1]]» churkusqa.',
'overwroteimage'              => '"[[$1]]" musuqmanta churkusqa',
'uploaddisabled'              => 'Willañiqi churkuyman ama nisqa',
'copyuploaddisabled'          => 'URL-pa churkunanqa manam atinchu.',
'uploadfromurl-queued'        => 'Churkunaykiqa suyana sinruman kachasqam.',
'uploaddisabledtext'          => 'Willañiqi churkuyqa manam saqillasqachu.',
'php-uploaddisabledtext'      => "PHP-wan willañiqi churkuyqa hark'asqam. Ama hina kaspa, willañiqi churkuy allinkachinakunata llanchiy.",
'uploadscripted'              => "Kay willañiqiqa wakichi icha HTML qillqayuqmi, llika wamp'unaqa pantalla unanchanmanchá.",
'uploadvirus'                 => 'Willañiqipiqa añawmi! Yuyay: $1',
'upload-source'               => 'Pukyu willañiqi',
'sourcefilename'              => 'Qallariy willañiqip sutin:',
'sourceurl'                   => 'Pukyu URL:',
'destfilename'                => 'Tukuna willañiqip sutin:',
'upload-maxfilesize'          => 'Lliwmanta aswan willañiqi chhikan kay: $1',
'upload-description'          => 'Willañiqimanta willaykuna',
'upload-options'              => 'Churkuy akllanakuna',
'watchthisupload'             => 'Kay willañiqita watiqay',
'filewasdeleted'              => 'Kay sutiyuq willañiqi huk kutiña churkusqa karqaspa chaymanta qullusqam karqan. $1-ta llanchinaykim tiyanman manaraq musuqmanta churkuspayki.',
'upload-wasdeleted'           => "'''Paqtataq: Huk kutiña qullusqa willañiqitam churkuykachachkanki.'''

Hamut'arinaykim tiyanman, kay willañiqita musuqmanta churkuyqa allinchu mana allinchu chaylla.
Kay qatiqpiqa willañiqimanta qulluy hallch'atam rikunki:",
'filename-bad-prefix'         => "Churkunayasqayki willañiqip sutinqa '''\"\$1\"''' nisqawanmi qallarin. Chay sutinqa iliktruniku rikcha hap'inap kamasqanmanmi rikch'akun. Ama hina kaspa, willañiqiykita astawan t'iktuq sutinta akllay.",
'upload-success-subj'         => 'Aypalla churkusqañam',
'upload-success-msg'          => '[$2]-manta churkusqaykiqa aypasqam. Kaypim tarinalla: [[:{{ns:file}}:$1]]',
'upload-failure-subj'         => 'Churkuy sasachakuy',
'upload-failure-msg'          => '[$2] nisqamanta churkuyniykiwanqa sasachakuymi karqan:

$1',
'upload-warning-subj'         => 'Willañiqi churkuymanta paqtataq niy',
'upload-warning-msg'          => "[$2]-manta churkuyniykiwanqa sasachakuymi karqan. [[Special:Upload/stash/$1|Churkunapaq hunt'ana p'anqaman]] kutimuykiman kay sasachakuyta allinchanaykipaq.",

'upload-proto-error'        => 'Tantari qillqaqa manam allinchu',
'upload-proto-error-text'   => "Huk p'anqamanta willañiqita churkunapaqqa URL tiyaypa <code>http://</code> icha <code>ftp://</code> nisqawan qallarinanmi.",
'upload-file-error'         => 'Ukhu pantasqa',
'upload-file-error-text'    => "Ukhu pantasqam tukurqan sirwiqpi mit'alla willañiqita kamariykachaptiyki. Ama hina kaspa, llika [[Special:ListUsers/sysop|kamachiqta]] tapuy.",
'upload-misc-error'         => 'Mana riqsisqa churkuy pantasqa',
'upload-misc-error-text'    => 'Churkuchkaptiyki mana riqsisqa pantasqam tukurqan. Ama hina kaspa, URL tiyay allinchu chayanallachu chaymanta llanchispa musuqmanta ruraykachay. Mana allinyaptinqa, llika [[Special:ListUsers/sysop|kamachiqta]] tapuy.',
'upload-too-many-redirects' => 'URL tiyayqa nisyu pusapunayuqmi',
'upload-unknown-size'       => 'Mana riqsisqa chhikan',
'upload-http-error'         => 'HTTP pantasqam tukusqa: $1',

# img_auth script messages
'img-auth-accessdenied' => 'Manam chayman saqisqachu',
'img-auth-nopathinfo'   => "Manam kanchu PATH_INFO.
Sirwiqniykiqa manam churasqachu kaymanta willananpaq.
CGI nisqawanchá tiksichasqa, chayrayku manachá img_auth nisqata q'imiyta atinchu.
Qhaway http://www.mediawiki.org/wiki/Manual:Image_Authorization.",
'img-auth-notindir'     => 'Mañakusqa ñanqa manam churaykusqa churkuna churanapi kachkanchu.',
'img-auth-badtitle'     => 'Manam atinichu "$1" nisqamanta chaniyuq sutita rurayta.',
'img-auth-nologinnWL'   => 'Manam yaykusqa kachkankichu, "$1" nisqataq manam yuraq sutisuyupi kachkanchu.',
'img-auth-nofile'       => '"$1" sutiyuq willañiqiqa manam kanchu.',
'img-auth-isdir'        => '"$1" nisqa churanatam aypaykachachkanki.
Willañiqilla aypayllam saqillasqa.',
'img-auth-streaming'    => '"$1" nisqata purichispa.',
'img-auth-public'       => 'img_auth.php nisqap rurananqa akuna wikimanta willañiqikunata lluqsichinam.
Kay wikiqa sapsi wiki hinam churaykusqa.
Lliwmanta aswan alliku kanapaqqa, img_auth.php manam atinchu.',
'img-auth-noread'       => 'Ruraqqa "$1" nisqata ñawiriyta manam saqillasqachu.',

# HTTP errors
'http-invalid-url'      => 'URL tiyayqa manam allinchu: $1',
'http-invalid-scheme'   => '"$1" iskimayuq URL tiyaykunaqa manam q\'imisqachu',
'http-request-error'    => 'HTTP mañakuyqa manam ayparqanchu mana riqsisqa pantasqarayku:',
'http-read-error'       => 'HTTP ñawiriy pantasqa.',
'http-timed-out'        => "HTTP mañakuypa mit'anqa lluqsikusqañam.",
'http-curl-error'       => 'URL apamuypi pantasqa: $1',
'http-host-unreachable' => 'Manam aypanichu URL-ta.',
'http-bad-status'       => 'HTTP mañakuypi sasachakuymi tukukurqan: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Manam taripanichu URL tiyayta',
'upload-curl-error6-text'  => "URL tiyayqa manam taripasqachu karqan. Ama hina kaspa, URL tiyay allinchu internet tiyay llamk'achkanchu chaymanta llanchiy.",
'upload-curl-error28'      => "Suyay mit'aqa yallisqañam",
'upload-curl-error28-text' => "Llika tiyayqa mana kutichispa nisyutam suyachiwarqanchik. Ama hina kaspa, sirwiq llamk'achkanchu chaymanta llanchispa asllatapas suyaspa musuqmanta ruraykachay. Ruraykachankimanpas huk kuti aswan pisi ruraqkuna yaykuchkaptin.",

'license'            => 'Saqillay:',
'license-header'     => 'Saqillaspa',
'nolicense'          => 'Manam imapas akllasqachu',
'license-nopreview'  => '(Ama qhawarichunkuchu)',
'upload_source_url'  => ' (allin, sapsi chayanalla URL tiyay)',
'upload_source_file' => ' (antañiqiqniykipi willañiqi)',

# Special:ListFiles
'listfiles-summary'     => "Kay sapaq p'anqapiqa tukuy churkusqa willañiqikunatam rikunki.
Kikinmantaqa ñaqha churkusqa willañiqikunatam sutisuyup patanpi rikunki.
Wachup umanpi ñit'ispaqa allichaytam hukchanki.",
'listfiles_search_for'  => 'Rikchap sutinta maskay:',
'imgfile'               => 'willañiqi',
'listfiles'             => 'Rikchakuna',
'listfiles_thumb'       => 'Uchuylla rikchacha',
'listfiles_date'        => "P'unchaw",
'listfiles_name'        => 'Suti',
'listfiles_user'        => 'Ruraq',
'listfiles_size'        => 'Hatun kay',
'listfiles_description' => "T'iktuna",
'listfiles_count'       => 'Musuqchasqakuna',

# File description page
'file-anchor-link'          => 'Rikcha',
'filehist'                  => 'Willañiqip wiñay kawsaynin',
'filehist-help'             => "P'unchaw/pacha nisqapi ñit'iy chaypacha willañiqi kachkasqata qhawanaykipaq.",
'filehist-deleteall'        => 'tukuyta qulluy',
'filehist-deleteone'        => 'qulluy',
'filehist-revert'           => 'kutichiy',
'filehist-current'          => 'kunan',
'filehist-datetime'         => "P'unchaw/Pacha",
'filehist-thumb'            => 'Uchuylla rikchacha',
'filehist-thumbtext'        => '$1-pa musuqchasqanmanta uchuylla rikchacha',
'filehist-nothumb'          => 'Manam uchuylla rikchachachu kachun',
'filehist-user'             => 'Ruraq',
'filehist-dimensions'       => 'Chhikanyachikuqkuna',
'filehist-filesize'         => 'Willañiqip chhikan kaynin',
'filehist-comment'          => 'Willapuy',
'filehist-missing'          => 'Mana kaq willañiqi',
'imagelinks'                => "Willañiqiman t'inkimuq",
'linkstoimage'              => "Kay rikchamanqa kay qatiq {{PLURAL:$1|p'anqam|$1 p'anqakunam}} t'inkimun:",
'linkstoimage-more'         => "$1-manta aswan {{PLURAL:$1|p'anqam|p'anqakunam}} kay willañiqiman t'inkimun.
Kay qatiq sutisuyupiqa {{PLURAL:$1|ñawpaqllam t'inkita|ñawpaqllam $1 t'inkikunata}} rikunki.
Munaspaykiqa, [[Special:WhatLinksHere/$2|hunt'a sutisuyuta]] qhaway.",
'nolinkstoimage'            => "Kay rikchamanqa manam ima p'anqakunachu t'inkimun.",
'morelinkstoimage'          => "Kay willañiqiman [[Special:WhatLinksHere/$1|aswan t'inkimuqkunata]] qhaway.",
'redirectstofile'           => "Kay qatiq {{PLURAL:$1|p'anqam|$1 p'anqakunam}} kay willañiqiman pusampun:",
'duplicatesoffile'          => 'Kay willañiqimanta iskaychasqa {{PLURAL:$1|willañiqim|$1 willañiqikunam}} kay qatiqpi ([[Special:FileDuplicateSearch/$2|astawan willachikuy]]):',
'sharedupload'              => "Kay p'anqaqa $1 nisqamantam. Huk ruraykamaykunapipas llamk'achinapaq kanman.",
'sharedupload-desc-there'   => "Kay p'anqaqa $1 nisqamantam. Huk ruraykamaykunapipas llamk'achinapaq kanman.
Ama hina kaspa, [$2 willañiqi ch'uyanchana p'anqata] qhaway astawan willachikunaykipaq.",
'sharedupload-desc-here'    => "Kay p'anqaqa $1 nisqamantam. Huk ruraykamaykunapipas llamk'achinapaq kanman.
[$2 Willañiqi ch'uyanchana p'anqanpi] ch'uyanchaytaqa kay qatiqpim rikunki.",
'filepage-nofile'           => 'Manam kanchu kay sutiyuq willañiqi.',
'filepage-nofile-link'      => 'Manam kanchu kay sutiyuq willañiqi, ichataq [$1 churkuytam] atinki.',
'uploadnewversion-linktext' => 'Kay willañiqi ñaqha musuqchasqata churkuy',
'shared-repo-from'          => '$1-manta',
'shared-repo'               => 'rakinakusqa qullqa',

# File reversion
'filerevert'                => '$1-ta kutichiy',
'filerevert-legend'         => 'Willañiqita kutichiy',
'filerevert-intro'          => "'''[[Media:$1|$1]]''' nisqatam [$3, $2 pachapi $4 llamk'apusqaman] kutichichkanki.",
'filerevert-comment'        => 'Kayrayku:',
'filerevert-defaultcomment' => '$2, $1 nisqa musuqchasqaman kutichisqa',
'filerevert-submit'         => 'Kutichiy',
'filerevert-success'        => "'''[[Media:$1|$1]]''' nisqaqa [$3, $2 pachapi $4 llamk'apusqaman] kutichisqañam.",
'filerevert-badversion'     => "Kay willañiqimanta qusqayki pachayuq tiyaylla llamk'apusqaqa manam kanchu.",

# File deletion
'filedelete'                  => '$1-ta qulluy',
'filedelete-legend'           => 'Willañiqita qulluy',
'filedelete-intro'            => "'''[[Media:$1|$1]]''' sutiyuq willañiqitam qulluykachachkanki, tukuy wiñay kawsaynintapas.",
'filedelete-intro-old'        => "'''[[Media:$1|$1]]''' musuqchasqatam qulluchkanki [$4 $3, $2] nisqamanta.",
'filedelete-comment'          => 'Kayrayku:',
'filedelete-submit'           => 'Qulluy',
'filedelete-success'          => "'''$1''' qullusqañam.",
'filedelete-success-old'      => "$3, $2 pachamanta '''[[Media:$1|$1]]''' llamk'apusqaqa qullusqañam.",
'filedelete-nofile'           => "'''$1''' manam kanchu.",
'filedelete-nofile-old'       => "Qusqa kachkaykunayuq '''$1'''-manta waqaychasqa llamk'apusqaqa manam kanchu.",
'filedelete-otherreason'      => 'Hukrayku:',
'filedelete-reason-otherlist' => 'Hukrayku',
'filedelete-reason-dropdown'  => "*Sapsirayku qullusqa
** K'irisqa ruraqpa hayñin
** Iskaychasqa willañiqi",
'filedelete-edit-reasonlist'  => "Qullusqapaq raykukunata llamk'apuy",
'filedelete-maintenance'      => "Willañiqi qulluypas paqarichiypas mit'alla hark'asqam, hatallichkaptinku.",

# MIME search
'mimesearch'         => 'MIME maskay',
'mimesearch-summary' => "Kay p'anqawanqa willañiqikunata MIME layankamam ch'illchiyta atinki. Qunapaq: contenttype/subtype, ahinataq <tt>image/jpeg</tt>.",
'mimetype'           => 'MIME laya:',
'download'           => 'chaqnamuy',

# Unwatched pages
'unwatchedpages' => "Mana watiqasqa p'anqakuna",

# List redirects
'listredirects' => 'Tukuy pusapuykuna',

# Unused templates
'unusedtemplates'     => "Mana llamk'achisqa plantillakuna",
'unusedtemplatestext' => "Kay p'anqapi tukuy {{ns:template}} suti k'itipi kaq, manataq huk p'anqapi ch'aqtasqa p'anqakunap sutinkunam. Yuyariy, manaraq qulluspayki chay p'anqakunaman t'inkikunata qhaway.",
'unusedtemplateswlh'  => "huk t'inkikuna",

# Random page
'randompage'         => "Mayninpi p'anqa",
'randompage-nopages' => "Manam ima p'anqapas kanchu kay suti {{PLURAL:$2|k'itipi|k'itikunapi}}: $1.",

# Random redirect
'randomredirect'         => "Mayninpi pusapuna p'anqa",
'randomredirect-nopages' => 'Manam kanchu "$1" nisqa suti k\'itipi pusapuna p\'anqakuna.',

# Statistics
'statistics'                   => 'Ranuy (kanchachani)',
'statistics-header-pages'      => "P'anqakunamanta ranuy (kanchachani)",
'statistics-header-edits'      => "Llamk'apuymanta ranuy (kanchachani)",
'statistics-header-views'      => 'Qhawaymanta ranuy (kanchachani)',
'statistics-header-users'      => 'Ruraqmanta ranuy',
'statistics-header-hooks'      => 'Wakin ranuy (kanchachani)',
'statistics-articles'          => "Samiq p'anqakuna",
'statistics-pages'             => "P'anqakuna",
'statistics-pages-desc'        => "Wikipi tukuy p'anqakuna, rimanakuykunapas pusapunapas hukkunapas",
'statistics-files'             => 'Churkusqa willañiqikuna',
'statistics-edits'             => "P'anqa llamk'apusqakuna {{SITENAME}}-pa paqarisqanmanta",
'statistics-edits-average'     => "Kuskanchaku llamk'apusqakuna p'anqaman",
'statistics-views-total'       => 'Tukuy qhawasqakuna',
'statistics-views-total-desc'  => "Mana kaq p'anqakunataqa sapaq p'anqakunatapas kaypi manam rikunki",
'statistics-views-peredit'     => "Qhawasqakuna llamk'apusqaman",
'statistics-users'             => 'Rakiqunayuq [[Special:ListUsers|ruraqkuna]]',
'statistics-users-active'      => "Llamk'achkaq ruraqkuna",
'statistics-users-active-desc' => "Ñaqha {{PLURAL:$1|p'unchawpi|$1 p'unchawkunapi}} llamk'apuq ruraqkuna",
'statistics-mostpopular'       => "Lliwmanta astawan rikusqa p'anqakuna",

'disambiguations'      => "Sut'ichana qillqakuna",
'disambiguationspage'  => "Template:Sut'ichana qillqa",
'disambiguations-text' => "Kay qatiq p'anqakunam t'inkimun '''sut'ichana qillqaman'''. Chiqap, hukchanasqa p'anqaman t'inkichun.<br />Tukuy [[MediaWiki:Disambiguationspage]] plantillayuq p'anqakunaqa sut'ichana qillqam.",

'doubleredirects'            => 'Iskaylla pusapunakuna',
'doubleredirectstext'        => "Kay p'anqapiqa huk pusapuna p'anqaman pusapuq p'anqakunap sutinkunatam rikunki. Sapa sinrupiqa ñawpaq ñiqin, iskay ñiqinpas pusapunaman t'inkikunam, iskay ñiqin pusapunap taripananpa qallariyninpas, sapsilla \"chiqap\" allin taripana qillqam, maymanchus ñawpaq ñiqin pusapuna p'anqa pusachun.
<del>Chakapusqa</del> taripasqakunaqa paskasqañam.",
'double-redirect-fixed-move' => '[[$1]] nisqaqa astasqam, kunantaq [[$2]] nisqaman pusapunam',
'double-redirect-fixer'      => 'Pusapuna allinchaq',

'brokenredirects'        => 'Panta pusapunakuna',
'brokenredirectstext'    => "Kay pusapuna p'anqakunaqa mana kachkaq p'anqakunamanmi pusapuchkan:",
'brokenredirects-edit'   => "llamk'apuy",
'brokenredirects-delete' => 'qulluy',

'withoutinterwiki'         => "Interwiki t'inkinnaq p'anqakuna",
'withoutinterwiki-summary' => "Kay p'anqakunaqa manam huk rimaykunapi p'anqakunaman t'inkinchu:",
'withoutinterwiki-legend'  => "Ñawpaq k'askaq",
'withoutinterwiki-submit'  => 'Rikuchiy',

'fewestrevisions' => "Aslla kuti llamk'apusqa p'anqakuna",

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|byte}}',
'ncategories'             => '$1 {{PLURAL:$1|katiguriya|katiguriyakuna}}',
'nlinks'                  => "$1 {{PLURAL:$1|t'inki|t'inkikuna}}",
'nmembers'                => '$1 {{PLURAL:$1|qillqa|qillqakuna}}',
'nrevisions'              => "$1 {{PLURAL:$1|llamk'apusqa|llamk'apusqakuna}}",
'nviews'                  => '$1 {{PLURAL:$1|rikuy|rikuykuna}}',
'nimagelinks'             => "$1 {{PLURAL:$1|p'anqapi|p'anqakunapi}} llamk'achisqa",
'ntransclusions'          => "$1 {{PLURAL:$1|p'anqapi|p'anqakunapi}} llamk'achisqa",
'specialpage-empty'       => "Kay p'anqaqa ch'usaqmi.",
'lonelypages'             => "Wakcha p'anqakuna",
'lonelypagestext'         => "Kay qatiq p'anqakunaqa manam {{SITENAME}}pi ima huk kaq p'anqawanpas t'inkisqachu, manam ch'aqtasqachu ima.",
'uncategorizedpages'      => "Katiguriyannaq p'anqakuna",
'uncategorizedcategories' => 'Katiguriyannaq katiguriyakuna',
'uncategorizedimages'     => 'Katiguriyannaq rikchakuna',
'uncategorizedtemplates'  => 'Katiguriyannaq plantillakuna',
'unusedcategories'        => "Mana llamk'achisqa katiguriyakuna",
'unusedimages'            => "Mana llamk'achisqa rikchakuna",
'popularpages'            => "Munasqa p'anqakuna",
'wantedcategories'        => 'Muchusqa katiguriyakuna',
'wantedpages'             => "Muchusqa p'anqakuna",
'wantedpages-badtitle'    => "Mana allin p'anqa suti kay taripay tawqapi: $1",
'wantedfiles'             => 'Munakusqa willañiqikuna',
'wantedtemplates'         => 'Munakusqa plantillakuna',
'mostlinked'              => "Lliwmanta aswan t'inkimuqniyuq qillqakuna",
'mostlinkedcategories'    => "Lliwmanta aswan t'inkimuqniyuq katiguriyakuna",
'mostlinkedtemplates'     => "Lliwmanta aswan t'inkimuqniyuq plantillakuna",
'mostcategories'          => "Lliwmanta aswan katiguriyayuq p'anqakuna",
'mostimages'              => "Lliwmanta astawan llamk'achisqa rikchakuna",
'mostrevisions'           => 'Lliwmanta aswan hukchasqayuq qillqakuna',
'prefixindex'             => "Tukuy p'anqakuna ñawpa k'askaqchayuq",
'shortpages'              => "Uchuylla p'anqakuna",
'longpages'               => "Hatun p'anqakuna",
'deadendpages'            => "Lluqsinannaq p'anqakuna",
'deadendpagestext'        => "Kay p'anqakunaqa mana ima p'anqakunamanpas t'inkimunchu.",
'protectedpages'          => "Amachasqa p'anqakuna",
'protectedpages-indef'    => 'Wiñaypaq amachasqakuna chaylla',
'protectedpages-cascade'  => 'Phaqchallallapi amachay',
'protectedpagestext'      => "Kay p'anqakunaqa llamk'apuymanta icha astaymanta amachasqam",
'protectedpagesempty'     => "Kay kuskanachina tupukunawan amachasqa p'anqakunaqa manam kachkanchu.",
'protectedtitles'         => "Amachasqa p'anqa sutikuna",
'protectedtitlestext'     => "Kay sutikunayuq p'anqakunaqa kamarinamanta hark'asqam",
'protectedtitlesempty'    => "Manam kachkanchu kay kuskanachina tupukunawan amachasqa p'anqakuna.",
'listusers'               => 'Tukuy ruraqkuna',
'listusers-editsonly'     => "Llamk'apusqayuq ruraqkunallata rikuchiy",
'listusers-creationsort'  => 'Kamarisqap pachankama allichay',
'usereditcount'           => "$1 {{PLURAL:$1|llamk'apusqa|llamk'apusqakuna}}",
'usercreated'             => "Kamarisqa $1 p'unchawpi $2 pachapi",
'newpages'                => "Musuq p'anqakuna",
'newpages-username'       => 'Ruraqpa sutin:',
'ancientpages'            => "Ñawpaqta qallarisqa p'anqakuna",
'move'                    => 'Astay',
'movethispage'            => "Kay p'anqata astay",
'unusedimagestext'        => "Kay qatiq willañiqikunaqa kachkanmi, ichataq manam huk p'anqapi ch'aqtasqachu.
Ama hina kaspa musyariy, huk llika tiyaykunachá chiqalla t'inkimun huk rikchap URL tiyayninman, hinaptintaq kaypi rikch'akunchá, k'uchilla llamk'achisqa kachkaspanpas.",
'unusedcategoriestext'    => "Kay qatiq katiguriyakunaqa kamarisqañam, mana ima qillqapas icha katiguriyapas t'inkimuptinpas.",
'notargettitle'           => 'Manam ima taripanachu',
'notargettext'            => "Manaraqmi willawarqankichu ruranaykipaq taripana p'anqata icha ruraqta.",
'nopagetitle'             => "Manam kanchu chay hina p'anqa",
'nopagetext'              => "Nisqayki taripana p'anqaqa manam kanchu.",
'pager-newer-n'           => '{{PLURAL:$1|aswan musuq 1|aswan musuq $1}}',
'pager-older-n'           => "{{PLURAL:$1|aswan mawk'a 1|aswan mawk'a $1}}",
'suppress'                => 'Rikurpariy',

# Book sources
'booksources'               => 'Liwrukunapi pukyukuna',
'booksources-search-legend' => 'Liwrukunapi pukyukunata maskay',
'booksources-go'            => 'Riy',
'booksources-text'          => "Kay qatiqpiqa huk llika tiyaykunaman t'inkikunatam rikunki, musuq icha mawk'a liwrukunata qhatuq, maskasqayki liwrukunamantachá astawan willaq:",
'booksources-invalid-isbn'  => 'ISBN huchhaqa manachá allinchu; pantasqata llanchiriy qallariy qillqamanta iskaychamuspa.',

# Special:Log
'specialloguserlabel'  => 'Ruraq:',
'speciallogtitlelabel' => 'Sutichay:',
'log'                  => "Hallch'asqakuna",
'all-logs-page'        => "Tukuy sapsipaq hallch'akuna",
'alllogstext'          => "{{SITENAME}}pa tukuy hallch'ankunamanta ch'allisqa rikuy.
Rikuyniykitaqa k'ullkuchaytam atinki hallch'a layata, ruraqpa sutinta (uchuy icha hatun sanampakunata musyaq) icha chayachisqa p'anqata (uchuy icha hatun sanampakunata musyaq) akllaspa.",
'logempty'             => "Manam hallch'asqakuna kachkanchu.",
'log-title-wildcard'   => "Kaywan qallariq p'anqa sutikunata maskay",

# Special:AllPages
'allpages'          => "Tukuy p'anqakuna",
'alphaindexline'    => '$1-ta $2-man',
'nextpage'          => "Qatiq p'anqa ($1)",
'prevpage'          => "Ñawpaq p'anqa ($1)",
'allpagesfrom'      => "Rikuchiy kaywan qallariq p'anqakunata:",
'allpagesto'        => "Kaywan tukukuq p'anqakunata rikuchiy:",
'allarticles'       => 'Tukuy qillqasqakuna',
'allinnamespace'    => "Tukuy p'anqakuna ($1 suti k'itipi)",
'allnotinnamespace' => "Tukuy p'anqakuna (manataq $1 suti k'itipi)",
'allpagesprev'      => 'ñawpaq',
'allpagesnext'      => 'qatiq',
'allpagessubmit'    => 'Riy',
'allpagesprefix'    => "Rikuchiy kay k'askaqwan qallariq p'anqakunata:",
'allpagesbadtitle'  => "Qusqa p'anqap sutinqa manam allinchu icha rimaypura, interwiki ñawpa k'askaqniyuq. P'anqa sutipaq mana saqillasqa sananchayuqchá.",
'allpages-bad-ns'   => '{{SITENAME}} tiyaypiqa "$1" suti k\'iti manam kanchu.',

# Special:Categories
'categories'                    => 'Katiguriyakuna',
'categoriespagetext'            => "Kay qatiq {{PLURAL:$1|katiguriyaqa|katiguriyakunaqa}} p'anqayuqmi icha midyayuqmi.
[[Special:UnusedCategories|Ch'usaq katiguriyakunataqa]] kaypi manam rikunkichu.
[[Special:WantedCategories|Muchusqa katiguriyakunatapas]] qhaway.",
'categoriesfrom'                => 'Katiguriyakunata rikuchiy kaywan qallarispa:',
'special-categories-sort-count' => 'yupaykama allichay',
'special-categories-sort-abc'   => 'qallarina sanampakama allichay',

# Special:DeletedContributions
'deletedcontributions'             => 'Qullusqa ruraqpa hukchasqankuna',
'deletedcontributions-title'       => 'Qullusqa ruraqpa hukchasqankuna',
'sp-deletedcontributions-contribs' => "llamk'apusqakuna",

# Special:LinkSearch
'linksearch'       => "Hawa t'inkikuna",
'linksearch-pat'   => 'Kay qatinallakama maskay:',
'linksearch-ns'    => "Suti k'iti:",
'linksearch-ok'    => 'Maskay',
'linksearch-text'  => 'Ima rantipas sananchawanpas maskayta saqillasunkim, ahinataq "*.wikipedia.org".<br />Q\'imichisqa tantari qillqa: <tt>$1</tt>',
'linksearch-line'  => "$1-man $2-manta t'inkimusqa",
'linksearch-error' => 'Ima rantipas sananchaqa (* ?) tiyaypa qallariyninpim kanman chaylla.',

# Special:ListUsers
'listusersfrom'      => 'Kaywan qallariq ruraqkunata rikuchiy:',
'listusers-submit'   => 'Rikuchiy',
'listusers-noresult' => 'Ruraqqa manam tarisqachu.',
'listusers-blocked'  => "(hark'asqa)",

# Special:ActiveUsers
'activeusers'            => "Llamk'achkaq ruraqkuna",
'activeusers-intro'      => "Kay qatiqpiqa ruraqkunatam rikunki, qhipaq $1 {{PLURAL:$1|p'unchawpi|p'unchawkunapi}} kay wikipi imatapas ruraq.",
'activeusers-count'      => "$1 {{PLURAL:$1|llamk'apusqa|llamk'apusqakuna}} ñaqha {{PLURAL:$3|p'unchawpi|$3 p'unchawkunapi}}",
'activeusers-from'       => 'Ruraqkunata rikuchiy, kaywan qallarispa:',
'activeusers-hidebots'   => 'Rurana antachakunata pakay',
'activeusers-hidesysops' => 'Kamachiqkunata pakay',
'activeusers-noresult'   => 'Ruraqkunataqa manam tarinichu.',

# Special:Log/newusers
'newuserlogpage'              => "Rakiquna kamariy hallch'a",
'newuserlogpagetext'          => "Kayqa ruraqkunap rakiqunankunata kamariymanta hallch'am.",
'newuserlog-byemail'          => 'e-chaskiwan kachasqa yaykuna rima',
'newuserlog-create-entry'     => 'Musuq ruraq',
'newuserlog-create2-entry'    => 'kamarin $1-paq musuq rakiqunata',
'newuserlog-autocreate-entry' => 'Kikinmanta kamarisqa rakiquna',

# Special:ListGroupRights
'listgrouprights'                      => 'Ruraq huñup hayñinkuna',
'listgrouprights-summary'              => "Kay qatiq sutisuyupiqa kay wikipi sut'ichasqa ruraq huñukunatam, kikinpa chayamuna hayñinkunatawan rikunki.
Chay kikinkunap hayñinkunamanta astawan ñawirinaykipaqqa [[{{MediaWiki:Listgrouprights-helppage}}|kaypi qhaway]].",
'listgrouprights-key'                  => '* <span class="listgrouprights-granted">Qusqa hayñi</span>
* <span class="listgrouprights-revoked">Qichusqa hayñi</span>',
'listgrouprights-group'                => 'Huñu',
'listgrouprights-rights'               => 'Hayñikuna',
'listgrouprights-helppage'             => 'Help:Ruraq huñup hayñinkuna',
'listgrouprights-members'              => '(wankurisqakunap sutisuyun)',
'listgrouprights-addgroup'             => 'Kay {{PLURAL:$2|huñutam|huñukunatam}} yapayta atini: $1',
'listgrouprights-removegroup'          => 'Kay {{PLURAL:$2|huñutam|huñukunatam}} qichuyta atini: $1',
'listgrouprights-addgroup-all'         => 'Tukuy huñukunatam yapayta atini',
'listgrouprights-removegroup-all'      => 'Tukuy huñukunatam qichuyta atini',
'listgrouprights-addgroup-self'        => '{{PLURAL:$2|Huñu|Huñukuna}}tam yapayta atin kikinpa raqiqunanman: $1',
'listgrouprights-removegroup-self'     => '{{PLURAL:$2|Huñu|Huñukuna}}tam qichuyta atin kikinpa raqiqunanmanta: $1',
'listgrouprights-addgroup-self-all'    => 'Tukuy huñukunatam yapayta atin kikinpa raqiqunanman',
'listgrouprights-removegroup-self-all' => 'Tukuy huñukunatam qichuyta atin kikinpa raqiqunanmanta',

# E-mail user
'mailnologin'          => 'Imamaytataqa ama kachaychu',
'mailnologintext'      => '[[Special:UserLogin|Yaykunaykim]], [[Special:Preferences|allinkachinaykikunapi]] chaniyuq e-chaski imamaytappas kananmi tiyan huk ruraqkunaman e-chaskita kachanaykipaq.',
'emailuser'            => 'Kay ruraqman e-chaskita kachay',
'emailpage'            => 'E-chaski kay ruraqman:',
'emailpagetext'        => "Kay hunt'ana p'anqatam llamk'achiyta atinki e-chaskita kachanaykipaq.
Qampa [[Special:Preferences|allinkachinaykikunapi]] qillqakamachisqayki imamaytaqa paqarinqa kachasqayki e-chaskipi chaskiqpa kutichisunaykita atinanpaq.",
'usermailererror'      => 'Chaski llikaqa pantasqatam kutichimurqan:',
'defemailsubject'      => "{{SITENAME}} p'anqamanta chaski",
'usermaildisabled'     => "Ruraqpa e-chaskinqa hark'asqam",
'usermaildisabledtext' => 'Manam atinkichu kay wikipi huk ruraqkunaman e-chaskita kachayta.',
'noemailtitle'         => 'Manam kanchu e-chaski imamayta',
'noemailtext'          => 'Kay ruraqqa manam willawarqanchu chaniyuq imamaytata.',
'nowikiemailtitle'     => 'E-chaskiqa manam saqillasqachu',
'nowikiemailtext'      => 'Kay ruraqqa nirqan, huk ruraqkunamanta ama e-chaskita chaskisaqchu, nispa.',
'email-legend'         => '{{SITENAME}}pi huk ruraqman e-chaskita kachay',
'emailfrom'            => 'Kachaq:',
'emailto'              => 'Chaskiq:',
'emailsubject'         => 'Yuyancha:',
'emailmessage'         => 'Willay:',
'emailsend'            => 'Kachay',
'emailccme'            => 'Willaypa iskaychasqanta kacharimuway.',
'emailccsubject'       => 'Willaypa iskaychasqan $1: $2-man',
'emailsent'            => 'Chaskiqa kachasqañam',
'emailsenttext'        => 'Chaskiykiqa kachasqañam.',
'emailuserfooter'      => 'Kay e-chaskitaqa $1 sutiyuqmi kacharqan $2 sutiyuqman "e-chaski kachay" nisqapaq ruranawan kay tiyaypi: {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Llika willayta kachaspa.',
'usermessage-editor'  => 'Llika willay kachaq',

# Watchlist
'watchlist'            => "Watiqasqa p'anqakuna",
'mywatchlist'          => 'Watiqasqaykuna',
'watchlistfor2'        => '$1-paq $2',
'nowatchlist'          => 'Manam watiqasqakunachu kachkan.',
'watchlistanontext'    => 'Ama hina kaspa, $1 watiqana sutisuyuykipi imakunatapas qhawanaykipaq icha hukchanaykipaq.',
'watchnologin'         => 'Manam yaykurqankichu',
'watchnologintext'     => '[[Special:UserLogin|Yaykunaykim]] tiyan watiqana sutisuyuykita hukchanaykipaq.',
'addedwatch'           => 'Watiqasqaykunaman yapasqa',
'addedwatchtext'       => "Kunanqa «[[:\$1]]» sutiyuq p'anqa [[Special:Watchlist|watiqanykipim]] kachkañam. Chay p'anqapi rimachinanpipas hukchanakunaqa kay watiqana p'anqapim rikunki. Watiqasqayki p'anqaqa [[Special:RecentChanges|ñaqha hukchasqakunapi]] '''yanasapa''' qillqasqa rikuchisqa kanqa aswan sikllalla tarinaykipaq. <p>Manaña watiqayta munaptiykiqa, uma siq'ipi \"amaña watiqaychu\" ñit'iy.",
'removedwatch'         => 'Watiqasqakunamanta qullusqa',
'removedwatchtext'     => '"[[:$1]]" sutiyuq p\'anqaqa [[Special:Watchlist|watiqasqaykikunamanta]] qichusqam.',
'watch'                => 'Watiqay',
'watchthispage'        => "Kay p'anqata watiqay",
'unwatch'              => 'Amaña watiqaychu',
'unwatchthispage'      => 'Amaña watiqaychu',
'notanarticle'         => 'Manam qillqachu',
'notvisiblerev'        => 'Musuqchasqaqa qullusqam',
'watchnochange'        => "Manam ima watiqasqayki qillqapas llamk'apusqachu karqan rikuchisqa mit'api.",
'watchlist-details'    => "Watiqana sutisuyuykipiqa {{PLURAL:$1|huk p'anqam|$1 p'anqakunam}}, rimanakuna p'anqakunata mana yupaspa.",
'wlheader-enotif'      => '* E-chaskimanta musyachinaman arí nisqañam.',
'wlheader-showupdated' => "* Qayna watukamusqaykimantapacha hukchasqa p'anqakunataqa '''yanasapa''' nisqapim rikunki.",
'watchmethod-recent'   => "watiqasqayki p'anqakunapaq ñaqha hukchasqakunata llanchispa",
'watchmethod-list'     => "watiqasqayki p'anqakunata ñaqha hukchasqakunapaq llanchispa",
'watchlistcontains'    => "Watiqana sutisuyuykipiqa $1 {{PLURAL:$1|p'anqam|p'anqakunam}} kachkan.",
'iteminvalidname'      => "'$1' nisqa qillqaqa sasachakunmi, sutinqa manam allinchu...",
'wlnote'               => "Kay qatiqpiqa {{PLURAL:$1|qhipaq hukchasqam|'''$1''' qhipaq hukchasqakunam}} qhipaq {{PLURAL:$2|urapim|'''$2''' urakunapim}}.",
'wlshowlast'           => "$1 ura, $2 p'unchaw $3-mantapacha hukchasqakunata rikuchiy",
'watchlist-options'    => 'Watiqana sutisuyupaq allinkachinakuna',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Watiqasqakunaman yapaspa...',
'unwatching' => 'Watiqasqakunamanta qulluspa...',

'enotif_mailer'                => '{{SITENAME}}pa chaski musyachina sirwiqnin',
'enotif_reset'                 => "Tukuy p'anqakunata watukusqakama sananchay",
'enotif_newpagetext'           => "Musuq p'anqam.",
'enotif_impersonal_salutation' => '{{SITENAME}}pa ruraqnin',
'changed'                      => 'hukchasqa',
'created'                      => 'kamarirqan',
'enotif_subject'               => '{{SITENAME}}pi $PAGETITLE sutiyuq p\'anqaqa $PAGEEDITOR-pa $CHANGEDORCREATED-nñam',
'enotif_lastvisited'           => "$1 sutiyuq p'anqata qhaway qayna watukamusqaykimantapacha tukuy hukchasqakunata rikunaykipaq.",
'enotif_lastdiff'              => "$1 sutiyuq p'anqata qhaway kay hukchasqata rikunaykipaq.",
'enotif_anon_editor'           => 'sutinnaq ruraq $1',
'enotif_body'                  => 'Munakusqa $WATCHINGUSERNAME,

{{SITENAME}}pi $PAGETITLE sutiyuq p\'anqataqa $PAGEEDITOR sutiyuq ruraqmi $CHANGEDORCREATED $PAGEEDITDATE pachapi, $PAGETITLE_URL sutiyuq p\'anqata qhaway kunan hukchasqata rikunaykipaq.

$NEWPAGE

Llamk\'apuqpa willasqan: $PAGESUMMARY $PAGEMINOREDIT

Llamk\'apuqta tapuy:
e-chaski: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Kay p\'anqata mana musuqmanta watukamuptiykiqa, manam huk hukchasqakunamanta willasqaykichu. Tukuy watiqasqayki p\'anqakunapaq musyachina sananchakunatapas kutichiytam atinkiman.

             Tukuy sunquwan, {{SITENAME}}pa e-chaski musyachina llikan

--
Watiqana sutisuyuykipaq allinkachinakunata hukchanaykipaqqa kay p\'anqatam qhaway:
{{fullurl:{{#special:Watchlist}}/edit}}

P\'anqata watiqana sutisuyuykimanta qichunaykipaqqa kay p\'anqatam qhaway:
$UNWATCHURL

Yanapasunaykipaq:
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'             => "Kay p'anqata qulluy",
'confirm'                => 'Takyachiy',
'excontent'              => "Samiqnin karqan kay hinam: '$1'",
'excontentauthor'        => "Samiqnin karqan kay hinam: '$1' (huklla ruraqnin: '$2')",
'exbeforeblank'          => "manaraq qullusqa kaptin, samiqnin kay hinam karqan: '$1'",
'exblank'                => "p'anqaqa ch'usaqmi karqan",
'delete-confirm'         => '"$1"-ta qulluy',
'delete-legend'          => 'Qulluy',
'historywarning'         => "'''Paqtataq''': Kay qulluykachasqayki p'anqaqa wiñay kawsasqayuqmi, $1 {{PLURAL:$1|musuqchasqayuqchá|musuqchasqayuqchá}}:",
'confirmdeletetext'      => "Qullunayachkanki p'anqatam icha rikchatam, wiñay kawsasqantapas.
Ama hina kaspa, takyachiy munayniykita, qatiqninkunata riqsiyniykita, [[{{MediaWiki:Policy-url}}|kawpaykama]] rurayniykitapas.",
'actioncomplete'         => 'Rurasqañam',
'actionfailed'           => 'Manam atinchu',
'deletedtext'            => '"<nowiki>$1</nowiki>" qullusqañam.
$2 nisqa p\'anqata qhaway ñaqha qullusqakunata rikunaykipaq.',
'deletedarticle'         => 'qullusqa "[[$1]]"',
'suppressedarticle'      => 'ñit\'ipasqa "[[$1]]"',
'dellogpage'             => 'Qullusqakuna',
'dellogpagetext'         => 'Kay qatiqpiqa lliwmanta aswan ñaqha qullusqakunatam rikunki. Rikuchisqa pachankunaqa sirwiqpa pachanpim.',
'deletionlog'            => 'qullusqakuna',
'reverted'               => 'Ñawpaq hukchasqata kutichiy',
'deletecomment'          => 'Kayrayku:',
'deleteotherreason'      => 'Huk rayku:',
'deletereasonotherlist'  => 'Huk rayku',
'deletereason-dropdown'  => "*Qulluypaq sapsi raykukuna
** Kikin kamariqpa mañakusqan
** Ruraqpa hayñinta k'irisqa
** Wandaluchasqa",
'delete-edit-reasonlist' => "Qullusqapaq raykukunata llamk'apuy",
'delete-toobig'          => "Kay p'anqaqa ancha wiñay kawsaysapa, $1-manta aswan {{PLURAL:$1|musuqchasqayuq|musuqchasqayuq}}. Kay hina p'anqakunata qulluyqa saywachasqam, {{SITENAME}}ta mana waqllinapaq.",
'delete-warning-toobig'  => "Kay p'anqaqa ancha wiñay kawsaysapa, $1-manta aswan {{PLURAL:$1|musuqchasqayuq|musuqchasqayuq}}. Kay hina p'anqata qulluspaykiqa, {{SITENAME}}ta waqllinkimanchá. Kay ruraymanta anchata yuyaychakuspa hamut'ay.",

# Rollback
'rollback'          => 'Hukchasqakunata kutichiy',
'rollback_short'    => 'Kutichiy',
'rollbacklink'      => 'Kutichiy',
'rollbackfailed'    => 'Manam kutichiyta atinchu',
'cantrollback'      => "Manam atinichu llamk'apusqata kutichiyta; qhipaq kaq llamk'apuqqa kay p'anqap hukllam ruraqnin.",
'alreadyrolled'     => "Manam atinichu [[User:$2|$2]]-pa ([[User talk:$2|rimanakuy]]) [[$1]] nisqa qhipaq llamk'apusqanta kutichiyta; pipas kay p'anqataqa llamk'apurqunñam icha kutichirqunñam.

Qhipaq kaq llamk'apusqaqa [[User:$3|$3]]-pa ([[User talk:$3|rimanakuy]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]) rurasqanmi.",
'editcomment'       => "Llamk'apusqakunamanta pisichasqaqa kay hinam: \"''\$1''\".",
'revertpage'        => '[[Special:Contributions/$2|$2]] ([[User talk:$2|rimachina]]) sutiyuq ruraqpa hukchasqankunaqa kutichisqam [[User:$1|$1]]-pa ñawpaq hukchasqanman',
'revertpage-nouser' => "Ruraqpa hukchasqankunaqa (sutinqa qichusqam) kutichisqañam [[User:$1|$1]]-pa ñawpaq llamk'apusqanta paqarichispa",
'rollback-success'  => "$1-pa hukchasqankunaqa kutichisqañam $2-pa ñawpaq llamk'apusqanta paqarichispa.",

# Edit tokens
'sessionfailure-title' => "Llamk'ay tiyay pantasqa",
'sessionfailure'       => "Lamk'apuy tiyayniykiwanqa sasachakuymi rikch'akun;
kay rurayqa t'ipisqam karqan millay runap llullaspa yaykunanta hark'anapaq.
Ama hina kaspa, llika wamp'unaykipi \"Ñawpaqman\" (\"Back\") ñit'ispa ñawpaq p'anqata musuqmanta chaqnamuspa huk kutita yaykuykachay.",

# Protect
'protectlogpage'              => "P'anqa amachasqakuna",
'protectlogtext'              => "Kay qatiqpiqa p'anqata amachasqakunatam paskasqakunatapas rikunki. [[Special:ProtectedPages|Amachasqa p'anqakunata]] qhaway astawan willasunaykipaq.",
'protectedarticle'            => 'amachan [[$1]]-ta',
'modifiedarticleprotection'   => 'hukchan kay p\'anqap amachasqa kachkayninta: "[[$1]]"',
'unprotectedarticle'          => 'paskan amachasqa [[$1]]-ta',
'movedarticleprotection'      => 'amachana kamachisqakuna "[[$2]]" nisqamanta "[[$1]]" nisqaman astasqa',
'protect-title'               => '"$1"-ta amachaspa',
'prot_1movedto2'              => '«[[$1]]» «[[$2]]»-man astasqa',
'protect-legend'              => 'Amachayta takyachiy',
'protectcomment'              => 'Kayrayku:',
'protectexpiry'               => 'Amachaypa puchukaynin',
'protect_expiry_invalid'      => 'Amachaypa puchukay pachanqa manam allinchu.',
'protect_expiry_old'          => 'Amachaypa puchukay pachanqa ñawpa pachapim.',
'protect-unchain-permissions' => 'Yapa amachana akllanakunata paskay',
'protect-text'                => "'''<nowiki>$1</nowiki>''' sutiyuq p'anqap amachasqa kachkaynintaqa kaypim qhawayta hukchaytapas atinki.",
'protect-locked-blocked'      => "Hark'asqa kaspayki manam atinkichu amachasqa kachkayninta hukchayta. Kay qatiqpiqa '''$1''' sutiyuq p'anqap kunan allinkachinankunatam rikunki:",
'protect-locked-dblock'       => "Willañiqintin hark'asqa kachkaptinmi, manam atinkichu amachaypa kachkayninkunata hukchayta.
Kay qatiqpiqa '''$1''' sutiyuq p'anqap kunan allinkachinankunatam rikunki:",
'protect-locked-access'       => "Qampa rakiqunaykiwanqa manam p'anqa amachaypa kachkayninkunata hukchayta atinkichu.
Kay qatiqpiqa '''$1''' sutiyuq p'anqap kunan allinkachinankunatam rikunki:",
'protect-cascadeon'           => "Kay p'anqaqa amachasqam kachkan, kay phaqchalla amachasqa {{PLURAL:$1|p'anqapi|p'anqakunapi}} ch'aqtasqa kaspanmi. Kay p'anqap amachasqa kachkayninta hukchaytam atinki, hinaspapas manam phaqcha nisqa amachasqa kaynintachu hukchanki.",
'protect-default'             => 'Tukuy ruraqkunapaq',
'protect-fallback'            => '"$1" saqillanam',
'protect-level-autoconfirmed' => 'Mana llullu rakiqunayuq ruraqkunallapaq',
'protect-level-sysop'         => 'Kamachiqkunallapaq',
'protect-summary-cascade'     => "''phaqcha'' nisqapi",
'protect-expiring'            => 'puchukanqa $1 (UTC)',
'protect-expiry-indefinite'   => 'mana sapaqchasqa',
'protect-cascade'             => "Phaqchalla amachay - kay p'anqapi ch'aqtasqa p'anqakunatapaq amachay.",
'protect-cantedit'            => "Manam atinkichu kay p'anqap amachasqa kachkayninta hukchayta, mana saqillasqa kaspaykim.",
'protect-othertime'           => 'Huk pacha:',
'protect-othertime-op'        => 'huk pacha',
'protect-existing-expiry'     => 'Kunanraq nispaqa kay pachakama: $3, $2',
'protect-otherreason'         => 'Huk/wakin rayku:',
'protect-otherreason-op'      => 'Huk/wakin rayku',
'protect-dropdown'            => "*Amachaypaq sapsi imaraykukuna
** Achka wandalismu
** Achka spam yapay
** Mana ruruchiq llamk'apuy awqanakuy
** Ancha qhawasqa p'anqa",
'protect-edit-reasonlist'     => 'Kayrayku amachasqa nisqata hukchay',
'protect-expiry-options'      => "1 ura:1 hour,1 p'unchaw:1 day,1 simana:1 week,2 simana:2 weeks,1 killa:1 month,3 killa:3 months,6 killa:6 months,1 wata:1 year,wiñaypaq:infinite",
'restriction-type'            => 'Saqillay:',
'restriction-level'           => 'Amachay hanan kay:',
'minimum-size'                => 'Kaymanta aswan hatun',
'maximum-size'                => 'Kaykama hatun',
'pagesize'                    => '(byte)',

# Restrictions (nouns)
'restriction-edit'   => "Llamk'apunapaq",
'restriction-move'   => 'Astanapaq',
'restriction-create' => 'Kamariy',
'restriction-upload' => 'Churkuy',

# Restriction levels
'restriction-level-sysop'         => "hunt'a amachasqa",
'restriction-level-autoconfirmed' => 'kuskan amachasqa',
'restriction-level-all'           => 'ima hanan kayninpas',

# Undelete
'undelete'                     => "Qullusqa p'anqata paqarichiy",
'undeletepage'                 => "Qullusqa p'anqakunata qhawaspa paqarichiy",
'undeletepagetitle'            => "'''Kay qatiqpiqa [[:$1]]-pa qullusqa musuqchayninkunam'''.",
'viewdeletedpage'              => "Qullusqa p'anqakunata qhaway",
'undeletepagetext'             => "Kay {{PLURAL:$1|p'anqaqa|p'anqakunaqa}} qullusqam, ichataq hallch'apiraqmi kachkan, chayrayku paqarichiytam atinki. Mit'a-mit'allaqa hallch'ata ch'usaqchankuchá.",
'undelete-fieldset-title'      => 'Musuqchasqakunata musuqmanta paqarichiy',
'undeleteextrahelp'            => "Tukuy llamk'apusqakunata paqarichinaykipaqqa, mana imatapas akllaspa '''''Paqarichiy!''''' ñit'iy.
Huklla llamk'apusqakunata paqarichinaykipaqqa, munasqayki llamk'apusqakunata akllaspa '''''Paqarichiy!''''' ñit'iy.
'''''Mana imapas''''' nisqapi ñit'iptiykiqa, tukuy akllasqaqa willana k'itichapas ch'usaqchasqam kanqa.",
'undeleterevisions'            => "$1 hallch'asqa {{PLURAL:$1|llamk'apusqa|llamk'apusqakuna}}",
'undeletehistory'              => "Qullusqaña p'anqata paqarichiptiykiqa, tukuy llamk'apusqakunam paqarinqa wiñay kawsaypi. Kaqlla sutiyuq musuq p'anqaña kachkaptinqa, paqarichisqa llamk'apusqakunaqa chay musuq p'anqap wiñay kawsaypim, ñawpaq kaq llamk'apusqakuna hinam paqarinqa.",
'undeleterevdel'               => "Qullusqaqa manam paqarichisqachu kanqa qhipaq llamk'apusqa rakilla qullusqa kaptinmanqa. Hinaptinqa, akllasqa nisqaykita qichuy icha lliwmanta aswan ñaqha qullusqa llamk'apusqakunata rikuchiy. Mana saqillasusqayki llamk'apusqakunaqa manam paqarichisqachu kanqa.",
'undeletehistorynoadmin'       => "Kay qillqaqa qullusqam. Kay qatiq pisichaypim rikunki imarayku qullusqa karqan, qhipaq llamk'apuqkunamanta willasqakunatapas. Tukuy qillqantintaqa kamachiqkunallam ñawiriyta atin.",
'undelete-revision'            => "$1-pa ($4 p'unchawpi, $5 pachapi) llamk'apusqan, $3-pa qullusqan:",
'undeleterevision-missing'     => "Llamk'apusqaqa manam allinchu icha chinkasqam. Mana allin t'inkichá, icha llamk'apusqaqa hallch'amanta qullusqachá icha musuqmanta paqarichisqachá.",
'undelete-nodiff'              => "Manam tarinichu ñawpaq llamk'apusqata.",
'undeletebtn'                  => 'Paqarichiy!',
'undeletelink'                 => 'qhaway/paqarichiy',
'undeleteviewlink'             => 'qhaway',
'undeletereset'                => 'Mana imapas',
'undeleteinvert'               => "Akllasqata t'ikray",
'undeletecomment'              => 'Kayrayku:',
'undeletedarticle'             => 'qullurqasqa "$1" paqarisqa',
'undeletedrevisions'           => "{{PLURAL:$1|Huk paqarichisqa llamk'apusqa|$1 paqarichisqa llamk'apusqakuna}}",
'undeletedrevisions-files'     => "{{PLURAL:$1|1 llamk'apusqaqa|$1 llamk'apusqakunaqa}} {{PLURAL:$2|1 willañiqipas|$2 willañiqikunapas}} paqarichisqam",
'undeletedfiles'               => '{{PLURAL:$1|1 willañiqiqa|$1 willañiqikunaqa}} paqarichisqam',
'cannotundelete'               => 'Manam atinichu qullusqata paqarichiyta; huk runachá ñawpaqtaña qullusqata paqarichirqan.',
'undeletedpage'                => "'''$1 nisqaqa paqarichisqañam'''

[[Special:Log/delete|Qulluy hallch'api]] qhaway ñaqha qullusqakunata paqarichisqakunatapas rikunaykipaq.",
'undelete-header'              => "[[Special:Log/delete|Qulluy hallch'apiqa]] qullusqa p'anqakunap sutinkunatam rikunki.",
'undelete-search-box'          => "Qullusqa p'anqakunata maskay",
'undelete-search-prefix'       => "Rikuchiy kaywan qallariq p'anqakunata:",
'undelete-search-submit'       => 'Maskay',
'undelete-no-results'          => "Manam tarinichu kay hina kayniyuq qullusqa p'anqakunata.",
'undelete-filename-mismatch'   => "Manam atinichu $1 pachamanta willañiqi llamk'apusqata qulluyta: manam kaqlla willañiqi sutichu",
'undelete-bad-store-key'       => "Manam atinichu $1 pachamanta willañiqi llamk'apusqata qulluyta: qullunayaptiy willañiqiqa manañam karqanchu.",
'undelete-cleanup-error'       => 'Pantasqam tukurqan "$1" sutiyuq mana llamk\'achisqa hallch\'a willañiqita qulluypi.',
'undelete-missing-filearchive' => "Manam atinichu ID $1 nisqa willañiqi hallch'ata paqarichiyta, willañiqintinpi mana kaptinmi. Qullusqamanta paqarichisqañachá.",
'undelete-error-short'         => 'Willañiqita paqarichiypi kay pantasqam tukurqan: $1',
'undelete-error-long'          => 'Pantasqakunam tukurqan kay willañiqita qulluypi:

$1',
'undelete-show-file-confirm'   => 'Allinta yachankiñachu "<nowiki>$1</nowiki>" sutiyuq willañiqimanta qullusqa $2 p\'unchawpi $3 pachapi llamk\'apusqata qhawayta munanaykita?',
'undelete-show-file-submit'    => 'Arí',

# Namespace form on various pages
'namespace'      => "Suti k'iti:",
'invert'         => "Akllasqantinta t'ikrachiy",
'blanknamespace' => '(Uma)',

# Contributions
'contributions'       => "Ruraqpa llamk'apusqankuna",
'contributions-title' => "$1 sutiyuq ruraqpa llamk'apusqankuna",
'mycontris'           => "Llamk'apusqaykuna",
'contribsub2'         => '$1 ($2)',
'nocontribs'          => 'Manam kay hina hukchasqakuna kanchu.',
'uctop'               => ' (qhipaq hukchasqa)',
'month'               => 'Kay killamanta (ñawpaqmantapas):',
'year'                => 'Kay watamanta (ñawpaqmantapas):',

'sp-contributions-newbies'             => "Musuq ruraqkunallap llamk'apusqankunata rikuchiy",
'sp-contributions-newbies-sub'         => 'Musuqkunapaq',
'sp-contributions-newbies-title'       => "Musuq ruraqkunap llamk'apusqankuna",
'sp-contributions-blocklog'            => "Hark'ay hallch'asqakuna",
'sp-contributions-deleted'             => 'qullusqa ruraqpa hukchasqankuna',
'sp-contributions-uploads'             => 'churkuykuna',
'sp-contributions-logs'                => "hallch'akuna",
'sp-contributions-talk'                => 'rimanakuy',
'sp-contributions-userrights'          => 'ruraqkunata saqillanap allinkachinan',
'sp-contributions-blocked-notice'      => "Kay ruraqqa hark'asqam kachkan. Hark'ay hallch'api qhipaq hark'asqataqa kaypim rikunki willasunaykipaq:",
'sp-contributions-blocked-notice-anon' => "Kay IP tiyayqa hark'asqam kachkan.
Qhipaq hark'ay hallch'a yaykuchisqatam kay qatiqpi rikunki:",
'sp-contributions-search'              => "Llamk'apusqakunata maskay",
'sp-contributions-username'            => 'IP huchha icha ruraqpa sutin:',
'sp-contributions-toponly'             => 'Pata musuqchasqakunallata rikuchiy',
'sp-contributions-submit'              => 'Maskay',

# What links here
'whatlinkshere'            => "Kayman t'inkimuq",
'whatlinkshere-title'      => "$1 sutiyuq p'anqaman t'inkimuqkuna",
'whatlinkshere-page'       => "P'anqa:",
'linkshere'                => "'''[[:$1]]''' sutiyuq p'anqamanqa kay qatiq p'anqakunam t'inkimun:",
'nolinkshere'              => "Manam kachkanchu '''[[:$1]]'''-man t'inkiq p'anqa.",
'nolinkshere-ns'           => "Manam kachkanchu '''[[:$1]]'''-man t'inkiq p'anqa akllasqa suti k'itipi.",
'isredirect'               => "pusapusqa p'anqa",
'istemplate'               => "ch'aqtasqa",
'isimage'                  => "rikcha t'inki",
'whatlinkshere-prev'       => '{{PLURAL:$1|ñawpaq|$1 ñawpaq}}',
'whatlinkshere-next'       => '{{PLURAL:$1|qatiq|$1 qatiq}}',
'whatlinkshere-links'      => "← t'inkikuna",
'whatlinkshere-hideredirs' => '$1 pusapunakuna',
'whatlinkshere-hidetrans'  => "$1 plantilla ch'aqtanakuna",
'whatlinkshere-hidelinks'  => "$1 t'inkikuna",
'whatlinkshere-hideimages' => "$1 rikcha t'inkikuna",
'whatlinkshere-filters'    => "Ch'illchinakuna",

# Block/unblock
'blockip'                         => "Ruraqta hark'ay",
'blockip-title'                   => "Ruraqta hark'ay",
'blockip-legend'                  => "Ruraqta hark'ay",
'blockiptext'                     => "Kay qatiq hunt'ana p'anqata llamk'achiy huk sapaq IP huchhamanta icha ruraqpa rakiqunanmanta qillqay atiyta hark'anapaq.
Kayqa rurasqa kachun wandalismullatam hark'anapaq, [[{{MediaWiki:Policy-url}}|{{SITENAME}}pa kawpayninkamallam]].
Willariy imaraykum hark'anki (ahinataq: sapaq wandaluchasqa p'anqakunamanta willaspa).",
'ipaddress'                       => 'IP huchha',
'ipadressorusername'              => 'IP huchha icha ruraqpa sutin',
'ipbexpiry'                       => "Hark'ay kaykama:",
'ipbreason'                       => 'Kayrayku:',
'ipbreasonotherlist'              => 'Huk rayku',
'ipbreason-dropdown'              => "*Hark'anapaq sapsi raykukuna
** Llulla willayta qillqamuy
** P'anqata samiqninmanta ch'usaqchay
** ''Spam'' nisqa millay t'inkikunata yapay
** Q'upata, mana ima chaniyuqtapas yapay
** Huk ruraqkunata manchachiy icha k'amiy
** Achka rakiqunakunawan millayta ruray
** Mana chaskinalla ruraqpa sutin",
'ipbanononly'                     => "Sutinnaq ruraqkunallata hark'ay",
'ipbcreateaccount'                => "Rakiquna kichariyta hark'ay",
'ipbemailban'                     => "Ruraqta e-chaski kachaymanta hark'ay",
'ipbenableautoblock'              => "Kay ruraqpa llamk'achisqan IP huchhata kikinmanta hark'ay, hinallataq ima qatiqlla llamk'achisqan IP huchhatapas",
'ipbsubmit'                       => "Kay ruraqta hark'ay",
'ipbother'                        => 'Huk puchukana pacha:',
'ipboptions'                      => "2 ura:2 hours,1 p'unchaw:1 day,3 p'unchaw:3 days,1 simana:1 week,2 simana:2 weeks,1 killa:1 month,3 killa:3 months,6 killa:6 months,1 wata:1 year,Wiña-wiñaypaq:infinite",
'ipbotheroption'                  => 'huk',
'ipbotherreason'                  => 'Huk/aswan rayku:',
'ipbhidename'                     => "Ruraqpa sutinta llamk'apusqakunamanta, sutisuyukunamantapas pakay",
'ipbwatchuser'                    => "Kay ruraqpa p'anqanta rimachinantapas watiqay",
'ipballowusertalk'                => "Kay ruraqta kikinpa rimanakuy p'anqanta hukchayta saqillay, hark'asqa kaptinpas",
'ipb-change-block'                => "Ruraqta musuqmanta hark'ay kay allinchanakunata churaspa",
'badipaddress'                    => 'IP huchhaqa manam allinchu.',
'blockipsuccesssub'               => "Ruraqqa hark'asqañam",
'blockipsuccesstext'              => "[[Special:Contributions/$1|$1]] huchhayuq tiyayqa hark'asqañam. <br />[[Special:IPBlockList|Hark'asqakunamanta p'anqata]] qhaway hark'akunata hukchanaykipaq.",
'ipb-edit-dropdown'               => "Hark'aypa hamunta llamk'apuy",
'ipb-unblock-addr'                => "Hark'asqa $1-ta qispichiy",
'ipb-unblock'                     => "Hark'asqa ruraqta icha IP huchhata qispichiy",
'ipb-blocklist'                   => "Kachkaq hark'asqakunata qhaway",
'ipb-blocklist-contribs'          => "$1-paq llamk'apusqakuna",
'unblockip'                       => "Hark'asqa ruraqta qispichiy",
'unblockiptext'                   => "Kay qatiq hunt'ana p'anqata llamk'achiy ñawpaqta hark'asqa IP huchhaman icha ruraqman qillqana hayñinta kutichinapaq.",
'ipusubmit'                       => "Kay hark'asqata qispichiy",
'unblocked'                       => "Hark'asqa [[User:$1|$1]] qispisqañam",
'unblocked-id'                    => "Hark'asqa $1-qa qispisqañam",
'ipblocklist'                     => "Hark'asqa ruraqkuna IP tiyaykunapas",
'ipblocklist-legend'              => "Hark'asqa ruraqta tariy",
'ipblocklist-username'            => 'Ruraqpa sutin icha IP huchha:',
'ipblocklist-sh-userblocks'       => "$1 rakiquna hark'asqakuna",
'ipblocklist-sh-tempblocks'       => "$1 mit'alla hark'asqakuna",
'ipblocklist-sh-addressblocks'    => "$1 sapaq IP-paq hark'asqakuna",
'ipblocklist-submit'              => 'Maskay',
'ipblocklist-localblock'          => "Kayllapi hark'ay",
'ipblocklist-otherblocks'         => "Huk {{PLURAL:$1|hark'ay|hark'aykuna}}",
'blocklistline'                   => "$1, $2 hark'an kay ruraqtam: $3 ($4)",
'infiniteblock'                   => 'wiñaypaq',
'expiringblock'                   => "$1 p'unchawpi $2 pachapi puchukanqa",
'anononlyblock'                   => 'sutinnaqlla',
'noautoblockblock'                => "kikinmanta hark'ayqa ama kachunchu",
'createaccountblock'              => "rakiqunata kichariyqa hark'asqam",
'emailblock'                      => "hark'asqa e-chaski",
'blocklist-nousertalk'            => "kikinpa rimanakuy p'anqanta manam hukchayta atinchu",
'ipblocklist-empty'               => "Mana pipas hark'asqachu kachkan.",
'ipblocklist-no-results'          => "Kay ruraqqa/IP huchhaqa manam hark'asqachu kachkan.",
'blocklink'                       => "hark'ay",
'unblocklink'                     => "hark'asqata qispichiy",
'change-blocklink'                => "hark'ayta hukniraqchay",
'contribslink'                    => "llamk'apusqakuna",
'autoblocker'                     => 'Kikinmanta hark\'asqam kanki, "[[User:$1|$1]]" sutiyuq ruraq IP huchhaykita ñaqha llamk\'arquptinmi. Hark\'aqqa "[[User:$1|$1]]"-ta hark\'aspa kaytam nirqan, kayrayku: "$2".',
'blocklogpage'                    => "Ruraq hark'asqakuna",
'blocklog-showlog'                => "Kay ruraqqa ñawpaqta hark'asqam. Hark'ay hallch'ataqa kaypim rikunki willasunaykipaq:",
'blocklog-showsuppresslog'        => "Kay ruraqqa ñawpaqta hark'asqam pakasqapas. Ñit'ipay hallch'ataqa kaypim rikunki willasunaykipaq:",
'blocklogentry'                   => "hark'an [[$1]]-ta kay pachakama: $2 $3",
'reblock-logentry'                => "hukchan [[$1]]-paq hark'ana allinchanakunata kay pachakama hark'aspa: $2 $3",
'blocklogtext'                    => "Kayqa ruraqta hark'asqakunap qispichisqakunappas hallch'anmi. Kikinmanta hark'asqa tiyaykunataqa manam kaypi rikunkichu. [[Special:IPBlockList|Hark'asqakunamanta p'anqata]] qhaway kunan hark'asqakunata rikunaykipaq.",
'unblocklogentry'                 => 'paskan "$1"-ta hark\'asqa kaymanta',
'block-log-flags-anononly'        => 'sutinnaqlla',
'block-log-flags-nocreate'        => 'rakiquna kichariyman ama nisqa',
'block-log-flags-noautoblock'     => "kikinmanta hark'ayman ama nisqa",
'block-log-flags-noemail'         => 'e-chaskiman ama nisqa',
'block-log-flags-nousertalk'      => "kikinpa rimanakuy p'anqanta manam hukchayta atinchu",
'block-log-flags-angry-autoblock' => "ñawparikusqa kikinmanta hark'ayman arí nisqa",
'block-log-flags-hiddenname'      => 'ruraqpa sutin pakasqa',
'range_block_disabled'            => "Kamachiqpa patayayku hark'ay hayñinman ama nisqam.",
'ipb_expiry_invalid'              => 'Puchukana pachaqa manam allinchu.',
'ipb_expiry_temp'                 => "Pakasqa ruraqpa sutin hark'aykunaqa tiyaqllam kachun.",
'ipb_hide_invalid'                => "Manam atinichu kay rakiqunata ñit'ipayta; nisyu llamk'apusqayuqñachá.",
'ipb_already_blocked'             => '"$1" sutiyuqqa hark\'asqañam kachkan.',
'ipb-needreblock'                 => "== Hark'asqaña ==
$1 sutiyuqqa hark'asqañam. Allinchanakunata hukchayta munankichu?",
'ipb-otherblocks-header'          => "Huk {{PLURAL:$1|hark'ay|hark'aykuna}}",
'ipb_cant_unblock'                => "'''Pantasqa''': Manam tarinichu ID $1 hark'ay huchhata. Qispisqañachá.",
'ipb_blocked_as_range'            => "Pantasqa: IP $1 huchhaqa manam chiqallachu hark'asqa kaptinmi manam paskanallachu. Chaywanpas, $2 patayayku kaspataq hark'asqam kachkan. Chay patayaykuqa hark'asqamanta paskanallam.",
'ip_range_invalid'                => "IP huchha k'itiqa manam chanichkanchu.",
'ip_range_toolarge'               => "/$1-manta aswan hatun k'iti hark'aykunaqa manam saqillasqachu.",
'blockme'                         => "Hark'away",
'proxyblocker'                    => "Proxy hark'aq",
'proxyblocker-disabled'           => 'Kay ruranamanqa ama nisqam.',
'proxyblockreason'                => "IP huchhaykiqa hark'asqam kichasqa proxy kaptinmi. Ama hina kaspa, internet mink'aqniykiman icha allwiya yanapaqniykiman kay hatun qasi sasachakuymanta willay.",
'proxyblocksuccess'               => 'Rurasqañam.',
'sorbsreason'                     => 'IP huchhaykiqa kichasqa proxy nispa {{SITENAME}}pi DNSBL nisqapi qillqasqam.',
'sorbs_create_account_reason'     => 'IP huchhaykiqa kichasqa proxy nispa {{SITENAME}}pi DNSBL nisqapi qillqasqam. Manam atinkichu rakiqunata kichayta',
'cant-block-while-blocked'        => "Kikiyki hark'asqa kaspaykiqa, manam huk ruraqkunata hark'ayta atinkichu.",
'cant-see-hidden-user'            => "Hark'aykachasqayki ruraqqa pipapas hark'asqanñam pakasqanñapas. Ruraqta pakay hayñiyuq mana kaspaykim, manam atinkichu ruraqpaq hark'ay hallch'asqata rikuyta icha hukchasqayta.",
'ipbblocked'                      => "Kikiyki hark'asqa kaspaykim, manam hukkunata hark'ayta icha hark'asqa kaymanta qispichiyta atinkichu",
'ipbnounblockself'                => "Kikiykitaqa manam hark'asqa kaymanta qispikuyta atinkichu",

# Developer tools
'lockdb'              => "Willañiqintinta hark'ay",
'unlockdb'            => 'Willañiqintinta paskay',
'lockdbtext'          => "Willañiqintinta hark'aptiykiqa, manam pi ruraqpas atinqachu p'anqakunata llamk'apuyta, allinkachinankunata hukchayta, watiqay sutisuyunta hukchayta icha huk ima willañiqintinta hukchaqtapas rurayta. Ama hina kaspa, \"kaytam rurayta munani, ruranayta tukuspay willañiqintinta paskasaq\" nispa takyachiy.",
'unlockdbtext'        => 'Willañiqintinta paskaptiykiqa, tukuy ruraqkunam atinqa p\'anqakunata llamk\'apuyta, allinkachinankunata hukchayta, watiqay sutisuyunta hukchayta icha huk ima willañiqintinta hukchaqtapas rurayta. Ama hina kaspa, "kaytam rurayta munani" nispa takyachiy.',
'lockconfirm'         => "Arí, chiqaplla willañiqintinta hark'aytam munani.",
'unlockconfirm'       => 'Arí, chiqaplla willañiqintinta paskaytam munani.',
'lockbtn'             => "Willañiqintinta hark'ay",
'unlockbtn'           => 'Willañiqintinta paskay',
'locknoconfirm'       => 'Manam takyachirqankichu munasqaykita.',
'lockdbsuccesssub'    => "Willañiqintinqa hark'asqañam",
'unlockdbsuccesssub'  => 'Willañiqintinqa paskasqañam',
'lockdbsuccesstext'   => "{{SITENAME}}pi willañiqintinqa hark'asqam.
<br />Yuyariy, ruranaykita tukuspayki [[Special:UnlockDB|willañiqintinta paskay]].",
'unlockdbsuccesstext' => '{{SITENAME}}pi willañiqintinqa paskasqam.',
'lockfilenotwritable' => "Willañiqintinqa manam qillqanapaqchu. Willañiqintinta hark'anapaqqa icha paskanapaqqa, sirwiqpa qillqananpaq kananmi tiyan.",
'databasenotlocked'   => "Willañiqintinqa manam hark'asqachu.",

# Move page
'move-page'                    => '$1-ta astay',
'move-page-legend'             => "P'anqata astay",
'movepagetext'                 => "Kay hunt'ana p'anqawanqa huk p'anqam tukuy wiñay kawsasqanpas astasqa kanqa. Mawk'a sutinqa musuq sutiman pusapuq p'anqam tukunqa. Mawk'a sutiman t'inkimuq p'anqakunaqa manam hukyanqachu. Paqtataq iskaylla pusapuna p'anqakunata allinchallay. Ama panta t'inkimuqkunata saqiychu.


Nisqayki musuq sutiyuq wiñay kawsasqayuq p'anqaña kachkaptinqa, kay p'anqa '''manam''' astasqa kanqachu.

Huklla kuti astasqa p'anqataqa mawk'a sutinman astayta atinkim, manataq huk mawk'a kachkaqña p'anqamanchu.

<b>PAQTATAQ!</b>
Kay astayqa ancha riqsisqa p'anqata hatun mana suyapusqa hukchaymi kayta atinman;
ama hina kaspa, yuyarillay imachus kay astanaykita saqispa tukunata atinman.",
'movepagetext-noredirectfixer' => "Kay hunt'ana p'anqawanqa huk p'anqam tukuy wiñay kawsasqanpas musuq sutiman astasqa kanqa.
Mawk'a sutinqa musuq sutiman pusapuq p'anqam tukunqa.
Paqtataq [[Special:DoubleRedirects|iskaylla]] icha [[Special:BrokenRedirects|p'akisqa]] pusapuna p'anqakunata allinchallay.
Ama panta t'inkimuqkunata saqiychu. Qammi chay t'inkikunap allin taripananmanta paqtachiq.

Nisqayki musuq sutiyuq wiñay kawsasqayuq p'anqaña kachkaptinqa, kay p'anqa '''manam''' astasqa kanqachu.
Huklla kuti astasqa p'anqataqa mawk'a sutinman astayta atinkim, manataq huk mawk'a kachkaqña p'anqamanchu.

'''Paqtataq!'''
Kay astayqa ancha riqsisqa p'anqata hatun mana suyapusqa hukchaymi kayta atinman;
ama hina kaspa, yuyarillay imachus kay astanaykita saqispa tukunata atinman.",
'movepagetalktext'             => "P'anqaman kapuq rimachina p'anqaqa - kachkaspaqa - kikinmanta astasqam kanqa. '''Manallam astasqachu kanqa,'''
*p'anqa huk suti huñumanta huk suti huñuman astasqa kachkaptinqa;
*huk wiñay kawsasqayuq musuq sutiyuq rimachina p'anqa kachkaptinqa;
*\"Rimachinapas, atikuq hinaptin\" nisqa akllanaman ama niptiykiqa.

Hinaptinqa, kay rimachina p'anqap samiqninta makiykiwan astanaykim tiyanqa.",
'movearticle'                  => "P'anqata astay",
'moveuserpage-warning'         => "'''Paqtataq:''' Ruraqpa p'anqantam astaykachachkanki. Qhawariy, p'anqallam astasqa kanqa, ruraqpa sutintaq '''manam''' wakinchasqachu kanqa.",
'movenologin'                  => "Manam qallarisqachu llamk'apuy tiyayniyki",
'movenologintext'              => "P'anqata astanaykipaqqa hallch'asqa ruraqmi kanayki [[Special:UserLogin|llamk'apuy tiyay qallarinaykipas]] tiyan.",
'movenotallowed'               => "Manam saqillasunkichu p'anqata astayta.",
'movenotallowedfile'           => 'Manam atinkichu willañiqikunata astayta.',
'cant-move-user-page'          => "Ruraqpa p'anqankunataqa manam astayta atinkichu (urin p'anqakunallatam).",
'cant-move-to-user-page'       => "Ruraqpa p'anqanmanqa manam astayta atinkichu (urin p'anqallamanmi).",
'newtitle'                     => 'Kay musuq sutiman',
'move-watch'                   => "Kay p'anqata watiqay",
'movepagebtn'                  => "P'anqata astay",
'pagemovedsub'                 => "P'anqaqa astasqañam",
'movepage-moved'               => "'''\"\$1\" sutiyuq p'anqaqa kaymanmi astasqa: \"\$2\".'''",
'movepage-moved-redirect'      => 'Pusapunam kamarisqaña.',
'movepage-moved-noredirect'    => "Pusapuna kamariyqa hark'asqam.",
'articleexists'                => "Kay sutiyuq p'anqaqa kachkanñam icha akllasqayki sutiqa manam allinchu. Ama hina kaspa, huk sutita akllay.",
'cantmove-titleprotected'      => "Manam atinkichu p'anqata kayman astamuyta, musuq p'anqa suti kamarinamanta hark'asqa kaptinmi",
'talkexists'                   => "P'anqaqa astasqañam, manataq rimanakuy p'anqachu, musuq sutiyuq rimanakuy p'anqa kachkaptinñam. Ama hina kaspa, makillaykiwan samiqninkuta huñuy.",
'movedto'                      => 'kayman astasqa:',
'movetalk'                     => 'Rimachinapas, atikuq hinaptin.',
'move-subpages'                => "Urin p'anqakunata astay ($1-kama)",
'move-talk-subpages'           => "Urin rimanakuy p'anqakunata astay ($1-kama)",
'movepage-page-exists'         => "$1 sutiyuq p'anqaqa kachkanñam, manam kikinmanta huknachanallachu.",
'movepage-page-moved'          => "$1 sutiyuq p'anqaqa $2 sutiman astasqañam.",
'movepage-page-unmoved'        => "Manam atinichu $1 sutiyuq p'anqata $2 sutiman astayta.",
'movepage-max-pages'           => "$1 {{PLURAL:$1|p'anqa|p'anqakuna}} astasqañam, kikinmanta manam aswan astasqa kanqachu.",
'1movedto2'                    => '«[[$1]]» «[[$2]]»-man astasqa',
'1movedto2_redir'              => '[[$1]] [[$2]]-man astasqa pusana qillqata huknachaspa',
'move-redirect-suppressed'     => "pusapunaqa hark'asqam",
'movelogpage'                  => "Astay hallch'asqa",
'movelogpagetext'              => "Kay qatiqpiqa astasqa p'anqakunam.",
'movesubpage'                  => "{{PLURAL:$1|Urin p'anqa|Urin p'anqakuna}}",
'movesubpagetext'              => "Kay p'anqaqa kay qatiqpi rikunalla $1 {{PLURAL:$1|urin p'anqayuqmi|urin p'anqayuqmi}}:",
'movenosubpage'                => "Kay p'anqaqa manam urin p'anqayuqchu.",
'movereason'                   => 'Kayrayku:',
'revertmove'                   => 'kutichiy',
'delete_and_move'              => 'Qulluspa astay',
'delete_and_move_text'         => '==Qullunam tiyan==

Tukuna p\'anqaqa ("[[:$1]]") kachkañam. Astanapaq qulluyta munankichu?',
'delete_and_move_confirm'      => "Arí, kay p'anqata qulluy",
'delete_and_move_reason'       => 'Astanapaq qullusqa',
'selfmove'                     => "Qallarinawan taripana sutikunaqa kaqllam kachkan. Manam atinchu p'anqata kikinman astay.",
'immobile-source-namespace'    => "Manam atinichu «$1» suti k'itipi p'anqakunata astayta",
'immobile-target-namespace'    => "Manam atinichu p'anqakunata «$1» suti k'itiman astayta",
'immobile-target-namespace-iw' => "Wikipura t'inkiqa p'anqa astanapaq manam allin taripanachu.",
'immobile-source-page'         => "Kay p'anqaqa manam astanallachu.",
'immobile-target-page'         => 'Manam atinichu chay taripana sutiman astayta.',
'imagenocrossnamespace'        => "Manam atinichu p'anqata astayta mana willañiqipaq suti k'itiman",
'nonfile-cannot-move-to-file'  => "Manam atinichu mana willañiqi kaqta astayta willañiqipaq suti k'itiman",
'imagetypemismatch'            => "Willañiqip musuq mast'arinanqa kay layapaq manam allinchu",
'imageinvalidfilename'         => 'Taripana willañiqip sutinqa manam allinchu',
'fix-double-redirects'         => 'Qallariy sutiman astamuq tukuy pusapunakunata musuqchay',
'move-leave-redirect'          => 'Pusapunata qhipaqpi saqispa puchuchiy',
'protectedpagemovewarning'     => "'''Paqtataq:''' Kay p'anqaqa amachasqam, kamachiqkunap hayñinniyuq ruraqkunallap astananpaq.
Hallch'api qhipaq kaq yaykuchisqataqa kay qatiqpim rikunki willasunaykipaq:",
'semiprotectedpagemovewarning' => "'''Paqtataq:''' Kay p'anqaqa amachasqam, rakiqunayuq ruraqkunallap astananpaq.
Hallch'api qhipaq kaq yaykuchisqataqa kay qatiqpim rikunki willasunaykipaq:",
'move-over-sharedrepo'         => '== Willañiqiqa kachkañam ==
[[:$1]] nisqaqa kachkañam rakinakusqa qullqapi. Ima willañiqipas kay sutiman astasqa kaptinqa, rakinakusqa willañiqi huknachasqanwan qullusqam kanqa.',
'file-exists-sharedrepo'       => 'Akllasqay willañiqi sutiqa kachkañam rakinakusqa qullqapi.
Ama hina kaspa, huk sutita akllay.',

# Export
'export'            => "P'anqakunata hawaman quy",
'exporttext'        => "Huk sapaq p'anqap icha aswan p'anqakunap qillqanta wiñay kawsaynintapas hawaman quyta atinki XML qillqaman. Chaytaqa huk MediaWikita llak'achiq wikiman hawamanta chaskiyta atinku [[Special:Import|hawamanta chaskiy p'anqa]] nisqawan.

P'anqakunata hawaman qunaykipaqqa, sutinkunata kay qatiqppi qillqana k'itichaman qillqay, sapa siq'ipi huk suti, akllaspa kunan p'anqata wiñay kawsaynintapas munankichu ichataq kunan p'anqatallachu qhipaq hukchasqallamanta willayllawan.

Qhipaqta munaspaykiqa, t'inkitapas llamk'achiyta atinki, ahinataq [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]], \"[[{{MediaWiki:Mainpage}}]]\" p'anqapaq.",
'exportcuronly'     => "Kunan llamk'apusqatam ch'aqtay, manataqmi wiñay kawsaynintinchu.",
'exportnohistory'   => "----
'''Musyay:''' Wiñay kawsaynintinta kay hunt'ana p'anqawan hawan quymanqa ama nisqam, sirwiq mana atiptinmi.",
'export-submit'     => 'Hawaman quy',
'export-addcattext' => "P'anqakunata yapay kay katiguriyamanta:",
'export-addcat'     => 'Yapay',
'export-addnstext'  => "Kay suti k'itimanta p'anqakunata yapay:",
'export-addns'      => 'Yapay',
'export-download'   => 'Willañiqi hina waqaychay niy',
'export-templates'  => "Plantillata ch'aqtay",
'export-pagelinks'  => "T'inkisqa p'anqakunata ch'aqtay kay t'inkipayay yupaykama:",

# Namespace 8 related
'allmessages'                   => 'MediaWiki-p tukuy willayninkuna',
'allmessagesname'               => 'Suti',
'allmessagesdefault'            => 'Ñawpaq qillqa',
'allmessagescurrent'            => 'Kunan kachkaq qillqa',
'allmessagestext'               => "Kayqa MediaWiki suti k'itipi llamk'achinalla willaykunayuq sutisuyum.
Ama hina kaspa, [http://www.mediawiki.org/wiki/Localisation MediaWiki Localisation] nisqata, [http://translatewiki.net translatewiki.net] nisqatapas watukuy, MediaWiki nisqata t'ikraywan yanapayta munaspaykiqa.",
'allmessagesnotsupportedDB'     => "Kay p'anqaqa manam llamk'achinallachu, '''\$wgUseDatabaseMessages''' nisqaman ama nisqa kaptinmi.",
'allmessages-filter-legend'     => "Ch'illchina",
'allmessages-filter'            => "Ch'illchina, allinchasqa kachkaykama:",
'allmessages-filter-unmodified' => 'Mana hukchasqa',
'allmessages-filter-all'        => 'Tukuy',
'allmessages-filter-modified'   => 'Hukchasqa',
'allmessages-prefix'            => "Ch'illchina, ñawpaq k'askaqkama:",
'allmessages-language'          => 'Rimay:',
'allmessages-filter-submit'     => 'Riy',

# Thumbnails
'thumbnail-more'           => 'Hatunchay',
'filemissing'              => 'Manam willañiqi kachkanchu',
'thumbnail_error'          => 'Manam atinichu rikchachata kamayta: $1',
'djvu_page_error'          => "DjVu nisqa p'anqaqa nisyum",
'djvu_no_xml'              => 'Manam atinichu XML-ta apamuy DjVu willañiqipaq',
'thumbnail_invalid_params' => 'Rikchachap kuskanachina tupunkunaqa manam allinchu',
'thumbnail_dest_directory' => 'Manam atinichu taripana willañiqi churanata kamayta',
'thumbnail_image-type'     => "Rikch'a layaqa manam llamk'achikusqachu",
'thumbnail_gd-library'     => 'Mana tukuchisqa GD churana allinchana: $1 nisqa ruranaqa manam kanchu',
'thumbnail_image-missing'  => 'Willañiqiqa manachá kanchu: $1',

# Special:Import
'import'                     => "P'anqakunata hawamanta chaskiy",
'importinterwiki'            => "Huk wikimanta p'anqakunata chaskiy",
'import-interwiki-text'      => "Huk wikita p'anqap sutintapas akllay hawamanta chaskinapaq.
Llamk'apusqap pachankunaqa ruraqpa sutinkunapas kakuspa hallch'asqam kanqa.
Tukuy hawa wikimanta chaskisqakunaqa [[Special:Log/import|hawamanta chaskiy hallch'api]] hallch'asqam kanqa.",
'import-interwiki-source'    => "Qallariy wiki icha p'anqa:",
'import-interwiki-history'   => "Kay p'anqapaq tukuy wiñay kawsaynintinta iskaychay",
'import-interwiki-templates' => 'Tukuy plantillakunapas',
'import-interwiki-submit'    => 'Hawamanta chaskiy',
'import-interwiki-namespace' => "Kay suti k'itiman churay:",
'import-upload-filename'     => 'Willañiqip sutin:',
'import-comment'             => 'Willayniyki:',
'importtext'                 => "Ama hina kaspa, willañiqita qallariy wikimanta [[Special:Export|hawaman quna llamk'anawan]] hawaman quy antañiqiqniykipi waqaychaspa, chaymantataq kaypi churkuy.",
'importstart'                => "P'anqakunatam hawamanta chaskichkani...",
'import-revision-count'      => "$1 {{PLURAL:$1|llamk'apusqa|llamk'apusqakuna}}",
'importnopages'              => "Manam kanchu hawamanta chaskina p'anqakuna.",
'imported-log-entries'       => "$1 {{PLURAL:$1|hallch'a yaykuchisqa|hallch'a yaykuchisqa}} hawamanta chaskisqam.",
'importfailed'               => 'Manam atinichu hawamanta chaskiy: $1',
'importunknownsource'        => 'Hawamanta chaskina pukyu layaqa manam riqsisqachu',
'importcantopen'             => 'Manam atinichu kay willañiqita hawamanta chaskiyta',
'importbadinterwiki'         => "Interwiki t'inkiqa manam allinchu",
'importnotext'               => "Ch'usaqmi",
'importsuccess'              => 'Aypalla hawamanta chaskisqañam!',
'importhistoryconflict'      => "Wiñay kawsaypiqa hayunakuqmi llamk'apusqakuna (ñawpaqtaña hawamanta chaskisqachá karqan)",
'importnosources'            => 'Manam qusqachu hawamanta chaskina pukyukuna, wiñay kawsayta chiqalla churkuymantaq ama nisqam.',
'importnofile'               => 'Manam ima chaskina willañiqi churkusqachu.',
'importuploaderrorsize'      => 'Manam atinichu hawamanta chaskina willañiqita churkuyta, saqillasqamanta aswan hatun kaptinmi.',
'importuploaderrorpartial'   => 'Manam atinichu hawamanta chaskina willañiqita churkuyta, rakillam churkusqa.',
'importuploaderrortemp'      => "Manam atinichu hawamanta chaskina willañiqita churkuyta, mit'alla willañiqi churana mana kaptinmi.",
'import-parse-failure'       => "Manam atinichu XML qillqata t'ikraspa hawamanta chaskiyta",
'import-noarticle'           => "Manam hawamanta chaskina p'anqachu!",
'import-nonewrevisions'      => 'Tukuy musuqchasqakunaqa ñawpaqtañam hawamanta chaskisqa.',
'xml-error-string'           => "$1, $2 siq'ipi, $3 tunupi (byte $4): $5",
'import-upload'              => 'XML willakunata churkuy',
'import-token-mismatch'      => 'Tiyay ruraymanta willakunaqa chinkasqam. Ama hina kaspa, musuqmanta ruraykachay.',
'import-invalid-interwiki'   => 'Manam atinichu nisqa wikimanta chaskiyta.',

# Import log
'importlogpage'                    => "Hawamanta chaskiy hallch'a",
'importlogpagetext'                => "Huk wikikunamanta wiñay kawsayniyuq p'anqakunata kamachina chaskiykuna.",
'import-logentry-upload'           => 'hawamanta chaskisqa [[$1]] willañiqita churkuspa',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|hukchasqa|hukchasqakuna}}',
'import-logentry-interwiki'        => 'huk wikimanta chaskisqa $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|hukchasqa|hukchasqakuna}} $2-manta',

# Tooltip help for the actions
'tooltip-pt-userpage'             => "Qampa ruraqpa p'anqayki",
'tooltip-pt-anonuserpage'         => "IP huchhaykipaq ruraqpa p'anqan",
'tooltip-pt-mytalk'               => "Rimanakuy p'anqayki",
'tooltip-pt-anontalk'             => "Kay IP huchhamanta llamk'apusqakuna hawa rimanakuy",
'tooltip-pt-preferences'          => 'Allinkachinaykuna',
'tooltip-pt-watchlist'            => "Ruraqpa hukchasqakunakama watiqasqan p'anqakuna",
'tooltip-pt-mycontris'            => "Llamk'apusqaykikuna",
'tooltip-pt-login'                => 'Kallpachaykiku yaykunaykiqa allinmi nispa, mana manu kanayki kaptinpas',
'tooltip-pt-anonlogin'            => 'Kallpachaykiku yaykunaykiqa allinmi nispa, mana manu kanayki kaptinpas',
'tooltip-pt-logout'               => "Llamk'apuy tiyaymanta lluqsiy",
'tooltip-ca-talk'                 => "Qillqasqap samiqninmanta rimanakuna p'anqa",
'tooltip-ca-edit'                 => "Kay p'anqata llamk'apuytam atinki. Ama hina kaspa, manaraq waqaychaspa ñawpaqta qhawarillay.",
'tooltip-ca-addsection'           => 'Musuq rakita qallariy',
'tooltip-ca-viewsource'           => "Kay p'anqaqa amachasqam. Qallariy qillqataqa qhawallaytam atinki, mana hukchaspa.",
'tooltip-ca-history'              => "Kay p'anqapaq ñawpaq llamk'apusqakuna llamk'apuqkunapas",
'tooltip-ca-protect'              => "Kay p'anqata amachay",
'tooltip-ca-unprotect'            => "Kay p'anqata amaña amachaychu",
'tooltip-ca-delete'               => "Kay p'anqata qulluy",
'tooltip-ca-undelete'             => "Kay p'anqap qullusqa kasqankama llamk'apusqakunata paqarichiy",
'tooltip-ca-move'                 => "Kay p'anqata astay musuq sutinta quspa",
'tooltip-ca-watch'                => "Kay p'anqata watiqay",
'tooltip-ca-unwatch'              => "Amaña watiqaychu kay p'anqata",
'tooltip-search'                  => 'Kay wikipi maskay',
'tooltip-search-go'               => "Kay hinalla sutiyuq p'anqaman riy, kaptinqa",
'tooltip-search-fulltext'         => "Kay qillqasqayuq p'anqakunata maskay",
'tooltip-p-logo'                  => "Qhapaq p'anqa",
'tooltip-n-mainpage'              => "Qhapaq p'anqata watukuy",
'tooltip-n-mainpage-description'  => "Qhapaq p'anqaman riy",
'tooltip-n-portal'                => 'Ruraykamaymanta, imatachus rurayta atinki, maypichus imatapas tariy',
'tooltip-n-currentevents'         => 'Kunan pacha tukusqakunamanta ukhunpuray willaykuna',
'tooltip-n-recentchanges'         => 'Kay wikipi ñaqha hukchasqakuna',
'tooltip-n-randompage'            => "Mayninpi kaq p'anqaman riy",
'tooltip-n-help'                  => 'Yachaqanapaq tiyana',
'tooltip-t-whatlinkshere'         => "Kay p'anqaman tukuy t'inkimuqkuna",
'tooltip-t-recentchangeslinked'   => "Kay p'anqaman t'inkimuqkunapi ñaqha hukchasqakuna",
'tooltip-feed-rss'                => "Kay p'anqapaq RSS mikhuchiy",
'tooltip-feed-atom'               => "Kay p'anqapaq Atom mikhuchiy",
'tooltip-t-contributions'         => "Kay ruraqpa llamk'apusqankunata qhaway",
'tooltip-t-emailuser'             => 'Kay ruraqman chaskita kachay',
'tooltip-t-upload'                => 'Rikchakunata, multimidyata churkuy',
'tooltip-t-specialpages'          => "Tukuy sapaq p'anqakuna",
'tooltip-t-print'                 => "Kay p'anqata ch'ipachinapaq",
'tooltip-t-permalink'             => "ch'ipachinapaq p'anqaman kakuq t'inki",
'tooltip-ca-nstab-main'           => 'Qillqata qhaway',
'tooltip-ca-nstab-user'           => "Ruraqpa p'anqanta qhaway",
'tooltip-ca-nstab-media'          => "Multimidyamanta p'anqata qhaway",
'tooltip-ca-nstab-special'        => "Kayqa sapaq p'anqam, manam hukchanallachu",
'tooltip-ca-nstab-project'        => "Ruraykamay p'anqata qhaway",
'tooltip-ca-nstab-image'          => "Rikchamanta p'anqata qhaway",
'tooltip-ca-nstab-mediawiki'      => 'Llikap willayninta qhaway',
'tooltip-ca-nstab-template'       => 'Plantillata qhaway',
'tooltip-ca-nstab-help'           => "Yanapana p'anqata qhaway",
'tooltip-ca-nstab-category'       => "Katiguriyamanta p'anqata qhaway",
'tooltip-minoredit'               => 'Kayta aslla hukchay nispa sananchay',
'tooltip-save'                    => 'Hukchasqakunata waqaychay',
'tooltip-preview'                 => 'Ñawpaqtaqa hukchasqaykikunata qhawarillay, manaraq waqaychaspa!',
'tooltip-diff'                    => 'Qillqapi hukchasqaykikunata rikuchiy.',
'tooltip-compareselectedversions' => "P'anqap iskay akllasqa hukchasqanpura hukchasqa kayta qhaway.",
'tooltip-watch'                   => "Kay p'anqata watiqay",
'tooltip-recreate'                => "Kay p'anqata musuqmanta kamariy, qullusqa kaptinpas",
'tooltip-upload'                  => 'Churkuyta qallariy',
'tooltip-rollback'                => "\"Kutichina\" nisqapi ñit'ispaykiqa huk ruraqpa tukuy qhipaq llamk'apusqankunatam huklla ñit'iyniykiwan kutichinki.",
'tooltip-undo'                    => "\"Kutichiy\" nisqapi ñit'ispaykiqa kay llamk'apusqatam kutichinki, p'anqata ñawpaqta qhawaspa llamk'anapaq kichaspa. Pisichaypi imarayku niyta atinki.",
'tooltip-preferences-save'        => 'Akllasqakunata waqaychay',
'tooltip-summary'                 => 'Pisichaychata yaykuchiy',

# Stylesheets
'common.css'      => "/* Churamusqa CSS chantakunaqa tukuy qarakunapim llamk'anqa */",
'standard.css'    => "/* Churamusqa CSS chantakunaqa ''Standard skin'' nisqa qarata llamk'achiq ruraqkunapaq llamk'anqa */",
'nostalgia.css'   => "/* Churamusqa CSS chantakunaqa ''Nostalgia skin'' nisqa qarata llamk'achiq ruraqkunapaq llamk'anqa */",
'cologneblue.css' => "/* Churamusqa CSS chantakunaqa ''Cologne Blue skin'' nisqa qarata llamk'achiq ruraqkunapaq llamk'anqa */",
'monobook.css'    => '/* Kayman churasqa CSS nisqaqa Monobook qaratam hukchanqa tukuy internet tiyanapaq */',
'myskin.css'      => "/* Churamusqa CSS chantakunaqa ''MySkin'' nisqa qarata llamk'achiq ruraqkunapaq llamk'anqa */",
'chick.css'       => "/* Churamusqa CSS chantakunaqa ''Chick skin'' nisqa qarata llamk'achiq ruraqkunapaq llamk'anqa */",
'simple.css'      => "/* Churamusqa CSS chantakunaqa ''Simple skin'' nisqa qarata llamk'achiq ruraqkunapaq llamk'anqa */",
'modern.css'      => "/* Churamusqa CSS chantakunaqa ''Modern skin'' nisqa qarata llamk'achiq ruraqkunapaq llamk'anqa */",
'print.css'       => "/* Churamusqa CSS chantakunaqa ch'ipachinap rikch'akuynintam hukchanqa */",
'handheld.css'    => "/* Churamusqa CSS chantakunaqa makiwan hap'isqa qarapi tiksisqa \$wgHandheldStyle nisqapi allichasqa antakunap llamk'aynintam hukchanqa */",

# Scripts
'common.js'      => "/* Ima kaypi kaq JavaScript qillqapas tukuy ruraqkunapaq tukuy p'anqakunap tukuy chaqnankunapi chaqnamusqa kanqa. */",
'standard.js'    => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas ''Standard skin'' nisqa sapsi qarata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",
'nostalgia.js'   => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas ''Nostalgia skin'' nisqa qarata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",
'cologneblue.js' => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas ''Cologne Blue skin'' nisqa qarata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",
'monobook.js'    => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas MonoBook nisqata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",
'myskin.js'      => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas ''MySkin'' nisqa qarata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",
'chick.js'       => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas ''Chick skin'' nisqa qarata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",
'simple.js'      => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas ''Simple skin'' nisqa qarata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",
'modern.js'      => "/* Ima kaypi qillqamusqa JavaScript nisqa wakichi qillqapas ''Modern skin'' nisqa qarata llamk'achiq ruraqkunapaq chaqnasqa kanqa */",

# Metadata
'nodublincore'      => 'Dublin Core RDF metadata nisqamanqa kay sirwiqpi ama nisqam.',
'nocreativecommons' => 'Creative Commons RDF metadata nisqamanqa kay sirwiqpi ama nisqam.',
'notacceptable'     => "Wiki sirwiqqa manam willakunata quyta atinchu mink'akuqniykip (wamp'unaykip) hap'iyta atisqan chantapi.",

# Attribution
'anonymous'        => '{{SITENAME}}pi sutinnaq {{PLURAL:$1|ruraq|ruraqkuna}}',
'siteuser'         => '{{SITENAME}}-pa $1 sutiyuq ruraqnin',
'anonuser'         => '{{SITENAME}} rakiqunannaq ruraq $1',
'lastmodifiedatby' => "Kay p'anqaqa $2, $1 qhipaq kutitam $3-pa hukchasqan karqan.",
'othercontribs'    => '$1-pa rurasqanmanta paqariq.',
'others'           => 'hukkuna',
'siteusers'        => '{{SITENAME}}-pa $1 sutiyuq {{PLURAL:$2|ruraqnin|ruraqninkuna}}',
'anonusers'        => '{{SITENAME}} rakiqunannaq {{PLURAL:$2|ruraq|ruraqkuna}} $1',
'creditspage'      => "P'anqap manuyninkuna",
'nocredits'        => "Manam ima willasqapas kay p'anqap manuyninkunamantachu.",

# Spam protection
'spamprotectiontitle' => "Spam nisqamanta amachanapaq ch'illchina",
'spamprotectiontext'  => "Kay p'anqataqa manam waqaychayta atinkichu, ''spam'' ch'illchina hark'aptinmi. Qillqapiqa millay p'anqaman t'inkichá, millay p'anqakunapaq sutisuyunpi hallch'asqachá.",
'spamprotectionmatch' => "Kay qatiq qillqam ''spam'' ch'illchinaykuta rurarichirqan: $1",
'spambot_username'    => 'MediaWiki-ta spam nisqamanta pichay',
'spam_reverting'      => "Qhipaq kaq mana $1-man t'inkimuqniyuq llamk'apusqaman kutichispa",
'spam_blanking'       => "Tukuy llamk'apusqakunaqa $1-manmi t'inkimuq, ch'usaqchaspa",

# Info page
'infosubtitle'   => "P'anqamanta willay",
'numedits'       => "Hayk'a llamk'apusqakuna (qillqa p'anqa): $1",
'numtalkedits'   => "Hayk'a llamk'apusqakuna (rimanakuy p'anqa): $1",
'numwatchers'    => "Hayk'a watiqaqkuna: $1",
'numauthors'     => "Hayk'a sapaq llamk'apuqkuna (qillqa p'anqa): $1",
'numtalkauthors' => "Hayk'a sapaq llamk'apuqkuna (rimanakuy p'anqa): $1",

# Math options
'mw_math_png'    => "Hayk'appas PNG-ta ruray",
'mw_math_simple' => 'Ancha sikllalla kaptinqa HTML, mana hinaptinqa PNG',
'mw_math_html'   => 'Paqtanayaptinqa HTML, mana hinaptinqa PNG',
'mw_math_source' => "TeX hinatam saqiy (qillqa wamp'unapaq)",
'mw_math_modern' => "Musuq wamp'unakunapaq kamallisqa",
'mw_math_mathml' => 'MathML',

# Math errors
'math_failure'          => "Manam hap'inichu",
'math_unknown_error'    => 'mana riqsisqa pantasqa',
'math_unknown_function' => 'mana riqsisqa rurana',
'math_lexing_error'     => 'rima pantasqa',
'math_syntax_error'     => 'rimay ukhunpuray pantasqa',
'math_image_error'      => "Manam atinichu PNG-man t'ikrayta; latex nisqawan dvipng (icha dvips + gs + convert) nisqakunap tiyachisqa kayninta llanchiy",
'math_bad_tmpdir'       => "Manam atinichu <em>math</em> nisqapaq mit'alla willañiqi churanata kamayta icha qillqayta",
'math_bad_output'       => 'Manam atinichu <em>math</em> nisqapaq lluqsichina willañiqi churanata kamayta icha qillqayta',
'math_notexvc'          => 'Manam kanchu ruranalla <strong>texvc</strong>. Ama hina kaspa, <em>math/README</em> nisqata ñawiriy allinkachinaykipaq.',

# Patrolling
'markaspatrolleddiff'                 => 'Qhawakipasqaman sananchay',
'markaspatrolledtext'                 => "Kay p'anqata qhawakipasqam nispa sananchay",
'markedaspatrolled'                   => 'Qhawakipasqaman sananchasqa',
'markedaspatrolledtext'               => "Akllasqa [[:$1]]-paq llamk'apusqaqa qhawakipasqaman sananchasqam.",
'rcpatroldisabled'                    => 'Ñaqha hukchasqakunata qhawakipaymanqa ama nisqam',
'rcpatroldisabledtext'                => 'Ñaqha hukchasqakunata qhawakipaymanqa kunan ama nisqam kachkan.',
'markedaspatrollederror'              => 'Manam atinichu qhawakipasqaman sananchayta',
'markedaspatrollederrortext'          => "Huk llamk'apusqata akllanaykim tiyan qhawakipasqaman sananchanaykipaq.",
'markedaspatrollederror-noautopatrol' => "Manam saqillasunkichu qampa llamk'apusqaykikunata qhawakipasqaman sananchayta.",

# Patrol log
'patrol-log-page'      => "Qhawakipay hallch'a",
'patrol-log-header'    => "Kayqa patrullasqa musuqchasqakunamanta hallch'asqam.",
'patrol-log-line'      => '$1 sananchasqa $2-manta qhawakipasqa $3',
'patrol-log-auto'      => '(kikinmanta)',
'patrol-log-diff'      => 'musuqchasqa $1',
'log-show-hide-patrol' => "$1 patrullay hallch'a",

# Image deletion
'deletedrevision'                 => "Qullusqam mawk'a qhawakipasqa $1",
'filedeleteerror-short'           => 'Manam atinichu kay willañiqita qulluyta: $1',
'filedeleteerror-long'            => "Pantasqakunam rikch'akurqan kay willañiqita qulluypi:

$1",
'filedelete-missing'              => '"$1" sutiyuq willañiqiqa manam qullunallachu, mana kaspanmi.',
'filedelete-old-unregistered'     => 'Sananchasqa willañiqi musuqchasqaqa "$1" manam kanchu willañiqintinpi.',
'filedelete-current-unregistered' => 'Sananchasqa willañiqiqa "$1" manam kanchu willañiqintinpi.',
'filedelete-archive-read-only'    => 'Hallch\'a willañiqi churanaqa "$1" manam llika sirwiqpa qillqanallanchu.',

# Browsing diffs
'previousdiff' => "← ñawpaq llamk'apusqa",
'nextdiff'     => "Qatiq llamk'apusqa →",

# Media information
'mediawarning'         => "'''Paqtataq''': Kay willañiqiqa millay wakichi qillqayuqchá.
Payta rurachiyqa antañiqiqniykita llikaykitapas waqllinqachá.",
'imagemaxsize'         => "Rikchap chhikan kayninta kaykama saywachay:<br />''(willañiqi ch'uyanchana p'anqakunapaq)''",
'thumbsize'            => "Ch'iñicha rikchachap chhikan kaynin:",
'widthheightpage'      => "$1×$2, $3 {{PLURAL:$3|p'anqa|p'anqakuna}}",
'file-info'            => 'willañiqip chhikan kaynin: $1; MIME laya: $2',
'file-info-size'       => '$1 × $2 iñu; willañiqip chhikan kaynin: $3; MIME laya: $4',
'file-nohires'         => '<small>Manam kanchu aswan huyakuyuq rikcha.</small>',
'svg-long-desc'        => 'SVG willañiqi, rimasqakama $1 × $2 iñuyuq, willañiqip chhikan kaynin: $3',
'show-big-image'       => 'Qallariy huyaku',
'show-big-image-thumb' => '<small>Kay ñawpaq qhawariypa chhikan kaynin: $1 × $2 iñu</small>',
'file-info-gif-looped' => 'muyupayachisqa',
'file-info-gif-frames' => '$1 {{PLURAL:$1|inchu|inchukuna}}',
'file-info-png-looped' => 'muyupayachisqa',
'file-info-png-repeat' => '$1 {{PLURAL:$1|kuti|kuti}} pukllasqa',
'file-info-png-frames' => '$1 {{PLURAL:$1|inchu|inchukuna}}',

# Special:NewFiles
'newimages'             => 'Musuq rikchakunap suyu-suyun',
'imagelisttext'         => "Kay qatiqpiqa '''$1''' {{PLURAL:$1|rikchatam|rikchakunatam}} rikunki, $2-kama ñiqichasqa.",
'newimages-summary'     => "Kay sapaq p'anqapiqa ñaqha churkusqa willañiqikunatam rikunki.",
'newimages-legend'      => 'Suysuna',
'newimages-label'       => 'Willañiqip sutin (icha sutinpa rakin):',
'showhidebots'          => '($1 rurana antacha)',
'noimages'              => 'Manam ima rikunallapas kanchu.',
'ilsubmit'              => 'Maskay',
'bydate'                => "p'unchawkama",
'sp-newimages-showfrom' => 'Musuq rikchakunata rikuchiy, $2, $1-wan qallarispa',

# Bad image list
'bad_image_list' => "Chantaqa kay hinam:

Sutisuyu imakunallam (* sananchawan qallariq siq'ikunapi) hamut'arisqa. Siq'ipi ñawpaq ñiqin t'inkipqa mana allin rikchaman t'inkimunanmi.
Kikin siq'ipi ima qatiq t'inkillapas sapaqllatam hamut'arisqa, ahinataq siq'ipi rikchayuq p'anqakunam.",

# Metadata
'metadata'          => 'Metadata',
'metadata-help'     => "Kay willañiqipiqa aswan sapaqlla willaymi, iliktruniku rikchahap'inawanchá, iskanirwanchá icha rikcharurana wakichiwanchá yapasqa. Willañiqi chaymantapacha hukchasqa kaptinqa, huk sapaq samiqninkuna chinkasqachá.",
'metadata-expand'   => 'Aswan sapaqlla willakunata rikuchiy',
'metadata-collapse' => 'Sapaqlla willakunata pakay',
'metadata-fields'   => "Kay willaypi rikuchisqa EXIF metadatapaq k'itichakunaqa rikcha p'anqapim ch'aqtasqa kanqa, metadata wachuchasqa mana rikch'akuptinpas. Huk k'itikunaqa kikinmantam pakasqa kanqa.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength",

# EXIF tags
'exif-imagewidth'                  => 'Suni kay',
'exif-imagelength'                 => 'Hanaq kay',
'exif-bitspersample'               => 'Bitkuna ñawpariqninman',
'exif-compression'                 => "Mat'iy t'iktulla",
'exif-photometricinterpretation'   => "Iñu ch'antay",
'exif-orientation'                 => 'Puririchiy',
'exif-samplesperpixel'             => 'Ñawpariq rakinkunap yupaynin',
'exif-planarconfiguration'         => "Willa mast'ariy",
'exif-ycbcrsubsampling'            => 'Y-pa C-man urin malliy achuraynin',
'exif-ycbcrpositioning'            => 'Y-ta C-tapas churamuy',
'exif-xresolution'                 => "Siriqpa ch'irkukun",
'exif-yresolution'                 => "Sayaqpa ch'irkukun",
'exif-resolutionunit'              => "X, Y ch'irkukup tupun",
'exif-stripoffsets'                => 'Rikcha willa churamuy',
'exif-rowsperstrip'                => "Sinrukuna ch'imiman",
'exif-stripbytecounts'             => "Bytekuna mat'isqa ch'imiman",
'exif-jpeginterchangeformat'       => 'Ithiy JPEG SOI nisqaman',
'exif-jpeginterchangeformatlength' => 'JPEG willa bytekuna',
'exif-transferfunction'            => 'Wantuna rurana',
'exif-whitepoint'                  => 'Yuraq iñupi ñawra kay',
'exif-primarychromaticities'       => 'Qallarina ñawra kaykuna',
'exif-ycbcrcoefficients'           => "Llimphi suyu tukuchina mamap q'iminanchankuna",
'exif-referenceblackwhite'         => 'Yuraq yana chani yurichikunapaq',
'exif-datetime'                    => "Willañiqi hukchay p'unchaw, pacha",
'exif-imagedescription'            => "Rikchap sut'ichaynin",
'exif-make'                        => "Rikcha hap'inap ruraqnin",
'exif-model'                       => "Rikcha hap'ina kayma",
'exif-software'                    => "Llamk'achisqa llamp'u kaq",
'exif-artist'                      => 'Ruraq',
'exif-copyright'                   => "Ruraqpa hayñinkunata hap'iq",
'exif-exifversion'                 => "Exif rikch'ay",
'exif-flashpixversion'             => "Saqillasqa Flashpix rikch'ay",
'exif-colorspace'                  => 'Llimphi suyu',
'exif-componentsconfiguration'     => "Sapa ñawpariqninpa sut'in",
'exif-compressedbitsperpixel'      => "Rikchap mat'isqa kaynin laya",
'exif-pixelydimension'             => 'Rikchap chaniyuq suni kaynin',
'exif-pixelxdimension'             => 'Rikchap chaniyuq hanaq kaynin',
'exif-makernote'                   => 'Ruraqpa willasqankuna',
'exif-usercomment'                 => "Llamk'achiqpa willayninkuna",
'exif-relatedsoundfile'            => 'Ninachiq ruqyay willañiqi',
'exif-datetimeoriginal'            => "Willakunap kamaynin p'unchaw, pacha",
'exif-datetimedigitized'           => "Antañiqichay p'unchaw, pacha",
'exif-subsectime'                  => "P'unchaw, pacha (sikundup rakinkunapas)",
'exif-subsectimeoriginal'          => "Willakunap kamaynin p'unchaw, pacha (sikundup rakinkunapas)",
'exif-subsectimedigitized'         => "Antañiqichay p'unchaw, pacha (sikundup rakinkunapas)",
'exif-exposuretime'                => 'Churapay pacha',
'exif-exposuretime-format'         => '$1 sikundu ($2)',
'exif-fnumber'                     => 'F huchha',
'exif-exposureprogram'             => 'Churapana wakichi',
'exif-spectralsensitivity'         => 'Ispiktru musyaykuy',
'exif-isospeedratings'             => 'ISO utqay chayninchay',
'exif-oecf'                        => "Achkiy antañiqichana t'ikrana mink'aqi",
'exif-shutterspeedvalue'           => "Wichq'aqpa utqaynin",
'exif-aperturevalue'               => "Illa k'ichkina",
'exif-brightnessvalue'             => "K'anchay",
'exif-exposurebiasvalue'           => 'Churapay pantapayay',
'exif-maxaperturevalue'            => "Illa k'ichkinap lliwmanta aswan chanin",
'exif-subjectdistance'             => 'Rikchachasqamanta karu kaynin',
'exif-meteringmode'                => 'Tupuy laya',
'exif-lightsource'                 => "K'anchay pukyu",
'exif-flash'                       => 'Illapu',
'exif-focallength'                 => 'Lintip rawray karu kaynin',
'exif-subjectarea'                 => 'Rikchachasqap hawan',
'exif-flashenergy'                 => 'Illapup michan',
'exif-spatialfrequencyresponse'    => 'Ispasyal kutinchiqllap kutichiynin',
'exif-focalplanexresolution'       => "Rawray p'alltap X ch'irkukun",
'exif-focalplaneyresolution'       => "Rawray p'alltap Y ch'irkukun",
'exif-focalplaneresolutionunit'    => "Rawray p'alltap ch'irkuku tupun",
'exif-subjectlocation'             => 'Rikchachasqap tiyachiynin',
'exif-exposureindex'               => 'Churapay rikuchiq',
'exif-sensingmethod'               => 'Musyachiq laya',
'exif-filesource'                  => 'Willañiqip pukyun',
'exif-scenetype'                   => 'Rikuypacha laya',
'exif-cfapattern'                  => 'CFA qatinalla',
'exif-customrendered'              => "Rikcha llamk'apuyta sapaqchay",
'exif-exposuremode'                => 'Churapay laya',
'exif-whitebalance'                => 'Yuraq paqtaku',
'exif-digitalzoomratio'            => 'Iliktruniku sichpachinap (zoom nisqap) achuraynin',
'exif-focallengthin35mmfilm'       => '35 mm pilikulapi rawray karu kay',
'exif-scenecapturetype'            => "Rikuypacha hap'iy laya",
'exif-gaincontrol'                 => 'Rikuypacha llanchiy',
'exif-contrast'                    => 'Achki hayu',
'exif-saturation'                  => 'Sasay',
'exif-sharpness'                   => "K'awchi kay",
'exif-devicesettingdescription'    => "Llamk'ana allinkachinamanta t'iktuqay",
'exif-subjectdistancerange'        => 'Rikchachasqap karu kay patayaykun',
'exif-imageuniqueid'               => "Rikchap ch'ulla ID-nin",
'exif-gpsversionid'                => 'GPS sanancha musuqchasqa',
'exif-gpslatituderef'              => 'Chincha icha uralan hanaq',
'exif-gpslatitude'                 => 'Tinkurachina hanaq',
'exif-gpslongituderef'             => 'Anti icha kunti suni',
'exif-gpslongitude'                => 'Tinkurachina suni',
'exif-gpsaltituderef'              => 'Hanaq kaypa ninakuynin',
'exif-gpsaltitude'                 => 'Hanaq kay',
'exif-gpstimestamp'                => 'GPS pacha (iñuku tupuna)',
'exif-gpssatellites'               => "Tupunapaq llamk'achisqa satilitikuna",
'exif-gpsstatus'                   => 'Musyachiqpa kachkaynin',
'exif-gpsmeasuremode'              => 'Tupuy laya',
'exif-gpsdop'                      => "Tupuypa t'urpu kaynin",
'exif-gpsspeedref'                 => 'Utqay tupu',
'exif-gpsspeed'                    => 'GPS musyachiqpa utqaynin',
'exif-gpstrackref'                 => 'Kuyuypa mayman puririyninpaq ninakuy',
'exif-gpstrack'                    => 'Kuyuypa mayman puririynin',
'exif-gpsimgdirectionref'          => 'Rikchap puririyninpaq ninakuy',
'exif-gpsimgdirection'             => 'Rikchap puririynin',
'exif-gpsmapdatum'                 => "Allpa tupuy willakunaqa llamk'achisqam",
'exif-gpsdestlatituderef'          => 'Taripana tinkurachina hanaqpaq ninakuy',
'exif-gpsdestlatitude'             => 'Taripana tinkurachina hanaq',
'exif-gpsdestlongituderef'         => 'Taripana tinkurachina sunipaq ninakuy',
'exif-gpsdestlongitude'            => 'Taripana tinkurachina suni',
'exif-gpsdestbearingref'           => 'Taripanaman puririypaq ninakuy',
'exif-gpsdestbearing'              => 'Taripanaman puririy',
'exif-gpsdestdistanceref'          => 'Taripanaman karu kaypaq ninakuy',
'exif-gpsdestdistance'             => 'Taripanaman karu kay',
'exif-gpsprocessingmethod'         => "GPS llamk'apuna laya suti",
'exif-gpsareainformation'          => 'GPS suyu suti',
'exif-gpsdatestamp'                => "GPS p'unchaw",
'exif-gpsdifferential'             => 'GPS karuncha allinchay',
'exif-objectname'                  => 'Uchuy suti',

# EXIF attributes
'exif-compression-1' => "Mana mat'isqa",

'exif-unknowndate' => "Mana riqsisqa p'unchaw",

'exif-orientation-1' => 'Sapsi',
'exif-orientation-2' => "Siriqlla t'ikrasqa",
'exif-orientation-3' => '180° muyusqa',
'exif-orientation-4' => "Sayaqlla t'ikrasqa",
'exif-orientation-5' => "90° pacha tupunaman hayu muyusqa, sayaqlla t'ikrasqa",
'exif-orientation-6' => '90° pacha tupunawan muyusqa',
'exif-orientation-7' => "90° pacha tupunawan muyusqa, sayaqlla t'ikrasqa",
'exif-orientation-8' => '90° pacha tupunaman hayu muyusqa',

'exif-planarconfiguration-1' => 'muyuqhawa chanta',
'exif-planarconfiguration-2' => "p'allta chanta",

'exif-componentsconfiguration-0' => 'manam kachkanchu',

'exif-exposureprogram-0' => "Mana ch'uyanchasqa",
'exif-exposureprogram-1' => 'Qillqarima',
'exif-exposureprogram-2' => 'Sapsi wakichi',
'exif-exposureprogram-3' => "Illa k'ichkina hawmay",
'exif-exposureprogram-4' => "Wichq'aq hawmay",
'exif-exposureprogram-5' => "Kamariqlla wakichi (k'itip suni kayninman hawmay)",
'exif-exposureprogram-6' => "Ruraykuna wakichi (utqaq wichq'aqman hawmay)",
'exif-exposureprogram-7' => "Runa uya rikcha (sichpasqa rikchachasqa, qhipaqkunataq manam k'awchichu)",
'exif-exposureprogram-8' => 'Muyuqhawa rikcha (rikchachasqa qhipaqkuna)',

'exif-subjectdistance-value' => '$1 mitru',

'exif-meteringmode-0'   => 'Mana riqsisqa',
'exif-meteringmode-1'   => 'Kuskanchaku',
'exif-meteringmode-2'   => 'Chawpichasqa kuskanchaku',
'exif-meteringmode-3'   => "T'upsilla",
'exif-meteringmode-4'   => "Achka t'upsi",
'exif-meteringmode-5'   => 'Qatinalla',
'exif-meteringmode-6'   => 'Rakilla',
'exif-meteringmode-255' => 'Wakin',

'exif-lightsource-0'   => 'Mana riqsisqa',
'exif-lightsource-1'   => "P'unchaw achkiy",
'exif-lightsource-2'   => "Wapsi pila k'anchana",
'exif-lightsource-3'   => "Wolframyu (pinchikilla k'anchanapi illanchaq tiwli)",
'exif-lightsource-4'   => 'Illapu',
'exif-lightsource-9'   => "Usyay mit'a",
'exif-lightsource-10'  => "Phuyusapa mit'a",
'exif-lightsource-11'  => 'Llanthu',
'exif-lightsource-12'  => "P'unchaw wapsi pila k'anchana (D 5700 – 7100K)",
'exif-lightsource-13'  => "P'unchaw yuraq wapsi pila k'anchana (N 4600 – 5400K)",
'exif-lightsource-14'  => "Chiri yuraq pila k'anchana (W 3900 – 4500K)",
'exif-lightsource-15'  => "Yuraq pila k'anchana (WW 3200 – 3700K)",
'exif-lightsource-17'  => "Sapsi k'anchana A",
'exif-lightsource-18'  => "Sapsi k'anchana B",
'exif-lightsource-19'  => "Sapsi k'anchana C",
'exif-lightsource-24'  => 'ISO istudyu wolframyu',
'exif-lightsource-255' => "Huk k'anchay pukyu",

# Flash modes
'exif-flash-fired-0'    => 'Manam pinchi illaparqanchu',
'exif-flash-fired-1'    => 'Pinchi illaparqanmi',
'exif-flash-return-0'   => 'llukchipayay musyanaqa ama kachunchu',
'exif-flash-return-2'   => "llukchipayay k'anchanaqa manam tarisqachu",
'exif-flash-return-3'   => "llukchipayay k'anchanaqa tarisqam",
'exif-flash-mode-1'     => 'pinchi illapanam atin',
'exif-flash-mode-2'     => 'pinchi illapana manam kachunchu',
'exif-flash-mode-3'     => 'kikinmanta',
'exif-flash-function-1' => 'Manam pinchi illapanachu',
'exif-flash-redeye-1'   => 'puka ñawi pakana',

'exif-focalplaneresolutionunit-2' => 'inch',

'exif-sensingmethod-1' => "Mana ch'uyanchasqa",
'exif-sensingmethod-2' => "Ch'ulla antañiqiq chhillpa llimphi suyu musyachiq",
'exif-sensingmethod-3' => 'Iskay antañiqiq chhillpa llimphi suyu musyachiq',
'exif-sensingmethod-4' => 'Kimsa antañiqiq chhillpa llimphi suyu musyachiq',
'exif-sensingmethod-5' => 'Qatiqlla llimphi suyu musyachiq',
'exif-sensingmethod-7' => "Kimsantin siq'i musyachiq",
'exif-sensingmethod-8' => "Qatiqlla siq'i llimphi musyachiq",

'exif-scenetype-1' => "Chiqalla hap'isqa rikcha",

'exif-customrendered-0' => 'Sapsi ruraykuy',
'exif-customrendered-1' => 'Sapaqchasqa ruraykuy',

'exif-exposuremode-0' => 'Kikinmanta churapay',
'exif-exposuremode-1' => 'Makiwan churapay',
'exif-exposuremode-2' => 'Kikinmanta qinchaq',

'exif-whitebalance-0' => 'Kikinmanta yuraq paqtanaku',
'exif-whitebalance-1' => 'Makiwan yuraq paqtanaku',

'exif-scenecapturetype-0' => 'Hukyachisqa',
'exif-scenecapturetype-1' => 'Rikuypacha',
'exif-scenecapturetype-2' => 'Runa uya rikcha',
'exif-scenecapturetype-3' => 'Tuta rikcha',

'exif-gaincontrol-0' => 'Mana imapas',
'exif-gaincontrol-1' => 'Aslla chaskiy miray',
'exif-gaincontrol-2' => 'Achka chaskiy miray',
'exif-gaincontrol-3' => 'Aslla chaskiy pisiyay',
'exif-gaincontrol-4' => 'Achka chaskiy pisiyay',

'exif-contrast-0' => 'Sapsi',
'exif-contrast-1' => "Llamp'u",
'exif-contrast-2' => 'Sinchi',

'exif-saturation-0' => 'Sapsi',
'exif-saturation-1' => 'Aslla sasay',
'exif-saturation-2' => 'Achka sasay',

'exif-sharpness-0' => 'Sapsi',
'exif-sharpness-1' => "Llamp'u",
'exif-sharpness-2' => 'Sinchi',

'exif-subjectdistancerange-0' => 'Mana riqsisqa',
'exif-subjectdistancerange-1' => 'Hatun',
'exif-subjectdistancerange-2' => 'Sichpalla rikuy',
'exif-subjectdistancerange-3' => 'Karulla rikuy',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Chincha hanaq',
'exif-gpslatitude-s' => 'Uralan hanaq',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Anti suni',
'exif-gpslongitude-w' => 'Kunti suni',

'exif-gpsstatus-a' => 'Tupuchkaspa',
'exif-gpsstatus-v' => 'Tupuy ruranakunalla kay',

'exif-gpsmeasuremode-2' => 'Iskaynintin chhikanyachiy tupuy',
'exif-gpsmeasuremode-3' => 'Kimsantin chhikanyachiy tupuy',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilumitru uraman',
'exif-gpsspeed-m' => 'Milla uraman',
'exif-gpsspeed-n' => 'Muqukuna',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Chiqap puririy',
'exif-gpsdirection-m' => 'Maqnitiku puririy',

# External editor support
'edit-externally'      => "Kay willañiqita hawa rurana wakichiwan llamk'apuy",
'edit-externally-help' => 'Astawan willasunaykipaqqa [http://www.mediawiki.org/wiki/Manual:External_editors tiyachina yanapata] (inlish simipi) ñawiriy.',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'tukuy',
'imagelistall'     => 'tukuy',
'watchlistall2'    => 'lliw',
'namespacesall'    => 'tukuy',
'monthsall'        => '(tukuy)',
'limitall'         => 'tukuy',

# E-mail address confirmation
'confirmemail'              => 'E-chaski imamaytaykita takyachiy',
'confirmemail_noemail'      => 'Manaraq [[Special:Preferences|allinkachinaykikunapi]] chaniyuq e-chaski imamaytayki kachkanchu.',
'confirmemail_text'         => "{{SITENAME}}piqa e-chaski imamaytaykita takyachinaykim tiyan e-chaskita llamk'achinaykipaq. Urapi butunta ñit'ipay e-chaski imamaytaykiman takyachina chaskita kachamunaykupaq.
Chay takyachina chaskiqa tuyru t'inkiyuqmi kanqa. Chay tuyru t'inkita qatiy e-chaski imamaytaykip chaniyuq kayninta takyachinaykipaq.",
'confirmemail_pending'      => 'Takyachina tuyruqa e-chaski imamaytaykiman kachasqañam; rakiqunaykita ñaqha kichariptiykiqa, huk minutukunata suyanaykichá chayamusunaykipaq, manaraq musuq tuyruta mañakuspayki.',
'confirmemail_send'         => 'Takyachina tuyruta kachamuway',
'confirmemail_sent'         => 'Takyachina chaskiqa kachasqañam.',
'confirmemail_oncreate'     => "Takyachina chaskiqa e-chaski imamaytaykiman kachamusqam. Yaykunaykipaqqa qatinayki manam tiyanchu, ichataq kay wikipi e-chaski ruranakunata llamk'achinaykipaq tiyanmi.",
'confirmemail_sendfailed'   => '{{SITENAME}} manam atinchu takyachina e-chaskita kachayta. Ama hina kaspa, imamaytaykita mana saqillasqa sananchakunakama llanchiy.

Kutichisqa chaski: $1',
'confirmemail_invalid'      => "Takyachina tuyruqa manam allinchu, mawk'ayasqañachá.",
'confirmemail_needlogin'    => '$1-llawanmi e-chaski imamaytaykita takyachiyta atinki.',
'confirmemail_success'      => 'E-chaski imamaytaykiqa takyachisqañam.
Kunanqa wikiman [[Special:UserLogin|yaykamuspayki]] ayniytam atinki.',
'confirmemail_loggedin'     => 'E-chaski imamaytaykiqa takyachisqañam.',
'confirmemail_error'        => 'Ima pantasqapas tukurqan takyachinaykita waqaychaypi.',
'confirmemail_subject'      => '{{SITENAME}} e-chaski imamayta takyachina',
'confirmemail_body'         => 'Pipas (qamchiki, $1 IP huchhayuq tiyaymanta) kicharirqan {{SITENAME}}paq "$2" sutiyuq rakiqunatam, kay e-chaski imamaytayuq.

Kay rakiquna chiqapta qamman kapuptinqa, kay t\'inkita qatiy {{SITENAME}}pi e-chaski ruranaykita takyachinaykipaq:

$3

Rakiquna *mana* qamman kapuptinqa, kay t\'inkita qatiy takyachinaman ama ninaykipaq:

$5

Kay takyachina tuyruqa $4 pachapim puchukanqa.',
'confirmemail_body_changed' => 'Pipas (qamchiki, $1 IP huchhayuq tiyaymanta) hukcharqan {{SITENAME}}pi "$2" sutiyuq rakiqunapaq e-chaski imamaytatam kay imamaytaman.

Kay rakiquna chiqapta qamman kapuptinqa, kay t\'inkita qatiy {{SITENAME}}pi e-chaski ruranaykita musuqmanta takyachinaykipaq:

$3

Rakiquna *mana* qamman kapuptinqa, kay t\'inkita qatiy takyachinaman ama ninaykipaq:

$5

Kay takyachina tuyruqa $4 pachapim puchukanqa.',
'confirmemail_body_set'     => 'Pipas, qamchiki, $1 IP huchhayuq tiyaymanta,
hukcharqan {{SITENAME}}pi "$2" sutiyuq rakiqunapaq e-chaski imamaytatam kay imamaytaman.

Kay rakiquna chiqapta qamman kapuptinqa, kay t\'inkita qatiy {{SITENAME}}pi e-chaski ruranaykita musuqmanta takyachinaykipaq:

$3

Rakiquna *mana* qamman kapuptinqa, kay t\'inkita qatiy takyachinaman ama ninaykipaq:

$5

Kay takyachina tuyruqa $4 pachapim puchukanqa.',
'confirmemail_invalidated'  => 'E-chaski imamayta takyachinaman ama nisqam',
'invalidateemail'           => 'E-chaski takyachinaman ama niy',

# Scary transclusion
'scarytranscludedisabled' => "[Interwiki ch'aqtayman ama nisqa]",
'scarytranscludefailed'   => '[$1-paq plantillataqa manam chaskiyta atinchu]',
'scarytranscludetoolong'  => '[URL tiyayqa nisyu hatunmi]',

# Trackbacks
'trackbackbox'      => "Ñawpaqman qatipay (Trackback) nisqakuna kay p'anqapaq:<br />
$1",
'trackbackremove'   => '([$1 Qulluy])',
'trackbacklink'     => 'Ñawpaqman qatipay (Trackback)',
'trackbackdeleteok' => 'Ñawpaqman qatipay (Trackback) nisqaqa qullusqañam.',

# Delete conflict
'deletedwhileediting' => "'''Paqtataq''': Kay p'anqataqa qullurqankum qam llamk'apuyta qallarirqaptiyki.",
'confirmrecreate'     => "Qam kay p'anqata llamk'apuyta qallarirqaptiyki, [[User:$1|$1]] sutiyuq ruraqmi ([[User talk:$1|rimanakuy]]) qullurqan, kayraykum nispa:
: ''$2''
Ama hina kaspa, chiqapta kay p'anqatam musuqmanta kamayta munani nispa takyachiy.",
'recreate'            => 'Musuqta paqarichiy',

# action=purge
'confirm_purge_button' => 'Arí niy',
'confirm-purge-top'    => "Kay p'anqap ''cache'' nisqa pakasqa hallch'an ch'usaqchasqa kachunchu?",
'confirm-purge-bottom' => "P'anqa pichayqa pakasqa hallch'atam ch'usaqchan, qayna musuqchasqatataqmi rikch'achin.",

# Multipage image navigation
'imgmultipageprev' => "← ñawpaq p'anqa",
'imgmultipagenext' => "qatiq p'anqa →",
'imgmultigo'       => 'Riy!',
'imgmultigoto'     => "$1 sutiyuq p'anqaman riy",

# Table pager
'ascending_abbrev'         => 'wich',
'descending_abbrev'        => 'uray',
'table_pager_next'         => "Qatiq p'anqa",
'table_pager_prev'         => "Ñawpaq p'anqa",
'table_pager_first'        => "Ñawpaq ñiqin p'anqa",
'table_pager_last'         => "Qhipaq ñiqin p'anqa",
'table_pager_limit'        => "$1 kaqkunata p'anqaman rikuchiy",
'table_pager_limit_label'  => "Huk p'anqapi hayk'a qallawakuna:",
'table_pager_limit_submit' => 'Riy',
'table_pager_empty'        => 'Manam ima taripasqapas kanchu',

# Auto-summaries
'autosumm-blank'   => "P'anqata ch'usaqchasqa",
'autosumm-replace' => "P'anqap tukuy samiqnin '$1'-wan huknachasqa",
'autoredircomment' => '[[$1]]-man pusapusqa',
'autosumm-new'     => "Musuq p'anqa kamarisqa kaywan: $1",

# Live preview
'livepreview-loading' => 'Chaqnamuspa…',
'livepreview-ready'   => 'Chaqnamuspa… Kamarisqa!',
'livepreview-failed'  => 'Kawsaqlla ñawpaq qhawariyqa manam tukuyta atinchu!
Sapsilla ñawpaq qhawariyta tukuykachay.',
'livepreview-error'   => 'Manam atinichu t\'inkiyta: $1 "$2".
Sapsilla ñawpaq qhawariyta tukuykachay.',

# Friendlier slave lag warnings
'lag-warn-normal' => "Qhipaq $1 {{PLURAL:$1|sikundupi|sikundukunapi}} hukchasqakunaqa manachá rikch'akunqachu kay sutisuyupi.",
'lag-warn-high'   => "Willañiqintin sirwiq nisyuta ruranayuq kachkaptinmi, qhipaq $1 {{PLURAL:$1|sikundupi|sikundukunapi}} hukchasqakunaqa manachá rikch'akunqachu kay sutisuyupi.",

# Watchlist editor
'watchlistedit-numitems'       => "Watiqana sutisuyuykiqa {{PLURAL:$1|huk p'anqayuqmi|$1 p'anqayuqmi}} kachkan, rimanakuy p'anqakunata mana yupaptinchik.",
'watchlistedit-noitems'        => "Manam ima p'anqatapas watiqachkankichu.",
'watchlistedit-normal-title'   => "Watiqana sutisuyuta llamk'apuy",
'watchlistedit-normal-legend'  => "P'anqa sutikunata watiqana sutisuyumanta qichuy",
'watchlistedit-normal-explain' => "Kay qatiqpiqa watiqana sutisuyuykipi p'anqa sutikunatam rikunki. P'anqa sutita qichunaykipaqqa chay sutip kinrayninpi kaq k'itichata ñit'iywan sananchaspa \"{{int:Watchlistedit-normal-submit}}\" nisqata ñit'iy. [[Special:Watchlist/raw|Chawa watiqana sutisuyuta llamk'apuy]] nisqata ñit'iytapas atinkim.",
'watchlistedit-normal-submit'  => "P'anqa sutikunata qichuy",
'watchlistedit-normal-done'    => '{{PLURAL:$1|1 página ha sido borrada|$1 páginas han sido borradas}} de tu lista de seguimiento:',
'watchlistedit-raw-title'      => "Chawa watiqana sutisuyuta llamk'apuy",
'watchlistedit-raw-legend'     => "Chawa watiqana sutisuyuta llamk'apuy",
'watchlistedit-raw-explain'    => "Kay qatiqpiqa watiqana sutisuyuykipi p'anqa sutikunatam rikunki. Sutisuyuta llamk'apuytam atinki sutikunata yapaspa icha qichuspa, huk sutim sapa siq'iman. Tukuspaykiqa, \"{{int:Watchlistedit-raw-submit}}\" nisqata ñit'iy. [[Special:Watchlist/edit|Sapsi llamk'apunaykitapas]] llamk'achiytam atinki.",
'watchlistedit-raw-titles'     => "P'anqakuna:",
'watchlistedit-raw-submit'     => 'Watiqana sutisuyuta musuqchay',
'watchlistedit-raw-done'       => 'Watiqana sutisuyuykiqa musuqchasqañam.',
'watchlistedit-raw-added'      => "{{PLURAL:$1|Huk yapasqa p'anqa suti|$1 yapasqa p'anqa sutikuna}}:",
'watchlistedit-raw-removed'    => "{{PLURAL:$1|Huk qichusqa p'anqa suti|$1 qichusqa p'anqa sutikuna}}:",

# Watchlist editing tools
'watchlisttools-view' => 'Hukchasqakunata qhaway',
'watchlisttools-edit' => "Watiqana sutisuyuta qhawaspa llamk'apuy",
'watchlisttools-raw'  => "Chawa watiqana sutisuyuta llamk'apuy",

# Core parser functions
'unknown_extension_tag' => 'Mana riqsisqa "$1" mast\'arina k\'askana',
'duplicate-defaultsort' => 'Paqtataq: Kikinmanta allinchana llawi «$2» ñawpaq kikinmanta allinchana llawitam «$1» huknachan.',

# Special:Version
'version'                          => 'Musuqchasqa',
'version-extensions'               => "Tiyachisqa mast'arinakuna",
'version-specialpages'             => "Sapaq p'anqakuna",
'version-parserhooks'              => "T'ikrana ch'iwinakuna",
'version-variables'                => 'Hukchakuqkuna',
'version-skins'                    => 'Qarakuna',
'version-other'                    => 'Wakin',
'version-mediahandlers'            => "Midya llamk'apuq",
'version-hooks'                    => "Ch'iwinakuna",
'version-extension-functions'      => "Mast'arina ruranakuna",
'version-parser-extensiontags'     => "T'ikrana mast'arina ruranakuna",
'version-parser-function-hooks'    => "T'ikrana rurana ch'iwinakuna",
'version-skin-extension-functions' => "Qara mast'arina ruranakuna",
'version-hook-name'                => "Ch'iwinap sutin",
'version-hook-subscribedby'        => 'Kay runap mañaykusqan:',
'version-version'                  => '(Musuqchasqa $1)',
'version-license'                  => 'Saqillay',
'version-poweredby-credits'        => "Kay wikitaqa '''[http://www.mediawiki.org/ MediaWiki-m]''' atichin, copyright © 2001-$1 $2.",
'version-poweredby-others'         => 'hukkuna',
'version-license-info'             => "MediaWiki llamp'u kaqqa qispim; mast'ariytam icha wakinchaytam atinki GNU General Public License nisqa saqillaypa kamachisqankama, Free Software Foundation nisqap uyaychasqan; saqillaypa iskay ñiqin musuqchasqan, munaspaykiqa aswan musuq musuqchasqan.

MediaWikitaqa mast'ariyku runakunata yanapanapaqmi, ichataq MANAM FIYAKUYTA ATIYKUCHU; manapas ch'aqtasqa RURANALLA FIYAKUYTACHU manapas ima SAPAQ TUKUYNINPAQCHU. GNU General Public License nisqa saqillayta qhaway aswan yuyaykunapaq.

[{{SERVER}}{{SCRIPTPATH}}/COPYING GNU General Public License nisqa saqillaymanta iskaychasqata] chaskiykiman kay wakichinawan; manaqa, kayman qillqamuwayku: Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA icha [http://www.gnu.org/licenses/old-licenses/gpl-2.0.html internet llikapi ñawiriy].",
'version-software'                 => "Tiyachisqa llamp'u kaq",
'version-software-product'         => 'Ruruchisqa',
'version-software-version'         => 'Musuqchasqa',

# Special:FilePath
'filepath'         => 'Willañiqi ñan',
'filepath-page'    => 'Willañiqi:',
'filepath-submit'  => 'Riy',
'filepath-summary' => "Kay sapaq p'anqaqa willañiqipaq tukuy ñannintam kutichin.
Rikchakunatataq hunt'a ch'irkukupim rikunki. Huk willañiqi llayakunaqa tantapusqa wakichiwanmi chiqalla kicharikun.

Willañiqi sutita yaykuchispaqa ama \"{{ns:file}}:\" ñawpaq k'askaqta qillqamuychu.",

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Iskaychasqa willañiqikunata maskay',
'fileduplicatesearch-summary'  => "Iskaychasqa willañiqikunata maskay ''hash'' chaninpi tiksispa.

Mana “{{ns:file}}:” k'askaqniyuq willañiqip sutinta yaykuchiy.",
'fileduplicatesearch-legend'   => 'Iskaychasqata maskay',
'fileduplicatesearch-filename' => 'Willañiqip sutin:',
'fileduplicatesearch-submit'   => 'Maskay',
'fileduplicatesearch-info'     => '$1 × $2 iñu<br />Willañiqip chhikan kaynin: $3<br />MIME laya: $4',
'fileduplicatesearch-result-1' => '"$1" sutiyuq willañiqiqa manam kaqllalla iskaychasqayuqchu.',
'fileduplicatesearch-result-n' => '"$1" sutiyuq willañiqiqa {{PLURAL:$2|1 kaqllalla iskaychasqayuqmi|$2 kaqllalla iskaychasqakunayuqmi}}.',

# Special:SpecialPages
'specialpages'                   => "Sapaq p'anqakuna",
'specialpages-note'              => '----
* Sapsipaq sapaq p\'anqakuna.
* <strong class="mw-specialpagerestricted">Sapaqkunallapaq sapaq p\'anqakuna.</strong>',
'specialpages-group-maintenance' => 'Hatalliy willaykuna',
'specialpages-group-other'       => "Huk sapaq p'anqakuna",
'specialpages-group-login'       => 'Yaykuy / rakiqunata kichariy',
'specialpages-group-changes'     => "Ñaqha hukchasqa hallch'asqapas",
'specialpages-group-media'       => 'Midya willaykuna churkuykunapas',
'specialpages-group-users'       => 'Ruraqkuna hayñinkunapas',
'specialpages-group-highuse'     => "Achka kuti llamk'achisqa p'anqakuna",
'specialpages-group-pages'       => "P'anqa sutisuyukuna",
'specialpages-group-pagetools'   => "P'anqa llamk'anakuna",
'specialpages-group-wiki'        => "Wiki willakuna llamk'anakunapas",
'specialpages-group-redirects'   => "Pusapunapaq sapaq p'anqakuna",
'specialpages-group-spam'        => "Spam nisqa millay rurayta hark'anapaq llamk'anakuna",

# Special:BlankPage
'blankpage'              => "Ch'usaq p'anqa",
'intentionallyblankpage' => "Kay p'anqaqa munaylla ch'usaqmi kachun",

# External image whitelist
'external_image_whitelist' => "  #Kay sinruta kay hinallatam saqiy<pre>
#Ñiqilla hawanchana rakikunata churay (// nisqapura rakitam) urapi
#Kaykunaqa hawa (q'uñilla t'inkisqa) rikchakunap URL tiyayninkunawanmi taripanachisqa kanqa
#Taripasqakunaqa rikcha hinam rikurinqa, hukkunapaqtaq rikchaman t'inkillam rikurinqa
#«#» nisqawan qallariq sinrukunaqa willapuy hinam llamk'apusqa kanqa
#Kayqa manam musyanchu uchuy icha hatun sanancha kayta

#Tukuy regex rakikunata kay siq'ip hananman churay. Kay sinruta kay hinallatam saqiy</pre>",

# Special:Tags
'tags'                    => 'Waliq unancha hukchay',
'tag-filter'              => '[[Special:Tags|Unancha]] suysuna:',
'tag-filter-submit'       => 'Suysuna',
'tags-title'              => 'Unanchakuna',
'tags-intro'              => "Kay p'anqapiqa hukchaykunata llamp'u kaqpa sananchananpaq unanchakunatam rikunki, sut'inkunatapas.",
'tags-tag'                => 'Unanchachap sutin',
'tags-display-header'     => "Hukchasqakunamanta sutisuyup rikch'akuynin",
'tags-description-header' => "Sut'inmanta hunt'a ch'uyanchaynin",
'tags-hitcount-header'    => 'Unanchasqa hukchasqakuna',
'tags-edit'               => "llamk'apuy",
'tags-hitcount'           => '$1 {{PLURAL:$1|hukchasqa|hukchasqakuna}}',

# Special:ComparePages
'comparepages'     => "P'anqakunata wakichay",
'compare-selector' => 'Musuqchasqakunata wakichay',
'compare-page1'    => "P'anqa 1",
'compare-page2'    => "P'anqa 2",
'compare-rev1'     => 'Musuqchasqa 1',
'compare-rev2'     => 'Musuqchasqa 2',
'compare-submit'   => 'Wakichay',

# Database error messages
'dberr-header'      => 'Kay wikiqa sasachakuyniyuqmi',
'dberr-problems'    => 'Achachaw! Kay tiyayqa allwiya sasachakuykunayuqmi kachkan.',
'dberr-again'       => 'Ratullata suyaspa musuqmanta chaqnaspa huk kutita ruraykachay.',
'dberr-info'        => '(Manam atinichu willañiqintin sirwiqwan willanakuyta: $1)',
'dberr-usegoogle'   => 'Hinaptinqa Google nisqawan maskayta atinkiman.',
'dberr-outofdate'   => "Musyariy, ñuqaykup samiqniykumanta yuyarisqankunaqa mawk'ayasqañachá.",
'dberr-cachederror' => "Kay qatiqpiqa mañakusqa p'anqamanta hallch'asqa iskaychasqam, mawk'ayasqañachá.",

# HTML forms
'htmlform-invalid-input'       => 'Yaykuchisqaykiwanqa sasachakuykunam kachkan',
'htmlform-select-badoption'    => 'Sapaqchasqayki chaniqa manam allin akllanachu.',
'htmlform-int-invalid'         => "Sapaqchasqayki chaniqa manam hunt'a yupaychu.",
'htmlform-float-invalid'       => 'Qusqayki chaniqa manam yupaychu.',
'htmlform-int-toolow'          => 'Sapaqchasqayki chaniqa pisi saywa kaq $1-manta aswan pisim.',
'htmlform-int-toohigh'         => 'Sapaqchasqayki chaniqa achka saywa kaq $1-manta aswan achkam.',
'htmlform-required'            => 'Kay chaniqa muchusqam',
'htmlform-submit'              => 'Kachay',
'htmlform-reset'               => 'Hukchasqakunata kutichiy',
'htmlform-selectorother-other' => 'Wakin',

# SQLite database support
'sqlite-has-fts' => "$1 hunt'a qillqa maskana yanapawan",
'sqlite-no-fts'  => "$1 mana hunt'a qillqa maskana yanapawan",

# Special:DisableAccount
'disableaccount'             => "Ruraqpa rakiqunanta hark'ay",
'disableaccount-user'        => 'Ruraqpa sutin:',
'disableaccount-reason'      => 'Kayrayku:',
'disableaccount-confirm'     => "Kay ruraqpa sutinta hark'ay.
Ruraqqa manam yaykuyta atinqachu, manam yaykuna rimanta churamuyta atinqachu, manam e-chaski willaykunata chaskiyta atinchu.
Maypipas yaykusqa kaspaqa, tuyllapi qarqusqam kanqa.
''Qhawariy, ruraqpa sutinta hark'aspaykiqa manam t'ikrayta atinkichu llika kamachiq mana yanapachkaptin.''",
'disableaccount-mustconfirm' => "Kay ruraqpa rakiqunanta hark'ayta munaspaykiqa, takyachinaykim tiyan.",
'disableaccount-nosuchuser'  => '"$1" sutiyuq ruraqpa rakiqunanqa manam kanchu.',
'disableaccount-success'     => '"$1" sutiyuq ruraqpa rakiqunanqa wiñaypaq hark\'asqam.',
'disableaccount-logentry'    => "[[$1]] sutiyuq ruraqpa rakiqunanta wiñaypaq hark'an",

);
