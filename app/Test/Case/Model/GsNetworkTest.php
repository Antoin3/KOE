<?php
App::uses('GsNetwork', 'Model');

/**
 * GsNetwork Test Case
 *
 */
class GsNetworkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_network',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsNetwork = ClassRegistry::init('GsNetwork');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsNetwork);

		parent::tearDown();
	}

}
