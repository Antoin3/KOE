<?php
App::uses('AppModel', 'Model');
/**
 * AsEdl Model
 *
 * @property Advancedsetting $Advancedsetting
 */
class AsEdl extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_edl';

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
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_edl_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
