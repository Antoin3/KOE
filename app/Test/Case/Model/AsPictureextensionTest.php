<?php
App::uses('AsPictureextension', 'Model');

/**
 * AsPictureextension Test Case
 *
 */
class AsPictureextensionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_pictureextension'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsPictureextension = ClassRegistry::init('AsPictureextension');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsPictureextension);

		parent::tearDown();
	}

}
