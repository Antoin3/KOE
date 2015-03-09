<?php
App::uses('GsCacheaudio', 'Model');

/**
 * GsCacheaudio Test Case
 *
 */
class GsCacheaudioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_cacheaudio',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsCacheaudio = ClassRegistry::init('GsCacheaudio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsCacheaudio);

		parent::tearDown();
	}

}
