<?php
/**
 * Displays the main template
 */

get_header();

get_template_part( 'template-parts/components/swiper' );

get_template_part( 'template-parts/content/content-products' );

get_template_part( 'template-parts/content/content-features' );

if ( have_posts() ) {

	while ( have_posts() ) {
		
    the_post();
    // get_template_part( 'template-parts/content/content-page' );

	}

} else {

	get_template_part( 'template-parts/content/content-none' );

}

get_footer();