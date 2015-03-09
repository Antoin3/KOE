<?php
/**
 * GsPvrplaybackFixture
 *
 */
class GsPvrplaybackFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_pvrplayback';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'channelentrytimeout' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'confirmchannelswitch' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'playminimized' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'scantime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'signalquality' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'startlast' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'channelentrytimeout' => 1,
			'confirmchannelswitch' => 1,
			'playminimized' => 1,
			'scantime' => 1,
			'signalquality' => 1,
			'startlast' => 1
		),
	);

}
