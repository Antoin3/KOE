<?php
/**
 * AudioFixture
 *
 */
class AudioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'audio';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'mute' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'fvolumelevel' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'mute' => 1,
			'fvolumelevel' => 1
		),
	);

}
