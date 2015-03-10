<?php
App::uses('AppModel', 'Model');
/**
 * ExcludefromlistingVideo Model
 *
 * @property AsVideo $AsVideo
 */
class ExcludefromlistingVideo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'excludefromlisting_video';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AsVideo' => array(
			'className' => 'AsVideo',
			'foreignKey' => 'excludefromlisting_video_id',
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
