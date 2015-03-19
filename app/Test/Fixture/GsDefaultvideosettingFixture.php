<?php
/**
 * GsDefaultvideosettingFixture
 *
 */
class GsDefaultvideosettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'deinterlacemode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'interlacemethod' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'scalingmethod' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'noisereduction' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'postprocess' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'sharpness' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'viewmode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'zoomamount' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'pixelratio' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'verticalshift' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'volumeamplification' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'outputtoallspeakers' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'brightness' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'contrast' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'gamma' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'audiodelay' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'subtitledelay' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'autocrop' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'nonlinstretch' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'stereomode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'deinterlacemode' => 1,
			'interlacemethod' => 1,
			'scalingmethod' => 1,
			'noisereduction' => 1,
			'postprocess' => 1,
			'sharpness' => 1,
			'viewmode' => 1,
			'zoomamount' => 1,
			'pixelratio' => 1,
			'verticalshift' => 1,
			'volumeamplification' => 1,
			'outputtoallspeakers' => 1,
			'brightness' => 1,
			'contrast' => 1,
			'gamma' => 1,
			'audiodelay' => 1,
			'subtitledelay' => 1,
			'autocrop' => 1,
			'nonlinstretch' => 1,
			'stereomode' => 1
		),
	);

}
