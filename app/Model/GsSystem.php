<?php
App::uses('AppModel', 'Model');
/**
 * GsSystem Model
 *
 * @property Guisetting $Guisetting
 */
class GsSystem extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_system';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_system_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
