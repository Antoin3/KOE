<?php
App::uses('AppModel', 'Model');
/**
 * AsNetwork Model
 *
 * @property Advancedsetting $Advancedsetting
 */
class AsNetwork extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_network';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_network_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
