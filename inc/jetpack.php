<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package DocBlock
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @uses 	add_theme_support()
 */
function function_names_jetpack_setup() {

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

} // function_names_jetpack_setup()
add_action( 'after_setup_theme', 'function_names_jetpack_setup' );
