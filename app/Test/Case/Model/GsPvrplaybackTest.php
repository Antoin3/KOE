<?php
App::uses('GsPvrplayback', 'Model');

/**
 * GsPvrplayback Test Case
 *
 */
class GsPvrplaybackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_pvrplayback',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPvrplayback = ClassRegistry::init('GsPvrplayback');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPvrplayback);

		parent::tearDown();
	}

}
