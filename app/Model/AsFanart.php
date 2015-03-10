<?php
App::uses('AppModel', 'Model');
/**
 * AsFanart Model
 *
 * @property Advancedsetting $Advancedsetting
 */
class AsFanart extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_fanart';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_fanart_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
