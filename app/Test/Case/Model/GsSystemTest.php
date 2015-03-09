<?php
App::uses('GsSystem', 'Model');

/**
 * GsSystem Test Case
 *
 */
class GsSystemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_system',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsSystem = ClassRegistry::init('GsSystem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsSystem);

		parent::tearDown();
	}

}
