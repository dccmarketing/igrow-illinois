<?php

/**
 * Declare all actions & filters here
 */
add_filter( 'walker_nav_menu_start_el', 'igrow_illinois_menu_caret', 10, 4 );
//add_filter( 'walker_nav_menu_start_el', 'igrow_illinois_icon_before_menu_item', 10, 4 );
//add_filter( 'walker_nav_menu_start_el', 'igrow_illinois_icon_after_menu_item', 10, 4 );
add_filter( 'walker_nav_menu_start_el', 'igrow_illinois_icons_only_menu_item', 10, 4 );
add_shortcode( 'listmenu', 'igrow_illinois_list_menu' );




/**
 * Add Down Caret to Menus with Children
 *
 * @param 	string 		$item_output		//
 * @param 	object 		$item				//
 * @param 	int 		$depth 				//
 * @param 	array 		$args 				//
 *
 * @return 	string 							modified menu
 */
function igrow_illinois_menu_caret( $item_output, $item, $depth, $args ) {

	if ( ! in_array( 'menu-item-has-children', $item->classes ) ) { return $item_output; }

	$atts 	= igrow_illinois_get_attributes( $item );
	$output = '';

	$output .= '<a href="' . $item->url . '">';
	$output .= $item->title;
	$output .= '<span class="children">' . igrow_illinois_get_svg( 'caret-down' ) . '</span>';
	$output .= '</a>';

	return $output;

} // igrow_illinois_menu_caret()

/**
 * Adds an SVG icon before the menu item text
 *
 * @link 	http://www.billerickson.net/customizing-wordpress-menus/
 *
 * @param 	string 		$item_output		//
 * @param 	object 		$item				//
 * @param 	int 		$depth 				//
 * @param 	array 		$args 				//
 *
 * @return 	string 							modified menu
 */
function igrow_illinois_icon_before_menu_item( $item_output, $item, $depth, $args ) {

	if ( 'services' !== $args->theme_location && 'subheader' !== $args->theme_location ) { return $item_output; }

	$atts 	= igrow_illinois_get_attributes( $item );
	$class 	= igrow_illinois_get_svg_by_class( $item->classes );

	if ( empty( $class ) ) { return $item_output; }

	$output = '<a href="' . $item->url . '" class="icon-menu" ' . $atts . '>';
	$output .= $class;
	$output .= '<span class="menu-label">';
	$output .= $item->title;
	$output .= '</span>';
	$output .= '</a>';

	return $output;

} // pdc_social_menu_svgs()

/**
 * Adds an SVG icon after the menu item text
 *
 * @link 	http://www.billerickson.net/customizing-wordpress-menus/
 *
 * @param 	string 		$item_output		//
 * @param 	object 		$item				//
 * @param 	int 		$depth 				//
 * @param 	array 		$args 				//
 *
 * @return 	string 							modified menu
 */
function igrow_illinois_icon_after_menu_item( $item_output, $item, $depth, $args ) {

	if ( '' !== $args->theme_location || 'subheader' !== $args->theme_location ) { return $item_output; }

	$atts 	= igrow_illinois_get_attributes( $item );
	$class 	= igrow_illinois_get_svg_by_class( $item->classes );

	if ( empty( $class ) ) { return $item_output; }

	$output = '<a href="' . $item->url . '" class="icon-menu" ' . $atts . '>';
	$output .= '<span class="menu-label">';
	$output .= $item->title;
	$output .= '</span>';
	$output .= $class;
	$output .= '</a>';

	return $output;

} // pdc_social_menu_svgs()

/**
 * Replaces menu item text with an SVG icon
 *
 * @link 	http://www.billerickson.net/customizing-wordpress-menus/
 *
 * @param 	string 		$item_output		//
 * @param 	object 		$item				//
 * @param 	int 		$depth 				//
 * @param 	array 		$args 				//
 *
 * @return 	string 							modified menu
 */
function igrow_illinois_icons_only_menu_item( $item_output, $item, $depth, $args ) {

	if ( 'social' !== $args->theme_location ) { return $item_output; }

	$atts 	= igrow_illinois_get_attributes( $item );
	$link 	= igrow_illinois_get_svg_link( $item->url );
	$class 	= igrow_illinois_get_svg_by_class( $item->classes, $link );

	if ( empty( $class ) ) { return $item_output; }

	$output = '';

	$output .= '<a href="' . $item->url . '" class="icon-menu" ' . $atts . '>';
	$output .= '<span class="screen-reader-text">' . $item->title . '</span>';
	$output .= $class;
	$output .= '</a>';

	return $output;

} // igrow_illinois_social_menu_svgs()

/**
 * Returns a string of HTML attributes for the menu item
 *
 * @param 	object 		$item 			The menu item object
 * @return 	string 						A string of attributes
 */
function igrow_illinois_get_attributes( $item ) {

	if ( empty( $item ) ) { return; }

	$atts = array();
	$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
	$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
	$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
	$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

	$attributes = '';

	foreach ( $atts as $attr => $value ) {

		if ( ! empty( $value ) ) {

			$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
			$attributes .= ' ' . $attr . '="' . $value . '"';

		}

	}

	return $attributes;

} // igrow_illinois_get_attributes()

/**
 * Returns an SVG formatted link
 *
 * @param 	string 		$link 			URL
 * @return 	mixed 						SVG-formatted link
 */
function igrow_illinois_get_svg_link( $link ) {

	if ( empty( $link ) ) { return; }

	$return = '';

	$return = '<a xlink:href="' . $link .'" xlink:show="new">';

	return $return;

} // igrow_illinois_get_svg_link()

/**
 * Gets the appropriate SVG based on a menu item class
 *
 * @param  [type] $url [description]
 * @return [type]      [description]
 */
function igrow_illinois_get_svg_by_class( $classes, $link = '' ) {

	$output = '';

	foreach ( $classes as $class ) {

		$check = igrow_illinois_get_svg( $class, $link );

		if ( ! is_null( $check ) ) { $output .= $check; break; }

	} // foreach

	return $output;

} // igrow_illinois_get_svg_by_class()

// Function that will return our WordPress menu
function igrow_illinois_list_menu( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'menu'            => '',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'depth'           => 0,
		'walker'          => '',
		'theme_location'  => ''),
		$atts )
	);

	return wp_nav_menu( array(
		'menu'            => $menu,
		'container'       => $container,
		'container_class' => $container_class,
		'container_id'    => $container_id,
		'menu_class'      => $menu_class,
		'menu_id'         => $menu_id,
		'echo'            => false,
		'fallback_cb'     => $fallback_cb,
		'before'          => $before,
		'after'           => $after,
		'link_before'     => $link_before,
		'link_after'      => $link_after,
		'depth'           => $depth,
		'walker'          => $walker,
		'theme_location'  => $theme_location )
	);
}
