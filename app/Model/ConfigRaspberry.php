<?php
App::uses('AppModel', 'Model');
/**
 * ConfigRaspberry Model
 *
 * @property Overscan $Overscan
 * @property Overclocking $Overclocking
 * @property Memory $Memory
 * @property License $License
 */
class ConfigRaspberry extends AppModel {

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
		'Overscan' => array(
			'className' => 'Overscan',
			'foreignKey' => 'overscan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Overclocking' => array(
			'className' => 'Overclocking',
			'foreignKey' => 'overclocking_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Memory' => array(
			'className' => 'Memory',
			'foreignKey' => 'memory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'License' => array(
			'className' => 'License',
			'foreignKey' => 'license_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
