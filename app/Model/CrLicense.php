<?php
App::uses('AppModel', 'Model');
/**
 * CrLicense Model
 *
 * @property ConfigRaspberry $ConfigRaspberry
 */
class CrLicense extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cr_license';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ConfigRaspberry' => array(
			'className' => 'ConfigRaspberry',
			'foreignKey' => 'cr_license_id',
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
