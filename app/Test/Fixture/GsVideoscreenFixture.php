<?php
/**
 * GsVideoscreenFixture
 *
 */
class GsVideoscreenFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_videoscreen';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'blankdisplay' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'fakefullscreen' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'limitedrange' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'limitgui' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'monitor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'preferedstereoscopicmode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'resolution' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'screen' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'screenmode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'stereoscopicmode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'texture32' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'vsync' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'blankdisplay' => 1,
			'fakefullscreen' => 1,
			'limitedrange' => 1,
			'limitgui' => 1,
			'monitor' => 'Lorem ipsum dolor sit amet',
			'preferedstereoscopicmode' => 1,
			'resolution' => 1,
			'screen' => 1,
			'screenmode' => 'Lorem ipsum dolor sit amet',
			'stereoscopicmode' => 1,
			'texture32' => 1,
			'vsync' => 1
		),
	);

}
