<?php
App::uses('GsLocale', 'Model');

/**
 * GsLocale Test Case
 *
 */
class GsLocaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_locale',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsLocale = ClassRegistry::init('GsLocale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsLocale);

		parent::tearDown();
	}

}
