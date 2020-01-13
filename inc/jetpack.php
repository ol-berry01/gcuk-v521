<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package v5gcuk
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function v5gcuk_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'v5gcuk_infinite_scroll_render',
		'footer'    => 'page',
	) );

	
	//Testimonials CPT
	add_theme_support( 'jetpack-testimonial' );

} // end function v5gcuk_jetpack_setup
add_action( 'after_setup_theme', 'v5gcuk_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function v5gcuk_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function v5gcuk_infinite_scroll_render
