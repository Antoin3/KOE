<?php
App::uses('AppModel', 'Model');
/**
 * GsDebug Model
 *
 * @property Guisetting $Guisetting
 */
class GsDebug extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_debug';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_debug_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
