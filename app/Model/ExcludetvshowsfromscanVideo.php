<?php
App::uses('AppModel', 'Model');
/**
 * ExcludetvshowsfromscanVideo Model
 *
 * @property AsVideo $AsVideo
 */
class ExcludetvshowsfromscanVideo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'excludetvshowsfromscan_video';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AsVideo' => array(
			'className' => 'AsVideo',
			'foreignKey' => 'excludetvshowsfromscan_video_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
