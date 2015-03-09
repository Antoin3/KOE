<?php
App::uses('AppModel', 'Model');
/**
 * Adjustfreshrate Model
 *
 * @property AsVideo $AsVideo
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
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'AsVideo' => array(
			'className' => 'AsVideo',
			'foreignKey' => 'adjustfreshrate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
