<?php
App::uses('GsSubtitle', 'Model');

/**
 * GsSubtitle Test Case
 *
 */
class GsSubtitleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_subtitle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsSubtitle = ClassRegistry::init('GsSubtitle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsSubtitle);

		parent::tearDown();
	}

}
