<?php
App::uses('AppModel', 'Model');
/**
 * GsMusicplayer Model
 *
 * @property Guisetting $Guisetting
 */
class GsMusicplayer extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_musicplayer';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_musicplayer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
