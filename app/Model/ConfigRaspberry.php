<?php
App::uses('AppModel', 'Model');
/**
 * ConfigRaspberry Model
 *
 * @property CrOverscan $CrOverscan
 * @property CrLicense $CrLicense
 * @property CrOverclocking $CrOverclocking
 * @property CrMemory $CrMemory
 */
class ConfigRaspberry extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CrOverscan' => array(
			'className' => 'CrOverscan',
			'foreignKey' => 'cr_overscan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CrLicense' => array(
			'className' => 'CrLicense',
			'foreignKey' => 'cr_license_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CrOverclocking' => array(
			'className' => 'CrOverclocking',
			'foreignKey' => 'cr_overclocking_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CrMemory' => array(
			'className' => 'CrMemory',
			'foreignKey' => 'cr_memory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
