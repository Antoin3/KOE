<?php
App::uses('AppModel', 'Model');
/**
 * Guisetting Model
 *
 * @property GsAudiocds $GsAudiocds
 * @property GsAudiooutput $GsAudiooutput
 * @property GsCache $GsCache
 * @property GsCacheaudio $GsCacheaudio
 * @property GsCachedvd $GsCachedvd
 * @property GsCacheunknown $GsCacheunknown
 * @property GsCachevideo $GsCachevideo
 * @property GsDebug $GsDebug
 * @property GsDisc $GsDisc
 * @property GsDvds $GsDvds
 * @property GsEpg $GsEpg
 * @property GsFilelists $GsFilelists
 * @property GsGeneral $GsGeneral
 * @property GsInput $GsInput
 * @property GsKaraoke $GsKaraoke
 * @property GsLocale $GsLocale
 * @property GsLookandfeel $GsLookandfeel
 * @property GsMasterlock $GsMasterlock
 * @property GsMusicfiles $GsMusicfiles
 * @property GsMusiclibrary $GsMusiclibrary
 * @property GsMusicplayer $GsMusicplayer
 * @property GsMymusic $GsMymusic
 * @property GsMyvideo $GsMyvideo
 * @property GsNetwork $GsNetwork
 * @property GsPictures $GsPictures
 * @property GsPowermanagement $GsPowermanagement
 * @property GsPvrmanager $GsPvrmanager
 * @property GsPvrmenu $GsPvrmenu
 * @property GsPvrparental $GsPvrparental
 * @property GsPvrplayback $GsPvrplayback
 * @property GsPvrpowermanagement $GsPvrpowermanagement
 * @property GsPvrrecord $GsPvrrecord
 * @property GsServices $GsServices
 * @property GsScrapers $GsScrapers
 * @property GsScreensaver $GsScreensaver
 * @property GsSlideshow $GsSlideshow
 * @property GsSmb $GsSmb
 * @property GsSubtitles $GsSubtitles
 * @property GsSystem $GsSystem
 * @property GsVideolibrary $GsVideolibrary
 * @property GsVideoplayer $GsVideoplayer
 * @property GsVideoscreen $GsVideoscreen
 * @property GsWeather $GsWeather
 * @property GsWindow $GsWindow
 * @property GsSkinsettings $GsSkinsettings
 * @property GsDefaultvideosettings $GsDefaultvideosettings
 * @property GsViewstates $GsViewstates
 * @property GsAudio $GsAudio
 */
