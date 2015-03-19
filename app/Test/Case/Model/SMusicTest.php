<?php
App::uses('SMusic', 'Model');

/**
 * SMusic Test Case
 *
 */
class SMusicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.s_music',
		'app.source'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SMusic = ClassRegistry::init('SMusic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SMusic);

		parent::tearDown();
	}

}
