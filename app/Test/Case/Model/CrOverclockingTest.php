<?php
App::uses('CrOverclocking', 'Model');

/**
 * CrOverclocking Test Case
 *
 */
class CrOverclockingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cr_overclocking',
		'app.config_raspberry',
		'app.cr_overscan',
		'app.cr_license',
		'app.cr_memory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CrOverclocking = ClassRegistry::init('CrOverclocking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CrOverclocking);

		parent::tearDown();
	}

}
