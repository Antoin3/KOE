<?php
App::uses('AppModel', 'Model');
/**
 * Audio Model
 *
 * @property Guisetting $Guisetting
 */
class Audio extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'audio';

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
			'foreignKey' => 'audio_id',
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
