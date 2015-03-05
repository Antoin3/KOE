<?php
App::uses('Cleanstring', 'Model');

/**
 * Cleanstring Test Case
 *
 */
class CleanstringTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cleanstring',
		'app.advancedsettings'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cleanstring = ClassRegistry::init('Cleanstring');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cleanstring);

		parent::tearDown();
	}

}
