<?php
App::uses('AppModel', 'Model');
/**
 * Cacheaudio Model
 *
 * @property Guisetting $Guisetting
 */
class Cacheaudio extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cacheaudio';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'cacheaudio_id',
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
