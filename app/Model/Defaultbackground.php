<?php
App::uses('AppModel', 'Model');
/**
 * Defaultbackground Model
 *
 * @property AsKaraoke $AsKaraoke
 */
class Defaultbackground extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'defaultbackground';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AsKaraoke' => array(
			'className' => 'AsKaraoke',
			'foreignKey' => 'defaultbackground_id',
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
