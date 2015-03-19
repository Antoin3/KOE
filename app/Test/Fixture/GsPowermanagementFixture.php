<?php
/**
 * GsPowermanagementFixture
 *
 */
class GsPowermanagementFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_powermanagement';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'displayoff' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'shutdownstate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'shutdowntime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'wakeonaccess' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'displayoff' => 1,
			'shutdownstate' => 1,
			'shutdowntime' => 1,
			'wakeonaccess' => 1
		),
	);

}
