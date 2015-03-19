<?php
App::uses('GsSmb', 'Model');

/**
 * GsSmb Test Case
 *
 */
class GsSmbTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_smb',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsSmb = ClassRegistry::init('GsSmb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsSmb);

		parent::tearDown();
	}

}
