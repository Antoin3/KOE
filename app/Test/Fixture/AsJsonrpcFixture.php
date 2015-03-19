<?php
/**
 * AsJsonrpcFixture
 *
 */
class AsJsonrpcFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_jsonrpc';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'compactoutput' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'tcpport' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'compactoutput' => 1,
			'tcpport' => 1
		),
	);

}
