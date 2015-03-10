<?php
App::uses('Setting', 'Model');

/**
 * Setting Test Case
 *
 */
class SettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.setting',
		'app.raspberries',
		'app.mediasources',
		'app.passwords',
		'app.config_raspberries',
		'app.guisettings',
		'app.sources'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Setting = ClassRegistry::init('Setting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Setting);

		parent::tearDown();
	}

}
