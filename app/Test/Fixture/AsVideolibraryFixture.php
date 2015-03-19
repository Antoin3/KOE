<?php
/**
 * AsVideolibraryFixture
 *
 */
class AsVideolibraryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_videolibrary';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'allitemsonbottom' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'backgroundupdate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cleanonupdate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usefasthash' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'hideallitems' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'hideemptyseries' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'recentlyaddeditems' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'itemseparator' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'exportautothumbs' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'importwatchedstate' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'importresumepoint' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'dateadded' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'mymovies_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_as_videolibrary_mymovies1_idx' => array('column' => 'mymovies_id', 'unique' => 0)
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
			'allitemsonbottom' => 1,
			'backgroundupdate' => 1,
			'cleanonupdate' => 1,
			'usefasthash' => 1,
			'hideallitems' => 1,
			'hideemptyseries' => 1,
			'recentlyaddeditems' => 1,
			'itemseparator' => 'Lorem ipsum dolor sit ame',
			'exportautothumbs' => 1,
			'importwatchedstate' => 1,
			'importresumepoint' => 1,
			'dateadded' => 1,
			'mymovies_id' => 1
		),
	);

}
