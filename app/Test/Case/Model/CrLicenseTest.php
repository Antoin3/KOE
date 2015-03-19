<?php
App::uses('CrLicense', 'Model');

/**
 * CrLicense Test Case
 *
 */
class CrLicenseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cr_license',
		'app.config_raspberry',
		'app.cr_overscan',
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
		$this->CrLicense = ClassRegistry::init('CrLicense');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CrLicense);

		parent::tearDown();
	}

}