class Guisetting extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'GsAudiocds' => array(
			'className' => 'GsAudiocds',
			'foreignKey' => 'gs_audiocds_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsAudiooutput' => array(
			'className' => 'GsAudiooutput',
			'foreignKey' => 'gs_audiooutput_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsCache' => array(
			'className' => 'GsCache',
			'foreignKey' => 'gs_cache_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsCacheaudio' => array(
			'className' => 'GsCacheaudio',
			'foreignKey' => 'gs_cacheaudio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsCachedvd' => array(
			'className' => 'GsCachedvd',
			'foreignKey' => 'gs_cachedvd_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsCacheunknown' => array(
			'className' => 'GsCacheunknown',
			'foreignKey' => 'gs_cacheunknown_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsCachevideo' => array(
			'className' => 'GsCachevideo',
			'foreignKey' => 'gs_cachevideo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsDebug' => array(
			'className' => 'GsDebug',
			'foreignKey' => 'gs_debug_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsDisc' => array(
			'className' => 'GsDisc',
			'foreignKey' => 'gs_disc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsDvds' => array(
			'className' => 'GsDvds',
			'foreignKey' => 'gs_dvds_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsEpg' => array(
			'className' => 'GsEpg',
			'foreignKey' => 'gs_epg_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsFilelists' => array(
			'className' => 'GsFilelists',
			'foreignKey' => 'gs_filelists_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsGeneral' => array(
			'className' => 'GsGeneral',
			'foreignKey' => 'gs_general_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsInput' => array(
			'className' => 'GsInput',
			'foreignKey' => 'gs_input_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsKaraoke' => array(
			'className' => 'GsKaraoke',
			'foreignKey' => 'gs_karaoke_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsLocale' => array(
			'className' => 'GsLocale',
			'foreignKey' => 'gs_locale_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsLookandfeel' => array(
			'className' => 'GsLookandfeel',
			'foreignKey' => 'gs_lookandfeel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsMasterlock' => array(
			'className' => 'GsMasterlock',
			'foreignKey' => 'gs_masterlock_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsMusicfiles' => array(
			'className' => 'GsMusicfiles',
			'foreignKey' => 'gs_musicfiles_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsMusiclibrary' => array(
			'className' => 'GsMusiclibrary',
			'foreignKey' => 'gs_musiclibrary_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsMusicplayer' => array(
			'className' => 'GsMusicplayer',
			'foreignKey' => 'gs_musicplayer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsMymusic' => array(
			'className' => 'GsMymusic',
			'foreignKey' => 'gs_mymusic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsMyvideo' => array(
			'className' => 'GsMyvideo',
			'foreignKey' => 'gs_myvideo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsNetwork' => array(
			'className' => 'GsNetwork',
			'foreignKey' => 'gs_network_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPictures' => array(
			'className' => 'GsPictures',
			'foreignKey' => 'gs_pictures_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPowermanagement' => array(
			'className' => 'GsPowermanagement',
			'foreignKey' => 'gs_powermanagement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPvrmanager' => array(
			'className' => 'GsPvrmanager',
			'foreignKey' => 'gs_pvrmanager_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPvrmenu' => array(
			'className' => 'GsPvrmenu',
			'foreignKey' => 'gs_pvrmenu_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPvrparental' => array(
			'className' => 'GsPvrparental',
			'foreignKey' => 'gs_pvrparental_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPvrplayback' => array(
			'className' => 'GsPvrplayback',
			'foreignKey' => 'gs_pvrplayback_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPvrpowermanagement' => array(
			'className' => 'GsPvrpowermanagement',
			'foreignKey' => 'gs_pvrpowermanagement_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsPvrrecord' => array(
			'className' => 'GsPvrrecord',
			'foreignKey' => 'gs_pvrrecord_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsServices' => array(
			'className' => 'GsServices',
			'foreignKey' => 'gs_services_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsScrapers' => array(
			'className' => 'GsScrapers',
			'foreignKey' => 'gs_scrapers_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsScreensaver' => array(
			'className' => 'GsScreensaver',
			'foreignKey' => 'gs_screensaver_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsSlideshow' => array(
			'className' => 'GsSlideshow',
			'foreignKey' => 'gs_slideshow_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsSmb' => array(
			'className' => 'GsSmb',
			'foreignKey' => 'gs_smb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsSubtitles' => array(
			'className' => 'GsSubtitles',
			'foreignKey' => 'gs_subtitles_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsSystem' => array(
			'className' => 'GsSystem',
			'foreignKey' => 'gs_system_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsVideolibrary' => array(
			'className' => 'GsVideolibrary',
			'foreignKey' => 'gs_videolibrary_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsVideoplayer' => array(
			'className' => 'GsVideoplayer',
			'foreignKey' => 'gs_videoplayer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsVideoscreen' => array(
			'className' => 'GsVideoscreen',
			'foreignKey' => 'gs_videoscreen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsWeather' => array(
			'className' => 'GsWeather',
			'foreignKey' => 'gs_weather_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsWindow' => array(
			'className' => 'GsWindow',
			'foreignKey' => 'gs_window_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsSkinsettings' => array(
			'className' => 'GsSkinsettings',
			'foreignKey' => 'gs_skinsettings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsDefaultvideosettings' => array(
			'className' => 'GsDefaultvideosettings',
			'foreignKey' => 'gs_defaultvideosettings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsViewstates' => array(
			'className' => 'GsViewstates',
			'foreignKey' => 'gs_viewstates_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GsAudio' => array(
			'className' => 'GsAudio',
			'foreignKey' => 'gs_audio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
