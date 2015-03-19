<?php
/**
 * GsSubtitleFixture
 *
 */
class GsSubtitleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'align' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'charset' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'color' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'custompath' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'downloadfirst' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'font' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'height' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'movie' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'overrideassfonts' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'pauseonsearch' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'stereoscopicdepth' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'storagemode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'style' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'tv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'align' => 1,
			'charset' => 'Lorem ipsum dolor sit amet',
			'color' => 1,
			'custompath' => 'Lorem ipsum dolor sit amet',
			'downloadfirst' => 1,
			'font' => 'Lorem ipsum dolor sit amet',
			'height' => 1,
			'movie' => 'Lorem ipsum dolor sit amet',
			'overrideassfonts' => 1,
			'pauseonsearch' => 1,
			'stereoscopicdepth' => 1,
			'storagemode' => 1,
			'style' => 1,
			'tv' => 'Lorem ipsum dolor sit amet'
		),
	);

}
