<?php
App::uses('AppModel', 'Model');
/**
 * Adjustfreshrate Model
 *
 * @property Video $Video
 */
class Adjustfreshrate extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'adjustfreshrate';

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
		'Video' => array(
			'className' => 'Video',
			'foreignKey' => 'video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
