<?php
App::uses('AppModel', 'Model');
/**
 * Setting Model
 *
 * @property Raspberries $Raspberries
 * @property Mediasources $Mediasources
 * @property Passwords $Passwords
 * @property ConfigRaspberries $ConfigRaspberries
 * @property Guisettings $Guisettings
 * @property Sources $Sources
 */
class Setting extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Raspberries' => array(
			'className' => 'Raspberries',
			'foreignKey' => 'Raspberries_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mediasources' => array(
			'className' => 'Mediasources',
			'foreignKey' => 'mediasources_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Passwords' => array(
			'className' => 'Passwords',
			'foreignKey' => 'passwords_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ConfigRaspberries' => array(
			'className' => 'ConfigRaspberries',
			'foreignKey' => 'config_raspberries_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Guisettings' => array(
			'className' => 'Guisettings',
			'foreignKey' => 'guisettings_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sources' => array(
			'className' => 'Sources',
			'foreignKey' => 'sources_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
