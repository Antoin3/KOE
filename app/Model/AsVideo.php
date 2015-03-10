<?php
App::uses('AppModel', 'Model');
/**
 * AsVideo Model
 *
 * @property Advancedsetting $Advancedsetting
 * @property Cleanstrings $Cleanstrings
 * @property ExcludefromscanVideo $ExcludefromscanVideo
 * @property ExcludefromlistingVideo $ExcludefromlistingVideo
 * @property ExcludetvshowsfromscanVideo $ExcludetvshowsfromscanVideo
 * @property Adjustfreshrate $Adjustfreshrate
 * @property Trailermatching $Trailermatching
 * @property Latency $Latency
 * @property Stagefright $Stagefright
 */
class AsVideo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_video';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cleanstrings' => array(
			'className' => 'Cleanstrings',
			'foreignKey' => 'cleanstrings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExcludefromscanVideo' => array(
			'className' => 'ExcludefromscanVideo',
			'foreignKey' => 'excludefromscan_video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExcludefromlistingVideo' => array(
			'className' => 'ExcludefromlistingVideo',
			'foreignKey' => 'excludefromlisting_video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExcludetvshowsfromscanVideo' => array(
			'className' => 'ExcludetvshowsfromscanVideo',
			'foreignKey' => 'excludetvshowsfromscan_video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Adjustfreshrate' => array(
			'className' => 'Adjustfreshrate',
			'foreignKey' => 'adjustfreshrate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Trailermatching' => array(
			'className' => 'Trailermatching',
			'foreignKey' => 'trailermatching_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Latency' => array(
			'className' => 'Latency',
			'foreignKey' => 'latency_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Stagefright' => array(
			'className' => 'Stagefright',
			'foreignKey' => 'stagefright_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
