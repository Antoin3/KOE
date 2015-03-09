<?php
App::uses('GsService', 'Model');

/**
 * GsService Test Case
 *
 */
class GsServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsService = ClassRegistry::init('GsService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsService);

		parent::tearDown();
	}

}
