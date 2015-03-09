<?php
App::uses('AsDiscstubextension', 'Model');

/**
 * AsDiscstubextension Test Case
 *
 */
class AsDiscstubextensionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_discstubextension'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsDiscstubextension = ClassRegistry::init('AsDiscstubextension');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsDiscstubextension);

		parent::tearDown();
	}

}
