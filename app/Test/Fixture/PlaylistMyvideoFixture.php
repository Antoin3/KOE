<?php
/**
 * PlaylistMyvideoFixture
 *
 */
class PlaylistMyvideoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'playlist_myvideo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'repeat' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shuffle' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'repeat' => 1,
			'shuffle' => 1
		),
	);

}
