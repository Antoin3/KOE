<?php
App::uses('GsKaraoke', 'Model');

/**
 * GsKaraoke Test Case
 *
 */
class GsKaraokeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_karaoke',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsKaraoke = ClassRegistry::init('GsKaraoke');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsKaraoke);

		parent::tearDown();
	}

}
