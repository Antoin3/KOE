<?php
App::uses('Mediasource', 'Model');

/**
 * Mediasource Test Case
 *
 */
class MediasourceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mediasource',
		'app.ms_network'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mediasource = ClassRegistry::init('Mediasource');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mediasource);

		parent::tearDown();
	}

}
