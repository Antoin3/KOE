<?php
App::uses('GsSlideshow', 'Model');

/**
 * GsSlideshow Test Case
 *
 */
class GsSlideshowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_slideshow',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsSlideshow = ClassRegistry::init('GsSlideshow');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsSlideshow);

		parent::tearDown();
	}

}
