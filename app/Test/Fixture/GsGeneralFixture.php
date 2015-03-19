<?php
/**
 * GsGeneralFixture
 *
 */
class GsGeneralFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_general';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'addonbrokenfilter' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'addonforeignfilter' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'addonupdates' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'settinglevel' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'systemtotaluptime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'addonbrokenfilter' => 1,
			'addonforeignfilter' => 1,
			'addonupdates' => 1,
			'settinglevel' => 1,
			'systemtotaluptime' => 1
		),
	);

}
