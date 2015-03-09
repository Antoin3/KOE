<?php
App::uses('AppModel', 'Model');
/**
 * GsSlideshow Model
 *
 * @property Guisetting $Guisetting
 */
class GsSlideshow extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_slideshow';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_slideshow_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
