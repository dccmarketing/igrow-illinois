<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package iGrow Illinois
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>
<body <?php body_class(); ?>><?php

do_action( 'after_body' );

	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'igrow-illinois' ); ?></a>
	<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap wrap-header">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span class="screen-reader-text"><?php esc_html_e( 'Return to the iGrow home page', 'igrow-illinois' ); ?></span>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="logo" alt="iGrow Illinois Logo" />
					</a>
				</h1>
				<a class="link-refer" href="<?php echo esc_url( site_url( '/request-more-information' ) ); ?>"><?php esc_html_e( 'Request More Information', 'igrow-illinois' ); ?></a>
			</div><!-- .site-branding -->
		</div><!-- .header_wrap -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'igrow-illinois' ); ?></button><?php

				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );

		?></nav><!-- #site-navigation -->
	</header><!-- #masthead --><?php

	if ( is_front_page() ) {

		putRevSlider( 'homepage' );

		get_template_part( 'template-parts/content', 'circles' );

	}

	?><div id="content" class="site-content">
		<div class="wrap wrap-content">
			<div class="breadcrumbs"><?php

				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb();
				}

			?></div>