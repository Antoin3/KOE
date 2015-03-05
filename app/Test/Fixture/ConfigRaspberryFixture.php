<?php
/**
 * ConfigRaspberryFixture
 *
 */
class ConfigRaspberryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'overscan_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'overclocking_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'memory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'license_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'hdmi_ignore_cec_init' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_config_raspberries_overscan1_idx' => array('column' => 'overscan_id', 'unique' => 0),
			'fk_config_raspberries_overclocking1_idx' => array('column' => 'overclocking_id', 'unique' => 0),
			'fk_config_raspberries_memory1_idx' => array('column' => 'memory_id', 'unique' => 0),
			'fk_config_raspberries_license1_idx' => array('column' => 'license_id', 'unique' => 0)
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
			'overscan_id' => 1,
			'overclocking_id' => 1,
			'memory_id' => 1,
			'license_id' => 1,
			'hdmi_ignore_cec_init' => 1
		),
	);

}
