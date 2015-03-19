<?php
App::uses('GsPvrrecord', 'Model');

/**
 * GsPvrrecord Test Case
 *
 */
class GsPvrrecordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_pvrrecord',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPvrrecord = ClassRegistry::init('GsPvrrecord');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPvrrecord);

		parent::tearDown();
	}

}
