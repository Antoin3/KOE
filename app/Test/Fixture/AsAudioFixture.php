<?php
/**
 * AsAudioFixture
 *
 */
class AsAudioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_audio';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'headrrom' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'defaultplayer' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ac3downmixgain' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'playcountminimumpercent' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'applydrc' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'dvdplayerignoredtsinwav' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'limitedhold' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'limiterrelease' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'excludefromscan_audio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'excludefromlisting_audio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_as_audio_excludefromscan_audio1_idx' => array('column' => 'excludefromscan_audio_id', 'unique' => 0),
			'fk_as_audio_excludefromlisting_audio1_idx' => array('column' => 'excludefromlisting_audio_id', 'unique' => 0)
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
			'headrrom' => 1,
			'defaultplayer' => 'Lorem ipsum dolor sit amet',
			'ac3downmixgain' => 1,
			'playcountminimumpercent' => 1,
			'applydrc' => 1,
			'dvdplayerignoredtsinwav' => 1,
			'limitedhold' => 1,
			'limiterrelease' => 1,
			'excludefromscan_audio_id' => 1,
			'excludefromlisting_audio_id' => 1
		),
	);

}
