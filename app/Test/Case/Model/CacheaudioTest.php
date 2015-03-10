<?php
App::uses('Cacheaudio', 'Model');

/**
 * Cacheaudio Test Case
 *
 */
class CacheaudioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cacheaudio',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cacheaudio = ClassRegistry::init('Cacheaudio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cacheaudio);

		parent::tearDown();
	}

}
