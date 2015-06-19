<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package iGrow Illinois
 */

		?></div><!-- .wrap -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap wrap-footer">
			<div class="govs-office"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gov.png" class="logo-gov" /></div>
			<div class="state-seal"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/seal.png" class="logo-seal" /></div>
			<div class="site-info">
				<div class="info-wrap">
					<p><a href="<?php echo esc_url( get_admin_url(), 'igrow-illinois' ); ?>"><?php esc_html_e( 'Governor\'s Office of Early Childhood Development', 'igrow-illinois' ); ?></a><span class="divider">|</span></p>
					<p><address><div class="street"><?php esc_html_e( '160 N. LaSalle Street, Suite N-100 ', 'igrow-illinois' ); ?></div><span class="divider">|</span><div class="city"><?php esc_html_e( ' Chicago, IL 60601', 'igrow-illinois' ); ?></div></address></p>
					<p><div class="phone"><?php printf( esc_html__( 'Phone: %s', 'igrow-illinois' ), '<a href="tel:3128146312">(312) 814-6312</a>' ); ?></div><span class="divider">|</span><div class="fax"><?php esc_html_e( 'Fax: (312) 814-0904', 'igrow-illinois' ); ?></div></p>
					<p><?php printf( esc_html__( '%s %s %s', 'igrow-illinois' ), 'Email: <a href="mailto:Gov.HomeVisiting@illinois.gov">Gov.HomeVisiting@illinois.gov</a>', '<span class="divider">|</span>', '<a href="' . get_site_url() . '"><span class="screen-reader-text">Go to </span>iGrowIllinois.org</a>' ); ?></div></p>
				</div>
			</div><!-- .site-info -->
		</div><!-- .wrap-footer --><?php

		get_template_part( 'menus/menu', 'footer' );

	?></footer><!-- #colophon -->
</div><!-- #page --><?php

wp_footer();

?></body>
</html>