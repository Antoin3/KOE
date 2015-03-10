<?php
/**
 * AsMusiclibraryFixture
 *
 */
class AsMusiclibraryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_musiclibrary';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'hideallitems' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'allitemsonbottom' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'backgroundupdate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'recentlyaddeditems' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'albumssortbyartistthenyear' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'albumformat' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'albumformatright' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'prioritiseapetags' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'itemseparator' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'hideallitems' => 1,
			'allitemsonbottom' => 1,
			'backgroundupdate' => 1,
			'recentlyaddeditems' => 1,
			'albumssortbyartistthenyear' => 1,
			'albumformat' => 'Lorem ipsum dolor sit amet',
			'albumformatright' => 'Lorem ipsum dolor sit amet',
			'prioritiseapetags' => 1,
			'itemseparator' => 'Lorem ipsum dolor sit ame'
		),
	);

}
