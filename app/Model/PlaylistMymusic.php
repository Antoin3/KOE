<?php
App::uses('AppModel', 'Model');
/**
 * PlaylistMymusic Model
 *
 * @property GsMymusic $GsMymusic
 */
class PlaylistMymusic extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'playlist_mymusic';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'GsMymusic' => array(
			'className' => 'GsMymusic',
			'foreignKey' => 'playlist_mymusic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
