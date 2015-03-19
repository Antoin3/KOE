<?php
/**
 * GsPvrrecordFixture
 *
 */
class GsPvrrecordFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_pvrrecord';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'defaultlifetime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'defualtpriority' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'instantrecordtime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'margined' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'timernotifications' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'defaultlifetime' => 1,
			'defualtpriority' => 1,
			'instantrecordtime' => 1,
			'margined' => 1,
			'timernotifications' => 1
		),
	);

}
