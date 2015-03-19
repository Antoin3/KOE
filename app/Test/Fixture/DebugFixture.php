<?php
/**
 * DebugFixture
 *
 */
class DebugFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'debug';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'extralogging' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'screenshotpath' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'setextraloglevel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'showloginfo' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'extralogging' => 1,
			'screenshotpath' => 'Lorem ipsum dolor sit amet',
			'setextraloglevel' => 'Lorem ipsum dolor sit amet',
			'showloginfo' => 1
		),
	);

}
