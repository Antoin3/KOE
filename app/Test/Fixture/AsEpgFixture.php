<?php
/**
 * AsEpgFixture
 *
 */
class AsEpgFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_epg';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'lingertime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'updatecheckinterval' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'lingercleanupintervaltime' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'activetagcheckinterval' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'retryinterruptedupdateinterval' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'updateemptytagsinterval' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'displayupdatepopup' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'displayincrementalupdatepopup' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'lingertime' => 1,
			'updatecheckinterval' => 1,
			'lingercleanupintervaltime' => 1,
			'activetagcheckinterval' => 1,
			'retryinterruptedupdateinterval' => 1,
			'updateemptytagsinterval' => 1,
			'displayupdatepopup' => 1,
			'displayincrementalupdatepopup' => 1
		),
	);

}
