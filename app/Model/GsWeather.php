<?php
App::uses('AppModel', 'Model');
/**
 * GsWeather Model
 *
 * @property Guisetting $Guisetting
 */
class GsWeather extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gs_weather';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guisetting' => array(
			'className' => 'Guisetting',
			'foreignKey' => 'gs_weather_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
