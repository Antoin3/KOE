<?php
/**
 * GsEpgFixture
 *
 */
class GsEpgFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_epg';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'daystodisplay' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'epgupdate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hidenoinfoavailable' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ignoredclientfordb' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'preventupdateswhileplayingtv' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'selection' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'daystodisplay' => 1,
			'epgupdate' => 1,
			'hidenoinfoavailable' => 1,
			'ignoredclientfordb' => 1,
			'preventupdateswhileplayingtv' => 1,
			'selection' => 1
		),
	);

}
