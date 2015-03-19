<?php
App::uses('Cachedvd', 'Model');

/**
 * Cachedvd Test Case
 *
 */
class CachedvdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cachedvd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cachedvd = ClassRegistry::init('Cachedvd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cachedvd);

		parent::tearDown();
	}

}
