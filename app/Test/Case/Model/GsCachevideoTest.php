<?php
App::uses('GsCachevideo', 'Model');

/**
 * GsCachevideo Test Case
 *
 */
class GsCachevideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_cachevideo',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsCachevideo = ClassRegistry::init('GsCachevideo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsCachevideo);

		parent::tearDown();
	}

}
