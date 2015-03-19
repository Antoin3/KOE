<?php
/**
 * GsMusiclibraryFixture
 *
 */
class GsMusiclibraryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_musiclibrary';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'albumsscraper' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'artistsscraper' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'backgroundupdate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'downloadinfo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'overridetags' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showcompilationartists' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'updateonstratup' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'albumsscraper' => 'Lorem ipsum dolor sit amet',
			'artistsscraper' => 'Lorem ipsum dolor sit amet',
			'backgroundupdate' => 1,
			'downloadinfo' => 1,
			'enabled' => 1,
			'overridetags' => 1,
			'showcompilationartists' => 1,
			'updateonstratup' => 1
		),
	);

}
