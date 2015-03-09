<?php
App::uses('SPicture', 'Model');

/**
 * SPicture Test Case
 *
 */
class SPictureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.s_picture'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SPicture = ClassRegistry::init('SPicture');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SPicture);

		parent::tearDown();
	}

}
