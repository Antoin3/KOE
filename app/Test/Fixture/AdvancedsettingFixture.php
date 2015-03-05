<?php
/**
 * AdvancedsettingFixture
 *
 */
class AdvancedsettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'loglevel' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'skiploopfilter' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'measurerefreshrate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'forcedswaptime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cleandatetime' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tvmultipartmatching' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'imageres' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fanartres' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'useddsfanart' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'playlistasfolders' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'playlistretries' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'playlisttimeout' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cddbaddress' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'songinfoduration' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'enableairtunesdebuglog' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'packagefoldersize' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'detectasudf' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'remotedelay' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'remoterepeat' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'controllerdeadzone' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'seeksteps' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'advancedsettingscol' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'allowd3d9ex' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'restrictcapsmask' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'forced3d9ex' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showexitbutton' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'fullscreen' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'splash' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cputempcommand' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gputempcommand' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'glrectanglehack' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'alwaysontop' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'settings_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'settings_Raspberries_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_advancedsettings_settings1_idx' => array('column' => array('settings_id', 'settings_Raspberries_id'), 'unique' => 0)
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
			'loglevel' => 1,
			'skiploopfilter' => 1,
			'measurerefreshrate' => 1,
			'forcedswaptime' => 1,
			'cleandatetime' => 'Lorem ipsum dolor sit amet',
			'tvmultipartmatching' => 'Lorem ipsum dolor sit amet',
			'imageres' => 1,
			'fanartres' => 1,
			'useddsfanart' => 1,
			'playlistasfolders' => 1,
			'playlistretries' => 1,
			'playlisttimeout' => 1,
			'cddbaddress' => 'Lorem ipsum dolor sit amet',
			'songinfoduration' => 1,
			'enableairtunesdebuglog' => 1,
			'packagefoldersize' => 1,
			'detectasudf' => 1,
			'remotedelay' => 1,
			'remoterepeat' => 1,
			'controllerdeadzone' => 1,
			'seeksteps' => 'Lorem ipsum dolor sit amet',
			'advancedsettingscol' => 'Lorem ipsum dolor sit amet',
			'allowd3d9ex' => 1,
			'restrictcapsmask' => 1,
			'forced3d9ex' => 1,
			'showexitbutton' => 1,
			'fullscreen' => 1,
			'splash' => 1,
			'cputempcommand' => 'Lorem ipsum dolor sit amet',
			'gputempcommand' => 'Lorem ipsum dolor sit amet',
			'glrectanglehack' => 'Lorem ipsum dolor sit amet',
			'alwaysontop' => 'Lorem ipsum dolor sit amet',
			'settings_id' => 1,
			'settings_Raspberries_id' => 1
		),
	);

}
