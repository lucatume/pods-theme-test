<?php


class ThemeTest extends \Codeception\TestCase\WPTestCase {

	public function setUp() {
		// before
		parent::setUp();

		// your set up methods here
	}

	public function tearDown() {
		// your tear down methods here

		// then
		parent::tearDown();
	}

	/**
	 * @test
	 * it should have loaded the theme at this point
	 */
	public function it_should_have_loaded_the_theme_at_this_point() {
		$this->assertTrue( function_exists( 'child_theme_function' ) );
	}

	/**
	 * @test
	 * it should have included the pods framework too at this point
	 */
	public function it_should_have_included_the_pods_framework_too_at_this_point() {
		$this->assertTrue( function_exists( 'pods_query' ) );
	}

	/**
	 * @test
	 * it should be able to use a pods function
	 */
	public function it_should_be_able_to_use_a_pods_function() {
		$this->factory()->post->create_many( 3, [ 'post_type' => 'post', 'post_status' => 'publish' ] );

		$this->assertCount( 3, pods_query( 'SELECT ID FROM @wp_posts' ) );
	}

}