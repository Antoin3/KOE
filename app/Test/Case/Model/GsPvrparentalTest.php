<?php
App::uses('GsPvrparental', 'Model');

/**
 * GsPvrparental Test Case
 *
 */
class GsPvrparentalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_pvrparental',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPvrparental = ClassRegistry::init('GsPvrparental');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPvrparental);

		parent::tearDown();
	}

}
