<?php

/**
 * The Template for displaying Author pages.
 */
get_header();
?>
<div class="lav-page lav-author">
	<!-- Banner -->
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => get_theme_file_uri('assets/images/page-bg.jpeg'),
		'title' => esc_html__('Đăng bởi: ' . get_the_author(), 'vinhome-vuyen')
	));
	?>

	<!-- Body -->
	<div class="lav-page-body">
		<div class="container">
			<?php
			if (have_posts()) :
				the_post();
				rewind_posts();
				get_template_part('template-parts/component', 'archive-loop');
			else :
				// 404.
				get_template_part('template-parts/component', 'empty');
			endif;

			wp_reset_postdata(); // End of the loop.
			?>
		</div>
	</div>
</div>
<?php
get_footer();
