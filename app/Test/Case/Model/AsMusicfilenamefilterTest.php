<?php
App::uses('AsMusicfilenamefilter', 'Model');

/**
 * AsMusicfilenamefilter Test Case
 *
 */
class AsMusicfilenamefilterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_musicfilenamefilter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsMusicfilenamefilter = ClassRegistry::init('AsMusicfilenamefilter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsMusicfilenamefilter);

		parent::tearDown();
	}

}
