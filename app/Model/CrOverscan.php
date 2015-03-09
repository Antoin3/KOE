<?php
App::uses('AppModel', 'Model');
/**
 * CrOverscan Model
 *
 * @property ConfigRaspberry $ConfigRaspberry
 */
class CrOverscan extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cr_overscan';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ConfigRaspberry' => array(
			'className' => 'ConfigRaspberry',
			'foreignKey' => 'cr_overscan_id',
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
