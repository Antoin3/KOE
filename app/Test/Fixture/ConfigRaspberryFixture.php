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
		'hdmi_ignore_cec_init' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cr_overscan_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cr_license_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cr_overclocking_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cr_memory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_config_raspberries_cr_overscan1_idx' => array('column' => 'cr_overscan_id', 'unique' => 0),
			'fk_config_raspberries_cr_license1_idx' => array('column' => 'cr_license_id', 'unique' => 0),
			'fk_config_raspberries_cr_overclocking1_idx' => array('column' => 'cr_overclocking_id', 'unique' => 0),
			'fk_config_raspberries_cr_memory1_idx' => array('column' => 'cr_memory_id', 'unique' => 0)
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
			'hdmi_ignore_cec_init' => 1,
			'cr_overscan_id' => 1,
			'cr_license_id' => 1,
			'cr_overclocking_id' => 1,
			'cr_memory_id' => 1
		),
	);

}
