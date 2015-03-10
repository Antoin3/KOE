<?php
App::uses('AppModel', 'Model');
/**
 * GsPvrrecord Model
 *
 * @property Guisetting $Guisetting
 */
class GsPvrrecord extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_pvrrecord';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_pvrrecord_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
