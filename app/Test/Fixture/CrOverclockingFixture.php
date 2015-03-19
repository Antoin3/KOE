<?php
/**
 * CrOverclockingFixture
 *
 */
class CrOverclockingFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cr_overclocking';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'arm_freq' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'core_freq' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sdram_freq' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'overvoltage' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'force_turbo' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'arm_freq' => 1,
			'core_freq' => 1,
			'sdram_freq' => 1,
			'overvoltage' => 1,
			'force_turbo' => 1
		),
	);

}
