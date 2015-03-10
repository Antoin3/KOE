<?php
App::uses('GsLookandfeel', 'Model');

/**
 * GsLookandfeel Test Case
 *
 */
class GsLookandfeelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_lookandfeel',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsLookandfeel = ClassRegistry::init('GsLookandfeel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsLookandfeel);

		parent::tearDown();
	}

}
