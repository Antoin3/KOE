<?php
App::uses('Guisetting', 'Model');

/**
 * Guisetting Test Case
 *
 */
class GuisettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guisetting',
		'app.gs_audiocds',
		'app.gs_audiooutput',
		'app.gs_cache',
		'app.gs_cacheaudio',
		'app.gs_cachedvd',
		'app.gs_cacheunknown',
		'app.gs_cachevideo',
		'app.gs_debug',
		'app.gs_disc',
		'app.gs_dvds',
		'app.gs_epg',
		'app.gs_filelists',
		'app.gs_general',
		'app.gs_input',
		'app.gs_karaoke',
		'app.gs_locale',
		'app.gs_lookandfeel',
		'app.gs_masterlock',
		'app.gs_musicfiles',
		'app.gs_musiclibrary',
		'app.gs_musicplayer',
		'app.gs_mymusic',
		'app.playlist_mymusic',
		'app.gs_myvideo',
		'app.playlist_myvideo',
		'app.gs_network',
		'app.gs_pictures',
		'app.gs_powermanagement',
		'app.gs_pvrmanager',
		'app.gs_pvrmenu',
		'app.gs_pvrparental',
		'app.gs_pvrplayback',
		'app.gs_pvrpowermanagement',
		'app.gs_pvrrecord',
		'app.gs_services',
		'app.gs_scrapers',
		'app.gs_screensaver',
		'app.gs_slideshow',
		'app.gs_smb',
		'app.gs_subtitles',
		'app.gs_system',
		'app.gs_videolibrary',
		'app.gs_videoplayer',
		'app.gs_videoscreen',
		'app.gs_weather',
		'app.gs_window',
		'app.gs_skinsettings',
		'app.gs_defaultvideosettings',
		'app.gs_viewstates',
		'app.gs_audio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guisetting = ClassRegistry::init('Guisetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guisetting);

		parent::tearDown();
	}

}
