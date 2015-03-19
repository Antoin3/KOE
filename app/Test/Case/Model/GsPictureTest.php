<?php
App::uses('GsPicture', 'Model');

/**
 * GsPicture Test Case
 *
 */
class GsPictureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_picture'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPicture = ClassRegistry::init('GsPicture');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPicture);

		parent::tearDown();
	}

}
