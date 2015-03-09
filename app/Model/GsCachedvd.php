<?php
App::uses('AppModel', 'Model');
/**
 * GsCachedvd Model
 *
 * @property Guisetting $Guisetting
 */
class GsCachedvd extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_cachedvd';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_cachedvd_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
