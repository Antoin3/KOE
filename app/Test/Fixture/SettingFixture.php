<?php
/**
 * SettingFixture
 *
 */
class SettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Raspberries_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'mediasources_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'passwords_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'config_raspberries_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'guisettings_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'sources_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'Raspberries_id'), 'unique' => 1),
			'fk_settings_Raspberries1_idx' => array('column' => 'Raspberries_id', 'unique' => 0),
			'fk_settings_mediasources1_idx' => array('column' => 'mediasources_id', 'unique' => 0),
			'fk_settings_passwords1_idx' => array('column' => 'passwords_id', 'unique' => 0),
			'fk_settings_config_raspberries1_idx' => array('column' => 'config_raspberries_id', 'unique' => 0),
			'fk_settings_guisettings1_idx' => array('column' => 'guisettings_id', 'unique' => 0),
			'fk_settings_sources1_idx' => array('column' => 'sources_id', 'unique' => 0)
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
			'Raspberries_id' => 1,
			'mediasources_id' => 1,
			'passwords_id' => 1,
			'config_raspberries_id' => 1,
			'guisettings_id' => 1,
			'sources_id' => 1
		),
	);

}
