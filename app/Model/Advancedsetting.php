<?php
App::uses('AppModel', 'Model');
/**
 * Advancedsetting Model
 *
 * @property Settings $Settings
 * @property SettingsRaspberries $SettingsRaspberries
 */
class Advancedsetting extends AppModel {

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
		'Settings' => array(
			'className' => 'Settings',
			'foreignKey' => 'settings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SettingsRaspberries' => array(
			'className' => 'SettingsRaspberries',
			'foreignKey' => 'settings_Raspberries_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
