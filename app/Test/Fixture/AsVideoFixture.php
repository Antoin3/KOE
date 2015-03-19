<?php
/**
 * AsVideoFixture
 *
 */
class AsVideoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_video';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'subsdelayrange' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'audidelayrange' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'smallstepbackseconds' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usetimeseeking' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'timeseekforward' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'timeseekbackward' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'timeseekforwardbig' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'timeseekbackwardbig' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'percentseekforward' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'percentseekbackeard' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'percentseekforwardbig' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'percentseekfbackwardbig' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'blackbarcolour' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fullscreenonmoviestart' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'defaultplayer' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'playcountminimumpercent' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ignoresecondsatstart' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ignorepercentatend' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'forcevaapienabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'vdpauscaling' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'enablehighqualityhwscalers' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'ppffmpegdeinterlacing' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ppffmpegpostprocessing' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'autoscalemaxfps' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'checkdxvacompatibility' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'useocclusionquery' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'fpsdetect' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'stereoscopicregex3d' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'stereoscopicregextab' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'disableswmultithreading' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'dxvaallowhqscaling' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'useffmpegvda' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cleanstrings_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'excludefromscan_video_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'excludefromlisting_video_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'excludetvshowsfromscan_video_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'adjustfreshrate_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'trailermatching_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'latency_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'stagefright_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_as_video_cleanstrings1_idx' => array('column' => 'cleanstrings_id', 'unique' => 0),
			'fk_as_video_excludefromscan_video1_idx' => array('column' => 'excludefromscan_video_id', 'unique' => 0),
			'fk_as_video_excludefromlisting_video1_idx' => array('column' => 'excludefromlisting_video_id', 'unique' => 0),
			'fk_as_video_excludetvshowsfromscan_video1_idx' => array('column' => 'excludetvshowsfromscan_video_id', 'unique' => 0),
			'fk_as_video_adjustfreshrate1_idx' => array('column' => 'adjustfreshrate_id', 'unique' => 0),
			'fk_as_video_trailermatching1_idx' => array('column' => 'trailermatching_id', 'unique' => 0),
			'fk_as_video_latency1_idx' => array('column' => 'latency_id', 'unique' => 0),
			'fk_as_video_stagefright1_idx' => array('column' => 'stagefright_id', 'unique' => 0)
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
			'subsdelayrange' => 1,
			'audidelayrange' => 1,
			'smallstepbackseconds' => 1,
			'usetimeseeking' => 1,
			'timeseekforward' => 1,
			'timeseekbackward' => 1,
			'timeseekforwardbig' => 1,
			'timeseekbackwardbig' => 1,
			'percentseekforward' => 1,
			'percentseekbackeard' => 1,
			'percentseekforwardbig' => 1,
			'percentseekfbackwardbig' => 1,
			'blackbarcolour' => 1,
			'fullscreenonmoviestart' => 1,
			'defaultplayer' => 'Lorem ipsum dolor sit amet',
			'playcountminimumpercent' => 1,
			'ignoresecondsatstart' => 1,
			'ignorepercentatend' => 1,
			'forcevaapienabled' => 1,
			'vdpauscaling' => 1,
			'enablehighqualityhwscalers' => 1,
			'ppffmpegdeinterlacing' => 'Lorem ipsum dolor sit amet',
			'ppffmpegpostprocessing' => 'Lorem ipsum dolor sit amet',
			'autoscalemaxfps' => 1,
			'checkdxvacompatibility' => 1,
			'useocclusionquery' => 1,
			'fpsdetect' => 1,
			'stereoscopicregex3d' => 'Lorem ipsum dolor sit amet',
			'stereoscopicregextab' => 'Lorem ipsum dolor sit amet',
			'disableswmultithreading' => 1,
			'dxvaallowhqscaling' => 1,
			'useffmpegvda' => 1,
			'cleanstrings_id' => 1,
			'excludefromscan_video_id' => 1,
			'excludefromlisting_video_id' => 1,
			'excludetvshowsfromscan_video_id' => 1,
			'adjustfreshrate_id' => 1,
			'trailermatching_id' => 1,
			'latency_id' => 1,
			'stagefright_id' => 1
		),
	);

}
