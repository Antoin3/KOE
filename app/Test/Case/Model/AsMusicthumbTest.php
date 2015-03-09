<?php
App::uses('AsMusicthumb', 'Model');

/**
 * AsMusicthumb Test Case
 *
 */
class AsMusicthumbTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_musicthumb'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsMusicthumb = ClassRegistry::init('AsMusicthumb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsMusicthumb);

		parent::tearDown();
	}

}
