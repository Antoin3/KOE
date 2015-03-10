<?php
App::uses('AppModel', 'Model');
/**
 * ExcludefromlistingAudio Model
 *
 * @property AsAudio $AsAudio
 */
class ExcludefromlistingAudio extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'excludefromlisting_audio';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AsAudio' => array(
			'className' => 'AsAudio',
			'foreignKey' => 'excludefromlisting_audio_id',
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
