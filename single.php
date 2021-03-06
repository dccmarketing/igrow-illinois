<?php
/**
 * The template for displaying all single posts.
 *
 * @package iGrow Illinois
 */

get_header();

	?><div id="primary" class="content-area content-sidebar">
		<main id="main" class="site-main" role="main"><?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation();

		endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_sidebar();
get_footer();