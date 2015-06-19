<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package iGrow Illinois
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @uses 	add_theme_support()
 */
function igrow_illinois_jetpack_setup() {

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

} // igrow_illinois_jetpack_setup()
add_action( 'after_setup_theme', 'igrow_illinois_jetpack_setup' );
