<?php
/**
 * AsEdlFixture
 *
 */
class AsEdlFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_edl';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'mergeshortcommbreaks' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'maxcommbreaklength' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'mincommbreaklenght' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'commbreakautowait' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'commbreakautowind' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'mergeshortcommbreaks' => 1,
			'maxcommbreaklength' => 1,
			'mincommbreaklenght' => 1,
			'commbreakautowait' => 1,
			'commbreakautowind' => 1
		),
	);

}
