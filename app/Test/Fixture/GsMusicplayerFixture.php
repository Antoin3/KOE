<?php
/**
 * GsMusicplayerFixture
 *
 */
class GsMusicplayerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_musicplayer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'autoplaynextitem' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'crossfade' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'crossfadealbumtracks' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'queuebydefault' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'replaygainavoidclipping' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'replaygainnogainpreamp' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'replaygainpreamp' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'replaygaintype' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'visualisation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'autoplaynextitem' => 1,
			'crossfade' => 1,
			'crossfadealbumtracks' => 1,
			'queuebydefault' => 1,
			'replaygainavoidclipping' => 1,
			'replaygainnogainpreamp' => 1,
			'replaygainpreamp' => 1,
			'replaygaintype' => 1,
			'visualisation' => 'Lorem ipsum dolor sit amet'
		),
	);

}
