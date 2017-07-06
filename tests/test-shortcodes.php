<?php
/**
 * Knight Lab Storytelling Tools Shortcodes Tests.
 *
 * @since   1.0.0
 * @package Knight_Lab_Storytelling_Tools
 */
class KLST_Shortcodes_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  1.0.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'KLST_Shortcodes' ) );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  1.0.0
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'KLST_Shortcodes', knight_lab_storytelling_tools()->shortcodes );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  1.0.0
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
