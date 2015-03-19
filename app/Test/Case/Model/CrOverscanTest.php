<?php
App::uses('CrOverscan', 'Model');

/**
 * CrOverscan Test Case
 *
 */
class CrOverscanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cr_overscan',
		'app.config_raspberry',
		'app.cr_license',
		'app.cr_overclocking',
		'app.cr_memory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CrOverscan = ClassRegistry::init('CrOverscan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CrOverscan);

		parent::tearDown();
	}

}
