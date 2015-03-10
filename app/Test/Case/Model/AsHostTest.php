<?php
App::uses('AsHost', 'Model');

/**
 * AsHost Test Case
 *
 */
class AsHostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_host'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsHost = ClassRegistry::init('AsHost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsHost);

		parent::tearDown();
	}

}
