<?php
App::uses('Adjustfreshrate', 'Model');

/**
 * Adjustfreshrate Test Case
 *
 */
class AdjustfreshrateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adjustfreshrate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Adjustfreshrate = ClassRegistry::init('Adjustfreshrate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adjustfreshrate);

		parent::tearDown();
	}

}
