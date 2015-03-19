<?php
/**
 * SourceFixture
 *
 */
class SourceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		's_programms_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		's_music_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		's_video_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		's_pictures_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		's_files_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_sources_s_programms1_idx' => array('column' => 's_programms_id', 'unique' => 0),
			'fk_sources_s_music1_idx' => array('column' => 's_music_id', 'unique' => 0),
			'fk_sources_s_video1_idx' => array('column' => 's_video_id', 'unique' => 0),
			'fk_sources_s_pictures1_idx' => array('column' => 's_pictures_id', 'unique' => 0),
			'fk_sources_s_files1_idx' => array('column' => 's_files_id', 'unique' => 0)
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
			's_programms_id' => 1,
			's_music_id' => 1,
			's_video_id' => 1,
			's_pictures_id' => 1,
			's_files_id' => 1
		),
	);

}
