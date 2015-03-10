<?php
App::uses('AsPictureexclude', 'Model');

/**
 * AsPictureexclude Test Case
 *
 */
class AsPictureexcludeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_pictureexclude'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsPictureexclude = ClassRegistry::init('AsPictureexclude');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsPictureexclude);

		parent::tearDown();
	}

}
