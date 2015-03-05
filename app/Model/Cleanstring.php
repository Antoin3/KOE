<?php
App::uses('AppModel', 'Model');
/**
 * Cleanstring Model
 *
 * @property Advancedsettings $Advancedsettings
 */
class Cleanstring extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Advancedsettings' => array(
			'className' => 'Advancedsettings',
			'foreignKey' => 'advancedsettings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
