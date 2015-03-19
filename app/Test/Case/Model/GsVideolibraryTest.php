<?php
App::uses('GsVideolibrary', 'Model');

/**
 * GsVideolibrary Test Case
 *
 */
class GsVideolibraryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_videolibrary',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsVideolibrary = ClassRegistry::init('GsVideolibrary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsVideolibrary);

		parent::tearDown();
	}

}
