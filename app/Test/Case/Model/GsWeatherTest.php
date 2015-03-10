<?php
App::uses('GsWeather', 'Model');

/**
 * GsWeather Test Case
 *
 */
class GsWeatherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_weather',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsWeather = ClassRegistry::init('GsWeather');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsWeather);

		parent::tearDown();
	}

}
