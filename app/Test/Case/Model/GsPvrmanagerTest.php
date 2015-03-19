<?php
App::uses('GsPvrmanager', 'Model');

/**
 * GsPvrmanager Test Case
 *
 */
class GsPvrmanagerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_pvrmanager',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsPvrmanager = ClassRegistry::init('GsPvrmanager');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsPvrmanager);

		parent::tearDown();
	}

}
