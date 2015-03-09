<?php
App::uses('GsAudiocd', 'Model');

/**
 * GsAudiocd Test Case
 *
 */
class GsAudiocdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_audiocd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsAudiocd = ClassRegistry::init('GsAudiocd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsAudiocd);

		parent::tearDown();
	}

}
