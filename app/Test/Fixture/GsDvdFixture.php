<?php
/**
 * GsDvdFixture
 *
 */
class GsDvdFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'automenu' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'autorun' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'playerregion' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'automenu' => 1,
			'autorun' => 1,
			'playerregion' => 1
		),
	);

}
