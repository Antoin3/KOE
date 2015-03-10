<?php
/**
 * AsPvrFixture
 *
 */
class AsPvrFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_pvr';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'timecorrection' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'infotoggleinterval' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'minvideocachelevel' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'minaudiocachelevel' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cacheindvdplayer' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'channeliconsautoscan' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'autoscaniconsuserset' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'numericchannekswitchtimeout' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'timecorrection' => 1,
			'infotoggleinterval' => 1,
			'minvideocachelevel' => 1,
			'minaudiocachelevel' => 1,
			'cacheindvdplayer' => 1,
			'channeliconsautoscan' => 1,
			'autoscaniconsuserset' => 1,
			'numericchannekswitchtimeout' => 1
		),
	);

}
