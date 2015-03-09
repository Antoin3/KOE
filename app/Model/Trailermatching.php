<?php
App::uses('AppModel', 'Model');
/**
 * Trailermatching Model
 *
 * @property AsVideo $AsVideo
 */
class Trailermatching extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'trailermatching';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'AsVideo' => array(
			'className' => 'AsVideo',
			'foreignKey' => 'trailermatching_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
