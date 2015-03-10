<?php
/**
 * CachedvdFixture
 *
 */
class CachedvdFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cachedvd';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dvdrom' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'lan' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'dvdrom' => 1,
			'lan' => 1
		),
	);

}
