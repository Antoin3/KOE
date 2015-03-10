<?php
/**
 * GsNetworkFixture
 *
 */
class GsNetworkFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gs_network';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'brandwith' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'httpproxypassword' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'httproxyport' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'httpproxyserver' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'httpproxytype' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'httpproxyusername' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'httpproxy' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'brandwith' => 1,
			'httpproxypassword' => 'Lorem ipsum dolor sit amet',
			'httproxyport' => 1,
			'httpproxyserver' => 'Lorem ipsum dolor sit amet',
			'httpproxytype' => 1,
			'httpproxyusername' => 'Lorem ipsum dolor sit amet',
			'httpproxy' => 1
		),
	);

}
