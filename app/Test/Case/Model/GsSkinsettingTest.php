<?php
App::uses('GsSkinsetting', 'Model');

/**
 * GsSkinsetting Test Case
 *
 */
class GsSkinsettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_skinsetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsSkinsetting = ClassRegistry::init('GsSkinsetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsSkinsetting);

		parent::tearDown();
	}

}
