<?php
App::uses('AsMusicextension', 'Model');

/**
 * AsMusicextension Test Case
 *
 */
class AsMusicextensionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_musicextension'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsMusicextension = ClassRegistry::init('AsMusicextension');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsMusicextension);

		parent::tearDown();
	}

}
