<?php
App::uses('SVideo', 'Model');

/**
 * SVideo Test Case
 *
 */
class SVideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.s_video',
		'app.source'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SVideo = ClassRegistry::init('SVideo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SVideo);

		parent::tearDown();
	}

}
