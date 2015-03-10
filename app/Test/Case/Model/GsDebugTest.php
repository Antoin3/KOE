<?php
App::uses('GsDebug', 'Model');

/**
 * GsDebug Test Case
 *
 */
class GsDebugTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_debug',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsDebug = ClassRegistry::init('GsDebug');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsDebug);

		parent::tearDown();
	}

}
