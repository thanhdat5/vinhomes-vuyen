<?php

/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */
get_header();
the_post();
?>
<div id="post-<?php the_ID(); ?>" class="lav-page">
	<!-- Banner -->
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => get_theme_file_uri('assets/images/page-bg.jpeg'),
		'title' => get_the_title()
	));
	?>

	<!-- Body -->
	<div class="lav-page-inner">
		<div class="lav-post-content">
			<div class="lav-page-body pt-0">
				<div class="container">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- /#post-<?php the_ID(); ?> -->

<!-- Section Contact -->
<?php
get_template_part('template-parts/component', 'contact-form');
?>
<?php
get_footer();
