<?php
/**
 * AsGuiFixture
 *
 */
class AsGuiFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_gui';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'algorithmdirtyregions' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nofliptimeout' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'visualizedirtyregions' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'algorithmdirtyregions' => 1,
			'nofliptimeout' => 1,
			'visualizedirtyregions' => 1
		),
	);

}
