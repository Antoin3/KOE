<?php
App::uses('SFile', 'Model');

/**
 * SFile Test Case
 *
 */
class SFileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.s_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SFile = ClassRegistry::init('SFile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SFile);

		parent::tearDown();
	}

}
