<?php
App::uses('GsPvrmenu', 'Model');

/**
 * GsPvrmenu Test Case
 *
 */
class GsPvrmenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_pvrmenu',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPvrmenu = ClassRegistry::init('GsPvrmenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPvrmenu);

		parent::tearDown();
	}

}
