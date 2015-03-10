<?php
App::uses('AsSorttoken', 'Model');

/**
 * AsSorttoken Test Case
 *
 */
class AsSorttokenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_sorttoken'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsSorttoken = ClassRegistry::init('AsSorttoken');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsSorttoken);

		parent::tearDown();
	}

}
