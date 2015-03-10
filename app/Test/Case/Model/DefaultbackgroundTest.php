<?php
App::uses('Defaultbackground', 'Model');

/**
 * Defaultbackground Test Case
 *
 */
class DefaultbackgroundTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.defaultbackground'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Defaultbackground = ClassRegistry::init('Defaultbackground');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Defaultbackground);

		parent::tearDown();
	}

}
