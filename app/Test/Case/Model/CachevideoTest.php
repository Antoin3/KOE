<?php
App::uses('Cachevideo', 'Model');

/**
 * Cachevideo Test Case
 *
 */
class CachevideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cachevideo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cachevideo = ClassRegistry::init('Cachevideo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cachevideo);

		parent::tearDown();
	}

}
