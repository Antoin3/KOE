<?php
/**
 * CrMemoryFixture
 *
 */
class CrMemoryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cr_memory';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'gpu_mem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'gpu_mem_256' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'gpu_mem_512' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'gpu_mem_1024' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'gpu_mem' => 1,
			'gpu_mem_256' => 1,
			'gpu_mem_512' => 1,
			'gpu_mem_1024' => 1
		),
	);

}
