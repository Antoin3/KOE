<?php
App::uses('AppModel', 'Model');
/**
 * Mediasource Model
 *
 * @property MsNetwork $MsNetwork
 */
class Mediasource extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MsNetwork' => array(
			'className' => 'MsNetwork',
			'foreignKey' => 'ms_network_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
