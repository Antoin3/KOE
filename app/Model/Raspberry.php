<?php
App::uses('AppModel', 'Model');
/**
 * Raspberry Model
 *
 */
class Raspberry extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * beforeSave callback
 *
 * @param $options array
 * @return boolean
 */
	public function beforeSave($options = array()) {
		if(isset($this->data[$this->alias]['password']))
        $this->data[$this->alias]['password'] = md5($this->data[$this->alias]['password']);
		return true;
	}


}
