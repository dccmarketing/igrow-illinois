<?php
/**
 * Template Name: Homepage
 *
 * Description: The homepage template
 *
 * @package iGrow Illinois
 */

get_header();

	?><div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary -->
	<div class="content-haps">
		<h2>
			<a href="<?php echo site_url( '/news' ); ?>"><?php esc_html_e( 'Happenings', 'igrow-illinois' ); ?></a>
			<a class="icon-rss" href="<?php echo bloginfo('rss2_url'); ?>"><span class="dashicons dashicons-rss"></span><span class="screen-reader-text">Subscribe to the iGrow news feed.</span></a>
		</h2>
		<div class="posts-haps"><?php

		// get haps - events or news?
		$haps = igrow_illinois_get_posts( 'post', array( 'posts_per_page' => 3 ), 'home' );

		if ( ! empty( $haps ) ) {

			while ( $haps->have_posts() ) : $haps->the_post();

				get_template_part( 'template-parts/content', 'haps' );

			endwhile; // loop

			wp_reset_postdata();

		} else {

			?><p><?php esc_html_e( 'There are no current news items.', 'igrow-illinois' ); ?></p><?php

		}

		?></div>
	</div><?php

get_footer();