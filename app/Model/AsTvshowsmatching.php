<?php
App::uses('AppModel', 'Model');
/**
 * AsTvshowsmatching Model
 *
 * @property Advancedsetting $Advancedsetting
 */
class AsTvshowsmatching extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'as_tvshowsmatching';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Advancedsetting' => array(
			'className' => 'Advancedsetting',
			'foreignKey' => 'as_tvshowsmatching_id',
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
