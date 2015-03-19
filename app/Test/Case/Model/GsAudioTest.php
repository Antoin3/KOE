<?php
App::uses('GsAudio', 'Model');

/**
 * GsAudio Test Case
 *
 */
class GsAudioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_audio',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsAudio = ClassRegistry::init('GsAudio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsAudio);

		parent::tearDown();
	}

}
