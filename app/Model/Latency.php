<?php
App::uses('AppModel', 'Model');
/**
 * Latency Model
 *
 * @property AsVideo $AsVideo
 */
class Latency extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'latency';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'AsVideo' => array(
			'className' => 'AsVideo',
			'foreignKey' => 'latency_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
