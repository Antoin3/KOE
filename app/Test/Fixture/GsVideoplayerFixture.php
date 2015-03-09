<?php
/**
 * GsVideoplayerFixture
 *
 */
class GsVideoplayerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_videoplayer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'adjustfreshrate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'autoplaynextitem' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'decodingmethod' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'errorinaspect' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hqscalers' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'limitguiupdate' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'maxspeedadjust' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'pauseafterrefreshchange' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'prefervaapirender' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'quitstereomodeonstop' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'rendermethod' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'stereoscopicplaybackmode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'stretch43' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'synctype' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'telextenabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'teletextscale' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'useamcodec' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usedisplayasclock' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usedxva2' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usemmal' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'useomx' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'useomxplayer' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usepbo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevaapi' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevaapimpeg2' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevaapimepg4' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevaapivc1' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevda' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevdpau' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevdpaumixer' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevdpaumpeg2' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevdpaumpeg4' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevdpauvc1' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'usevideotoolbox' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'vdpauUpscalingLevel' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'vdpau_allow_xrandr' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'adjustfreshrate' => 1,
			'autoplaynextitem' => 1,
			'decodingmethod' => 1,
			'errorinaspect' => 1,
			'hqscalers' => 1,
			'limitguiupdate' => 1,
			'maxspeedadjust' => 1,
			'pauseafterrefreshchange' => 1,
			'prefervaapirender' => 1,
			'quitstereomodeonstop' => 1,
			'rendermethod' => 1,
			'stereoscopicplaybackmode' => 1,
			'stretch43' => 1,
			'synctype' => 1,
			'telextenabled' => 1,
			'teletextscale' => 1,
			'useamcodec' => 1,
			'usedisplayasclock' => 1,
			'usedxva2' => 1,
			'usemmal' => 1,
			'useomx' => 1,
			'useomxplayer' => 1,
			'usepbo' => 1,
			'usevaapi' => 1,
			'usevaapimpeg2' => 1,
			'usevaapimepg4' => 1,
			'usevaapivc1' => 1,
			'usevda' => 1,
			'usevdpau' => 1,
			'usevdpaumixer' => 1,
			'usevdpaumpeg2' => 1,
			'usevdpaumpeg4' => 1,
			'usevdpauvc1' => 1,
			'usevideotoolbox' => 1,
			'vdpauUpscalingLevel' => 1,
			'vdpau_allow_xrandr' => 1
		),
	);

}
