<?php
App::uses('AppModel', 'Model');
/**
 * MsNetwork Model
 *
 * @property Mediasource $Mediasource
 */
class MsNetwork extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ms_network';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Mediasource' => array(
			'className' => 'Mediasource',
			'foreignKey' => 'ms_network_id',
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
