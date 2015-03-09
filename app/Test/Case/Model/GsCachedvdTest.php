<?php
App::uses('GsCachedvd', 'Model');

/**
 * GsCachedvd Test Case
 *
 */
class GsCachedvdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_cachedvd',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsCachedvd = ClassRegistry::init('GsCachedvd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsCachedvd);

		parent::tearDown();
	}

}
