<?php
App::uses('AppModel', 'Model');
/**
 * ExcludefromscanAudio Model
 *
 * @property AsAudio $AsAudio
 */
class ExcludefromscanAudio extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'excludefromscan_audio';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AsAudio' => array(
			'className' => 'AsAudio',
			'foreignKey' => 'excludefromscan_audio_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
