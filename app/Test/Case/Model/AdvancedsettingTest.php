<?php
App::uses('Advancedsetting', 'Model');

/**
 * Advancedsetting Test Case
 *
 */
class AdvancedsettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.advancedsetting',
		'app.settings',
		'app.settings_raspberries'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Advancedsetting = ClassRegistry::init('Advancedsetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Advancedsetting);

		parent::tearDown();
	}

}
