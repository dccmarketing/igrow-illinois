<?php
/**
 * @package iGrow Illinois
 */

$circles[] = array( 'pram', 'For expectant moms and families of children birth to 5 years old' );
$circles[] = array( 'house', 'One-on-One Home Visits' );
$circles[] = array( 'blocks', 'Focuses on Parent-Child Relationship' );
$circles[] = array( 'family', 'Promotes Healthy Children and Families' );
$circles[] = array( 'brain', 'Developmental Screening' );
$circles[] = array( 'handandheart', 'Connection to Additional Resources' );

?><div class="circles">
	<ul class="home-circles"><?php

	foreach ( $circles as $circle ) {

		?><li class="home-circle">
			<div class="coin">
				<div class="front"><?php igrow_illinois_the_svg( $circle[0] ); ?></div>
				<div class="back"><span class="text"><?php esc_html_e( $circle[1], 'igrow-illinois' ); ?></span></div>
			</div>
		</li><?php

	}

	?></ul>
</div>