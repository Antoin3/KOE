<?php
/**
 * AsKaraokeFixture
 *
 */
class AsKaraokeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'as_karaoke';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'syncdelaycdg' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'syncdelaylrc' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'alwaysreplacegenre' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'storedelay' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'autoassignstartfrom' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nextsongpopuptime' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'defaultbackground_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_as_karaoke_defaultbackground1_idx' => array('column' => 'defaultbackground_id', 'unique' => 0)
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
			'syncdelaycdg' => 1,
			'syncdelaylrc' => 1,
			'alwaysreplacegenre' => 1,
			'storedelay' => 1,
			'autoassignstartfrom' => 1,
			'nextsongpopuptime' => 1,
			'defaultbackground_id' => 1
		),
	);

}
