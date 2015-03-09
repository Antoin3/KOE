<?php
App::uses('AppModel', 'Model');
/**
 * AsVideolibrary Model
 *
 * @property Advancedsetting $Advancedsetting
 * @property Mymovies $Mymovies
 */
class AsVideolibrary extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_videolibrary';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_videolibrary_id',
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
		'Mymovies' => array(
			'className' => 'Mymovies',
			'foreignKey' => 'mymovies_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
