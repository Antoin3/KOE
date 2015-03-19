<?php
/**
 * GsKaraokeFixture
 *
 */
class GsKaraokeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_karaoke';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'autopopupselector' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'charset' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'font' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fontcolors' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fontheight' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'autopopupselector' => 1,
			'charset' => 'Lorem ipsum dolor sit amet',
			'enabled' => 1,
			'font' => 'Lorem ipsum dolor sit amet',
			'fontcolors' => 1,
			'fontheight' => 1
		),
	);

}
