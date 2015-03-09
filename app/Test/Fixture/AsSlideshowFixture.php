<?php
/**
 * AsSlideshowFixture
 *
 */
class AsSlideshowFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_slideshow';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'panamount' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'zooamount' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'blackbarcompensation' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'panamount' => 1,
			'zooamount' => 1,
			'blackbarcompensation' => 1
		),
	);

}
