<?php
/**
 * GsMymusicFixture
 *
 */
class GsMymusicFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_mymusic';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'defaultlibview' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'songthumbinvis' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'startwindow' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'needsupdate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'playlist_mymusic_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_mymusic_playlist_mymusic1_idx' => array('column' => 'playlist_mymusic_id', 'unique' => 0)
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
			'defaultlibview' => 1,
			'songthumbinvis' => 1,
			'startwindow' => 1,
			'needsupdate' => 1,
			'playlist_mymusic_id' => 1
		),
	);

}
