<?php
App::uses('AppModel', 'Model');
/**
 * GsMymusic Model
 *
 * @property Guisetting $Guisetting
 * @property PlaylistMymusic $PlaylistMymusic
 */
class GsMymusic extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_mymusic';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_mymusic_id',
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
		'PlaylistMymusic' => array(
			'className' => 'PlaylistMymusic',
			'foreignKey' => 'playlist_mymusic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
