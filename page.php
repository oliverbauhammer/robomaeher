<?php
/**
 * Displays the page template
 */

if(is_front_page()) {

	get_template_part('index');

} else {

	get_header();

	if ( have_posts() ) {

		while ( have_posts() ) {
			
			the_post();
			get_template_part( 'template-parts/content/content-page' );
	
		}

	} else {

		get_template_part( 'template-parts/content/content-none' );

	}

	get_footer();
}