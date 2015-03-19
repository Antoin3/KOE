<?php
App::uses('GsPvrpowermanagement', 'Model');

/**
 * GsPvrpowermanagement Test Case
 *
 */
class GsPvrpowermanagementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_pvrpowermanagement',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPvrpowermanagement = ClassRegistry::init('GsPvrpowermanagement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPvrpowermanagement);

		parent::tearDown();
	}

}
