<?php
App::uses('SProgramm', 'Model');

/**
 * SProgramm Test Case
 *
 */
class SProgrammTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.s_programm'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SProgramm = ClassRegistry::init('SProgramm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SProgramm);

		parent::tearDown();
	}

}
