<?php
/**
 * GsServiceFixture
 *
 */
class GsServiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'airplay' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'airplayios8compat' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'airplaypassword' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'airplayvolumecontrol' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'devicename' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'esallinterfaces' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'escontinuouslydelay' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'esenabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'esinitialdelay' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'esmaxclients' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'esport' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'esportrange' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'upnpannounce' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'upnpcontroller' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'upnprenderer' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'upnpserver' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'useairplaypassword' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'webserver' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'webserverpassword' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'webserverport' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'webserverusername' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'webskin' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zeroconf' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'airplay' => 1,
			'airplayios8compat' => 1,
			'airplaypassword' => 'Lorem ipsum dolor sit amet',
			'airplayvolumecontrol' => 1,
			'devicename' => 'Lorem ipsum dolor sit amet',
			'esallinterfaces' => 1,
			'escontinuouslydelay' => 1,
			'esenabled' => 1,
			'esinitialdelay' => 1,
			'esmaxclients' => 1,
			'esport' => 1,
			'esportrange' => 1,
			'upnpannounce' => 1,
			'upnpcontroller' => 1,
			'upnprenderer' => 1,
			'upnpserver' => 1,
			'useairplaypassword' => 1,
			'webserver' => 1,
			'webserverpassword' => 'Lorem ipsum dolor sit amet',
			'webserverport' => 1,
			'webserverusername' => 'Lorem ipsum dolor sit amet',
			'webskin' => 'Lorem ipsum dolor sit amet',
			'zeroconf' => 1
		),
	);

}
