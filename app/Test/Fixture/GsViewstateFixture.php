<?php
/**
 * GsViewstateFixture
 *
 */
class GsViewstateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'viewmode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sortmethod' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sortorder' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sortattributes' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'viewmode' => 1,
			'sortmethod' => 1,
			'sortorder' => 1,
			'sortattributes' => 1
		),
	);

}
