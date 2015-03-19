<?php
App::uses('GsDvd', 'Model');

/**
 * GsDvd Test Case
 *
 */
class GsDvdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_dvd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsDvd = ClassRegistry::init('GsDvd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsDvd);

		parent::tearDown();
	}

}
