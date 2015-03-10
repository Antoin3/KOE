<?php
/**
 * AsNetworkFixture
 *
 */
class AsNetworkFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_network';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'curlclienttimeout' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'crulclientspeedtime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'httpproxyusername' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'httpproxypassword' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cachemembuffersize' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'buffermode' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'readbufferfactor' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'curlclienttimeout' => 1,
			'crulclientspeedtime' => 1,
			'httpproxyusername' => 'Lorem ipsum dolor sit amet',
			'httpproxypassword' => 'Lorem ipsum dolor sit amet',
			'cachemembuffersize' => 1,
			'buffermode' => 1,
			'readbufferfactor' => 1
		),
	);

}
