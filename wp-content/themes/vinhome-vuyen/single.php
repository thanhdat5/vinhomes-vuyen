<?php

/**
 * The Template for displaying all single posts.
 */
get_header();
if (have_posts()) :
	while (have_posts()) :
		the_post();
		if ('phan-khu' === get_post_type()) {
			get_template_part('content', 'subdivision');
		} else {
			get_template_part('content', 'single');
		}
	endwhile;
endif;
wp_reset_postdata();
get_footer();
