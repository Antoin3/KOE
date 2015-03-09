<?php
/**
 * GsPvrmenuFixture
 *
 */
class GsPvrmenuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_pvrmenu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'closechannelosdonswitch' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'displaychannelinfo' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'iconpath' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'closechannelosdonswitch' => 1,
			'displaychannelinfo' => 1,
			'iconpath' => 'Lorem ipsum dolor sit amet'
		),
	);

}
