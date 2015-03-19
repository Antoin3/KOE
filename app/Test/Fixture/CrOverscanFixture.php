<?php
/**
 * CrOverscanFixture
 *
 */
class CrOverscanFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cr_overscan';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'scale' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'left' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'right' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'top' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'bottom' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'enabled' => 1,
			'scale' => 1,
			'left' => 1,
			'right' => 1,
			'top' => 1,
			'bottom' => 1
		),
	);

}
