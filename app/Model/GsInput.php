<?php
App::uses('AppModel', 'Model');
/**
 * GsInput Model
 *
 * @property Guisetting $Guisetting
 */
class GsInput extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_input';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_input_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
