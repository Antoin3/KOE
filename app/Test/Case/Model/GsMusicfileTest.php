<?php
App::uses('GsMusicfile', 'Model');

/**
 * GsMusicfile Test Case
 *
 */
class GsMusicfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_musicfile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsMusicfile = ClassRegistry::init('GsMusicfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsMusicfile);

		parent::tearDown();
	}

}
