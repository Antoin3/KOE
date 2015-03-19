<?php
App::uses('GsEpg', 'Model');

/**
 * GsEpg Test Case
 *
 */
class GsEpgTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_epg',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsEpg = ClassRegistry::init('GsEpg');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsEpg);

		parent::tearDown();
	}

}
