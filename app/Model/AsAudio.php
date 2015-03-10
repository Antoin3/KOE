<?php
App::uses('AppModel', 'Model');
/**
 * AsAudio Model
 *
 * @property Advancedsetting $Advancedsetting
 * @property ExcludefromscanAudio $ExcludefromscanAudio
 * @property ExcludefromlistingAudio $ExcludefromlistingAudio
 */
class AsAudio extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_audio';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_audio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ExcludefromscanAudio' => array(
			'className' => 'ExcludefromscanAudio',
			'foreignKey' => 'excludefromscan_audio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExcludefromlistingAudio' => array(
			'className' => 'ExcludefromlistingAudio',
			'foreignKey' => 'excludefromlisting_audio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
