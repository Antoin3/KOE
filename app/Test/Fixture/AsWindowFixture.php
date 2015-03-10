<?php
/**
 * AsWindowFixture
 *
 */
class AsWindowFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_window';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'width' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'height' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'width' => 1,
			'height' => 1
		),
	);

}
