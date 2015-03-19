<?php
App::uses('GsScraper', 'Model');

/**
 * GsScraper Test Case
 *
 */
class GsScraperTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gs_scraper'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GsScraper = ClassRegistry::init('GsScraper');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GsScraper);

		parent::tearDown();
	}

}
