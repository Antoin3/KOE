<?php
App::uses('GsDefaultvideosetting', 'Model');

/**
 * GsDefaultvideosetting Test Case
 *
 */
class GsDefaultvideosettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_defaultvideosetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsDefaultvideosetting = ClassRegistry::init('GsDefaultvideosetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsDefaultvideosetting);

		parent::tearDown();
	}

}
