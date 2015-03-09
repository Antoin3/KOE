<?php
App::uses('AppModel', 'Model');
/**
 * CrMemory Model
 *
 * @property ConfigRaspberry $ConfigRaspberry
 */
class CrMemory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cr_memory';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ConfigRaspberry' => array(
			'className' => 'ConfigRaspberry',
			'foreignKey' => 'cr_memory_id',
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
