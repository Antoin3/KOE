<?php
/**
 * GsPvrmanagerFixture
 *
 */
class GsPvrmanagerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_pvrmanager';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'backendchannelorder' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'hideconnectionlostwarning' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'syncchannelgroups' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usebackendchannelnumbers' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'backendchannelorder' => 1,
			'enabled' => 1,
			'hideconnectionlostwarning' => 1,
			'syncchannelgroups' => 1,
			'usebackendchannelnumbers' => 1
		),
	);

}
