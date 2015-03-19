<?php
App::uses('GsMyvideo', 'Model');

/**
 * GsMyvideo Test Case
 *
 */
class GsMyvideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_myvideo',
		'app.playlist_myvideo',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsMyvideo = ClassRegistry::init('GsMyvideo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsMyvideo);

		parent::tearDown();
	}

}
