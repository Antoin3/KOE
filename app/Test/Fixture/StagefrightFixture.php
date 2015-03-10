<?php
/**
 * StagefrightFixture
 *
 */
class StagefrightFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'stagefright';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'useavccodec' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usehevccodec' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usevc1codec' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usevpxcodec' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usemp4codec' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usempeg2codec' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'useswrenderer' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'useavccodec' => 1,
			'usehevccodec' => 1,
			'usevc1codec' => 1,
			'usevpxcodec' => 1,
			'usemp4codec' => 1,
			'usempeg2codec' => 1,
			'useswrenderer' => 1
		),
	);

}
