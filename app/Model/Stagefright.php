<?php
App::uses('AppModel', 'Model');
/**
 * Stagefright Model
 *
 * @property AsVideo $AsVideo
 */
class Stagefright extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'stagefright';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'AsVideo' => array(
			'className' => 'AsVideo',
			'foreignKey' => 'stagefright_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
