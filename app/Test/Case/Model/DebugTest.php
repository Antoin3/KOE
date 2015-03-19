<?php
App::uses('Debug', 'Model');

/**
 * Debug Test Case
 *
 */
class DebugTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.debug',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Debug = ClassRegistry::init('Debug');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Debug);

		parent::tearDown();
	}

}
