<?php
App::uses('AppModel', 'Model');
/**
 * PlaylistMyvideo Model
 *
 * @property GsMyvideo $GsMyvideo
 */
class PlaylistMyvideo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'playlist_myvideo';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'GsMyvideo' => array(
			'className' => 'GsMyvideo',
			'foreignKey' => 'playlist_myvideo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
