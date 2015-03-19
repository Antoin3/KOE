<?php
App::uses('AsLanguagecode', 'Model');

/**
 * AsLanguagecode Test Case
 *
 */
class AsLanguagecodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.as_languagecode'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AsLanguagecode = ClassRegistry::init('AsLanguagecode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsLanguagecode);

		parent::tearDown();
	}

}
