<?php
App::uses('GsFilelist', 'Model');

/**
 * GsFilelist Test Case
 *
 */
class GsFilelistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_filelist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsFilelist = ClassRegistry::init('GsFilelist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsFilelist);

		parent::tearDown();
	}

}
