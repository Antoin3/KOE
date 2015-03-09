<?php
/**
 * GsPvrpowermanagementFixture
 *
 */
class GsPvrpowermanagementFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_pvrpowermanagement';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'backendidletime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'dailywakeup' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'dailywakeuptime' => array('type' => 'time', 'null' => true, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'prewakeup' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'setwakeupcmd' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'backendidletime' => 1,
			'dailywakeup' => 1,
			'dailywakeuptime' => '16:32:31',
			'enabled' => 1,
			'prewakeup' => 1,
			'setwakeupcmd' => 'Lorem ipsum dolor sit amet'
		),
	);

}
