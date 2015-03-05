<?php
App::uses('ConfigRaspberry', 'Model');

/**
 * ConfigRaspberry Test Case
 *
 */
class ConfigRaspberryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.config_raspberry',
		'app.overscan',
		'app.overclocking',
		'app.memory',
		'app.license'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConfigRaspberry = ClassRegistry::init('ConfigRaspberry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConfigRaspberry);

		parent::tearDown();
	}

}
