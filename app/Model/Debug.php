<?php
App::uses('AppModel', 'Model');
/**
 * Debug Model
 *
 * @property Guisetting $Guisetting
 */
class Debug extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'debug';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'debug_id',
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
