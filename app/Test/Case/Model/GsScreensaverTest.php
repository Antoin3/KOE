<?php
App::uses('GsScreensaver', 'Model');

/**
 * GsScreensaver Test Case
 *
 */
class GsScreensaverTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_screensaver',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsScreensaver = ClassRegistry::init('GsScreensaver');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsScreensaver);

		parent::tearDown();
	}

}
