<?php
App::uses('AppModel', 'Model');
/**
 * AsKaraoke Model
 *
 * @property Advancedsetting $Advancedsetting
 * @property Defaultbackground $Defaultbackground
 */
class AsKaraoke extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_karaoke';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_karaoke_id',
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
		'Defaultbackground' => array(
			'className' => 'Defaultbackground',
			'foreignKey' => 'defaultbackground_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
