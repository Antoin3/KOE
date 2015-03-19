<?php
/**
 * GsAudiocdFixture
 *
 */
class GsAudiocdFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'autoaction' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ejectonrip' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'encoder' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'recordingpath' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trackpathformat' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'usecddb' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'audiocdscol' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'autoaction' => 1,
			'ejectonrip' => 1,
			'encoder' => 'Lorem ipsum dolor sit amet',
			'recordingpath' => 'Lorem ipsum dolor sit amet',
			'trackpathformat' => 'Lorem ipsum dolor sit amet',
			'usecddb' => 1,
			'audiocdscol' => 'Lorem ipsum dolor sit amet'
		),
	);

}
