<?php
App::uses('GsInput', 'Model');

/**
 * GsInput Test Case
 *
 */
class GsInputTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_input',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsInput = ClassRegistry::init('GsInput');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsInput);

		parent::tearDown();
	}

}
