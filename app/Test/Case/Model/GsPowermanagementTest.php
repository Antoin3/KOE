<?php
App::uses('GsPowermanagement', 'Model');

/**
 * GsPowermanagement Test Case
 *
 */
class GsPowermanagementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_powermanagement',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPowermanagement = ClassRegistry::init('GsPowermanagement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPowermanagement);

		parent::tearDown();
	}

}
