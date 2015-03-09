<?php
App::uses('GsDisc', 'Model');

/**
 * GsDisc Test Case
 *
 */
class GsDiscTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_disc',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsDisc = ClassRegistry::init('GsDisc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsDisc);

		parent::tearDown();
	}

}
