<?php
App::uses('MsNetwork', 'Model');

/**
 * MsNetwork Test Case
 *
 */
class MsNetworkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_network',
		'app.mediasource'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsNetwork = ClassRegistry::init('MsNetwork');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsNetwork);

		parent::tearDown();
	}

}
