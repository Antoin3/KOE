<?php
App::uses('AsVideoextension', 'Model');

/**
 * AsVideoextension Test Case
 *
 */
class AsVideoextensionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_videoextension'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsVideoextension = ClassRegistry::init('AsVideoextension');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsVideoextension);

		parent::tearDown();
	}

}
