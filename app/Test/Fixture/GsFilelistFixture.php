<?php
/**
 * GsFilelistFixture
 *
 */
class GsFilelistFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'allowfiledeletion' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'browsearchives' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ignorethewhensorting' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showaddsourcebuttons' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showextensions' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showhidden' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showparentdiritems' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'allowfiledeletion' => 1,
			'browsearchives' => 1,
			'ignorethewhensorting' => 1,
			'showaddsourcebuttons' => 1,
			'showextensions' => 1,
			'showhidden' => 1,
			'showparentdiritems' => 1
		),
	);

}
