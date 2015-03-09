<?php
/**
 * GsVideolibraryFixture
 *
 */
class GsVideolibraryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_videolibrary';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'actorthumbs' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'backgroundupdate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'flattentvshows' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'groupmoviessets' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'showunwatchedplots' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'updateonstartup' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'actorthumbs' => 1,
			'backgroundupdate' => 1,
			'enabled' => 1,
			'flattentvshows' => 1,
			'groupmoviessets' => 1,
			'showunwatchedplots' => 1,
			'updateonstartup' => 1
		),
	);

}
