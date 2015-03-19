<?php
App::uses('CrMemory', 'Model');

/**
 * CrMemory Test Case
 *
 */
class CrMemoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cr_memory',
		'app.config_raspberry',
		'app.cr_overscan',
		'app.cr_license',
		'app.cr_overclocking'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CrMemory = ClassRegistry::init('CrMemory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CrMemory);

		parent::tearDown();
	}

}
