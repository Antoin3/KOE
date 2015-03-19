<?php
App::uses('Audiooutput', 'Model');

/**
 * Audiooutput Test Case
 *
 */
class AudiooutputTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.audiooutput',
		'app.guisetting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Audiooutput = ClassRegistry::init('Audiooutput');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Audiooutput);

		parent::tearDown();
	}

}
