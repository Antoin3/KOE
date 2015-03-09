<?php
App::uses('AppModel', 'Model');
/**
 * GsPvrparental Model
 *
 * @property Guisetting $Guisetting
 */
class GsPvrparental extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_pvrparental';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_pvrparental_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
