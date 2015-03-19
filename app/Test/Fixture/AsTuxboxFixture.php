<?php
/**
 * AsTuxboxFixture
 *
 */
class AsTuxboxFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_tuxbox';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'audiochannelselection' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'submenuselection' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'defaultrootmenu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'defaultsubmenu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'pictureicon' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'epgrequesttime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'zapwaittime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'audiochannelselection' => 1,
			'submenuselection' => 1,
			'defaultrootmenu' => 1,
			'defaultsubmenu' => 1,
			'pictureicon' => 1,
			'epgrequesttime' => 1,
			'zapwaittime' => 1
		),
	);

}
