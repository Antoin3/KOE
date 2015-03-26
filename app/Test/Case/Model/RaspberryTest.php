<?php
App::uses('Raspberry', 'Model');

/**
 * Raspberry Test Case
 *
 */
class RaspberryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.raspberry',
		'app.setting',
		'app.raspberries',
		'app.plugin'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Raspberry = ClassRegistry::init('Raspberry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Raspberry);

		parent::tearDown();
	}

}
