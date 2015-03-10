<?php
App::uses('AppModel', 'Model');
/**
 * AsMoviestaking Model
 *
 * @property Advancedsetting $Advancedsetting
 */
class AsMoviestaking extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_moviestaking';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_moviestaking_id',
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
