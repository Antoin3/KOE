<?php
App::uses('AsFanart', 'Model');

/**
 * AsFanart Test Case
 *
 */
class AsFanartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_fanart',
		'app.advancedsetting',
		'app.as_jsonrpc',
		'app.asvideo',
		'app.as_audio',
		'app.excludefromscan_audio',
		'app.excludefromlisting_audio',
		'app.as_musicdatabase',
		'app.as_edl',
		'app.as_pvr',
		'app.as_epg',
		'app.as_videolibrary',
		'app.as_videoscanner',
		'app.as_videoextensions',
		'app.as_musicextensions',
		'app.as_tvshowsmatching',
		'app.as_discstubextensions',
		'app.as_musicfilenamefilters',
		'app.as_languagecodes',
		'app.as_musicthumbs',
		'app.as_sorttokens',
		'app.as_videodatabase',
		'app.as_moviestaking',
		'app.as_myth',
		'app.as_musiclibrary',
		'app.as_karaoke',
		'app.as_pictureextensions',
		'app.as_pictureexcludes',
		'app.as_slideshow',
		'app.as_samba',
		'app.as_hosts',
		'app.as_network',
		'app.as_tuxbox',
		'app.as_pathsubstitution',
		'app.as_window',
		'app.as_gui'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsFanart = ClassRegistry::init('AsFanart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsFanart);

		parent::tearDown();
	}

}
