<?php
App::uses('GsMasterlock', 'Model');

/**
 * GsMasterlock Test Case
 *
 */
class GsMasterlockTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_masterlock',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsMasterlock = ClassRegistry::init('GsMasterlock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsMasterlock);

		parent::tearDown();
	}

}
