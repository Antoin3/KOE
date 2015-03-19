<?php
App::uses('Cache', 'Model');

/**
 * Cache Test Case
 *
 */
class CacheTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cache = ClassRegistry::init('Cache');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cache);

		parent::tearDown();
	}

}
