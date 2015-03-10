<?php
App::uses('AppModel', 'Model');
/**
 * CrOverclocking Model
 *
 * @property ConfigRaspberry $ConfigRaspberry
 */
class CrOverclocking extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cr_overclocking';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ConfigRaspberry' => array(
			'className' => 'ConfigRaspberry',
			'foreignKey' => 'cr_overclocking_id',
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
