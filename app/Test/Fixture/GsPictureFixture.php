<?php
/**
 * GsPictureFixture
 *
 */
class GsPictureFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'displayresolution' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'generatethumbs' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showvideos' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'useexifrotation' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usetags' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'displayresolution' => 1,
			'generatethumbs' => 1,
			'showvideos' => 1,
			'useexifrotation' => 1,
			'usetags' => 1
		),
	);

}
