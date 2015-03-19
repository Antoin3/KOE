<?php
App::uses('GsGeneral', 'Model');

/**
 * GsGeneral Test Case
 *
 */
class GsGeneralTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_general',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsGeneral = ClassRegistry::init('GsGeneral');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsGeneral);

		parent::tearDown();
	}

}
