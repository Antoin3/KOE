<?php
App::uses('GsMusiclibrary', 'Model');

/**
 * GsMusiclibrary Test Case
 *
 */
class GsMusiclibraryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_musiclibrary',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsMusiclibrary = ClassRegistry::init('GsMusiclibrary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsMusiclibrary);

		parent::tearDown();
	}

}
