<?php
App::uses('GsWindow', 'Model');

/**
 * GsWindow Test Case
 *
 */
class GsWindowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_window',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsWindow = ClassRegistry::init('GsWindow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsWindow);

		parent::tearDown();
	}

}
