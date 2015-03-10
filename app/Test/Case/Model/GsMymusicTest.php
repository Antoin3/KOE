<?php
App::uses('GsMymusic', 'Model');

/**
 * GsMymusic Test Case
 *
 */
class GsMymusicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_mymusic',
		'app.playlist_mymusic',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsMymusic = ClassRegistry::init('GsMymusic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsMymusic);

		parent::tearDown();
	}

}
