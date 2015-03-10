<?php
App::uses('AppModel', 'Model');
/**
 * GsVideoscreen Model
 *
 * @property Guisetting $Guisetting
 */
class GsVideoscreen extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_videoscreen';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_videoscreen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
