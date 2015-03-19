<?php
/**
 * LatencyFixture
 *
 */
class LatencyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'latency';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'delay' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'refresh_delay' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'refresh_rate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'refresh_min' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'refresh_max' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'delay' => 1,
			'refresh_delay' => 1,
			'refresh_rate' => 1,
			'refresh_min' => 1,
			'refresh_max' => 1
		),
	);

}
