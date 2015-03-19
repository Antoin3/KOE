<?php
App::uses('Cacheunknown', 'Model');

/**
 * Cacheunknown Test Case
 *
 */
class CacheunknownTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cacheunknown',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cacheunknown = ClassRegistry::init('Cacheunknown');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cacheunknown);

		parent::tearDown();
	}

}
