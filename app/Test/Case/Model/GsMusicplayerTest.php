<?php
App::uses('GsMusicplayer', 'Model');

/**
 * GsMusicplayer Test Case
 *
 */
class GsMusicplayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_musicplayer',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsMusicplayer = ClassRegistry::init('GsMusicplayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsMusicplayer);

		parent::tearDown();
	}

}
