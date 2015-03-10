<?php
/**
 * AudiooutputFixture
 *
 */
class AudiooutputFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'audiooutput';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ac3passthrough' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ac3transcode' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'audiodevice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'boostcenter' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'channels' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'config' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'dtshdpassthrough' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'dtspassthrough' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'eac3passtrough' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'guisoundmode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'maintainoriginalvolume' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'passthrough' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'passtroughdevice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'processquality' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'samplerate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'streamstereoupmix' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'streamsilence' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'truehdpassthrough' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'ac3passthrough' => 1,
			'ac3transcode' => 1,
			'audiodevice' => 'Lorem ipsum dolor sit amet',
			'boostcenter' => 1,
			'channels' => 1,
			'config' => 1,
			'dtshdpassthrough' => 1,
			'dtspassthrough' => 1,
			'eac3passtrough' => 1,
			'guisoundmode' => 1,
			'maintainoriginalvolume' => 1,
			'passthrough' => 1,
			'passtroughdevice' => 'Lorem ipsum dolor sit amet',
			'processquality' => 1,
			'samplerate' => 1,
			'streamstereoupmix' => 1,
			'streamsilence' => 1,
			'truehdpassthrough' => 1
		),
	);

}
