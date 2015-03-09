<?php
App::uses('AppModel', 'Model');
/**
 * Advancedsetting Model
 *
 * @property AsJsonrpc $AsJsonrpc
 * @property AsVideo $AsVideo
 * @property AsAudio $AsAudio
 * @property AsMusicdatabase $AsMusicdatabase
 * @property AsEdl $AsEdl
 * @property AsPvr $AsPvr
 * @property AsEpg $AsEpg
 * @property AsVideolibrary $AsVideolibrary
 * @property AsVideoscanner $AsVideoscanner
 * @property AsVideoextensions $AsVideoextensions
 * @property AsMusicextensions $AsMusicextensions
 * @property AsTvshowsmatching $AsTvshowsmatching
 * @property AsDiscstubextensions $AsDiscstubextensions
 * @property AsMusicfilenamefilters $AsMusicfilenamefilters
 * @property AsFanart $AsFanart
 * @property AsLanguagecodes $AsLanguagecodes
 * @property AsMusicthumbs $AsMusicthumbs
 * @property AsSorttokens $AsSorttokens
 * @property AsVideodatabase $AsVideodatabase
 * @property AsMoviestaking $AsMoviestaking
 * @property AsMyth $AsMyth
 * @property AsMusiclibrary $AsMusiclibrary
 * @property AsKaraoke $AsKaraoke
 * @property AsPictureextensions $AsPictureextensions
 * @property AsPictureexcludes $AsPictureexcludes
 * @property AsSlideshow $AsSlideshow
 * @property AsSamba $AsSamba
 * @property AsHosts $AsHosts
 * @property AsNetwork $AsNetwork
 * @property AsTuxbox $AsTuxbox
 * @property AsPathsubstitution $AsPathsubstitution
 * @property AsWindow $AsWindow
 * @property AsGui $AsGui
 */
class Advancedsetting extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AsJsonrpc' => array(
			'className' => 'AsJsonrpc',
			'foreignKey' => 'as_jsonrpc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsVideo' => array(
			'className' => 'AsVideo',
			'foreignKey' => 'as_video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsAudio' => array(
			'className' => 'AsAudio',
			'foreignKey' => 'as_audio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsMusicdatabase' => array(
			'className' => 'AsMusicdatabase',
			'foreignKey' => 'as_musicdatabase_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsEdl' => array(
			'className' => 'AsEdl',
			'foreignKey' => 'as_edl_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsPvr' => array(
			'className' => 'AsPvr',
			'foreignKey' => 'as_pvr_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsEpg' => array(
			'className' => 'AsEpg',
			'foreignKey' => 'as_epg_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsVideolibrary' => array(
			'className' => 'AsVideolibrary',
			'foreignKey' => 'as_videolibrary_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsVideoscanner' => array(
			'className' => 'AsVideoscanner',
			'foreignKey' => 'as_videoscanner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsVideoextensions' => array(
			'className' => 'AsVideoextensions',
			'foreignKey' => 'as_videoextensions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsMusicextensions' => array(
			'className' => 'AsMusicextensions',
			'foreignKey' => 'as_musicextensions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsTvshowsmatching' => array(
			'className' => 'AsTvshowsmatching',
			'foreignKey' => 'as_tvshowsmatching_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsDiscstubextensions' => array(
			'className' => 'AsDiscstubextensions',
			'foreignKey' => 'as_discstubextensions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsMusicfilenamefilters' => array(
			'className' => 'AsMusicfilenamefilters',
			'foreignKey' => 'as_musicfilenamefilters_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsFanart' => array(
			'className' => 'AsFanart',
			'foreignKey' => 'as_fanart_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsLanguagecodes' => array(
			'className' => 'AsLanguagecodes',
			'foreignKey' => 'as_languagecodes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsMusicthumbs' => array(
			'className' => 'AsMusicthumbs',
			'foreignKey' => 'as_musicthumbs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsSorttokens' => array(
			'className' => 'AsSorttokens',
			'foreignKey' => 'as_sorttokens_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsVideodatabase' => array(
			'className' => 'AsVideodatabase',
			'foreignKey' => 'as_videodatabase_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsMoviestaking' => array(
			'className' => 'AsMoviestaking',
			'foreignKey' => 'as_moviestaking_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsMyth' => array(
			'className' => 'AsMyth',
			'foreignKey' => 'as_myth_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsMusiclibrary' => array(
			'className' => 'AsMusiclibrary',
			'foreignKey' => 'as_musiclibrary_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsKaraoke' => array(
			'className' => 'AsKaraoke',
			'foreignKey' => 'as_karaoke_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsPictureextensions' => array(
			'className' => 'AsPictureextensions',
			'foreignKey' => 'as_pictureextensions_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsPictureexcludes' => array(
			'className' => 'AsPictureexcludes',
			'foreignKey' => 'as_pictureexcludes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsSlideshow' => array(
			'className' => 'AsSlideshow',
			'foreignKey' => 'as_slideshow_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsSamba' => array(
			'className' => 'AsSamba',
			'foreignKey' => 'as_samba_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsHosts' => array(
			'className' => 'AsHosts',
			'foreignKey' => 'as_hosts_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsNetwork' => array(
			'className' => 'AsNetwork',
			'foreignKey' => 'as_network_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsTuxbox' => array(
			'className' => 'AsTuxbox',
			'foreignKey' => 'as_tuxbox_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsPathsubstitution' => array(
			'className' => 'AsPathsubstitution',
			'foreignKey' => 'as_pathsubstitution_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsWindow' => array(
			'className' => 'AsWindow',
			'foreignKey' => 'as_window_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AsGui' => array(
			'className' => 'AsGui',
			'foreignKey' => 'as_gui_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
