<?php
App::uses('GsCacheunknown', 'Model');

/**
 * GsCacheunknown Test Case
 *
 */
class GsCacheunknownTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_cacheunknown',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsCacheunknown = ClassRegistry::init('GsCacheunknown');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsCacheunknown);

		parent::tearDown();
	}

}
