<?php
App::uses('AppModel', 'Model');
/**
 * GsPvrplayback Model
 *
 * @property Guisetting $Guisetting
 */
class GsPvrplayback extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_pvrplayback';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_pvrplayback_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
