<?php
/**
 * GsScreensaverFixture
 *
 */
class GsScreensaverFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_screensaver';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'mode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'time' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usedimonpause' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usemusicvisinstead' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'mode' => 'Lorem ipsum dolor sit amet',
			'time' => 1,
			'usedimonpause' => 1,
			'usemusicvisinstead' => 1
		),
	);

}
