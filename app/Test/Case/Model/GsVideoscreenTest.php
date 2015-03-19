<?php
App::uses('GsVideoscreen', 'Model');

/**
 * GsVideoscreen Test Case
 *
 */
class GsVideoscreenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_videoscreen',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsVideoscreen = ClassRegistry::init('GsVideoscreen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsVideoscreen);

		parent::tearDown();
	}

}
