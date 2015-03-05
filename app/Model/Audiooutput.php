<?php
App::uses('AppModel', 'Model');
/**
 * Audiooutput Model
 *
 * @property Guisetting $Guisetting
 */
class Audiooutput extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'audiooutput';

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
			'foreignKey' => 'audiooutput_id',
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
