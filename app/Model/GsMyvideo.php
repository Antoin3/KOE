<?php
App::uses('AppModel', 'Model');
/**
 * GsMyvideo Model
 *
 * @property Guisetting $Guisetting
 * @property PlaylistMyvideo $PlaylistMyvideo
 */
class GsMyvideo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_myvideo';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_myvideo_id',
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
		'PlaylistMyvideo' => array(
			'className' => 'PlaylistMyvideo',
			'foreignKey' => 'playlist_myvideo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
