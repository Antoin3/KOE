<?php
App::uses('Audiocd', 'Model');

/**
 * Audiocd Test Case
 *
 */
class AudiocdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.audiocd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Audiocd = ClassRegistry::init('Audiocd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Audiocd);

		parent::tearDown();
	}

}
