<?php
App::uses('GsCache', 'Model');

/**
 * GsCache Test Case
 *
 */
class GsCacheTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_cache',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsCache = ClassRegistry::init('GsCache');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsCache);

		parent::tearDown();
	}

}
