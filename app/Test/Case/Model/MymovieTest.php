<?php
App::uses('Mymovie', 'Model');

/**
 * Mymovie Test Case
 *
 */
class MymovieTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mymovie'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mymovie = ClassRegistry::init('Mymovie');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mymovie);

		parent::tearDown();
	}

}
