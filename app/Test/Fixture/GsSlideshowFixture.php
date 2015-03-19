<?php
/**
 * GsSlideshowFixture
 *
 */
class GsSlideshowFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_slideshow';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'displayeffects' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shuffle' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'staytime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'displayeffects' => 1,
			'shuffle' => 1,
			'staytime' => 1
		),
	);

}
