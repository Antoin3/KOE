<?php
/**
 * AdjustfreshrateFixture
 *
 */
class AdjustfreshrateFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'adjustfreshrate';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'refresh' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'refreshmin' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'refreshmax' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'fpsmin' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'fpsmax' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'refreshmin_fps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'refreshmax_fps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'refresh' => 1,
			'refreshmin' => 1,
			'refreshmax' => 1,
			'fpsmin' => 1,
			'fpsmax' => 1,
			'refreshmin_fps' => 1,
			'refreshmax_fps' => 1
		),
	);

}
