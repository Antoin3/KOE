<?php
App::uses('AppModel', 'Model');
/**
 * Source Model
 *
 * @property SProgramms $SProgramms
 * @property SMusic $SMusic
 * @property SVideo $SVideo
 * @property SPictures $SPictures
 * @property SFiles $SFiles
 */
class Source extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SProgramms' => array(
			'className' => 'SProgramms',
			'foreignKey' => 's_programms_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SMusic' => array(
			'className' => 'SMusic',
			'foreignKey' => 's_music_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SVideo' => array(
			'className' => 'SVideo',
			'foreignKey' => 's_video_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SPictures' => array(
			'className' => 'SPictures',
			'foreignKey' => 's_pictures_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SFiles' => array(
			'className' => 'SFiles',
			'foreignKey' => 's_files_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
