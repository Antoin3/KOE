<?php
App::uses('GsViewstate', 'Model');

/**
 * GsViewstate Test Case
 *
 */
class GsViewstateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_viewstate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsViewstate = ClassRegistry::init('GsViewstate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsViewstate);

		parent::tearDown();
	}

}
