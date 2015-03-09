<?php
App::uses('AppModel', 'Model');
/**
 * AsGui Model
 *
 * @property Advancedsetting $Advancedsetting
 */
class AsGui extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_gui';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_gui_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
