<?php
App::uses('Password', 'Model');

/**
 * Password Test Case
 *
 */
class PasswordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.password'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Password = ClassRegistry::init('Password');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Password);

		parent::tearDown();
	}

}
