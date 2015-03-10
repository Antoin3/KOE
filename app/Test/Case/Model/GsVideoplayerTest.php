<?php
App::uses('GsVideoplayer', 'Model');

/**
 * GsVideoplayer Test Case
 *
 */
class GsVideoplayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_videoplayer',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsVideoplayer = ClassRegistry::init('GsVideoplayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsVideoplayer);

		parent::tearDown();
	}

}
