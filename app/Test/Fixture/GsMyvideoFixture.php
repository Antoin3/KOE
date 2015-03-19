<?php
/**
 * GsMyvideoFixture
 *
 */
class GsMyvideoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_myvideo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'extractflags' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'extractthumb' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'flatten' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'replacelabels' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'stackvideos' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'startwindow' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'watchmodetvshows' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'watchmodemusicvideos' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'needsupdate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'playlist_myvideo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_myvideo_playlist_myvideo1_idx' => array('column' => 'playlist_myvideo_id', 'unique' => 0)
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
			'extractflags' => 1,
			'extractthumb' => 1,
			'flatten' => 1,
			'replacelabels' => 1,
			'stackvideos' => 1,
			'startwindow' => 1,
			'watchmodetvshows' => 1,
			'watchmodemusicvideos' => 1,
			'needsupdate' => 1,
			'playlist_myvideo_id' => 1
		),
	);

}
