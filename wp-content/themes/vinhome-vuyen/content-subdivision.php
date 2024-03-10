<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
$page_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('lav-page'); ?>>
	<!-- Banner -->
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => $page_image,
		'title' => get_the_title()
	));
	?>

	<div class="lav-page-inner pt-3">
		<div class="container">
			<div class="lav-post-content">
				<div class="lav-post-body"><?php the_content(); ?></div>
			</div>
		</div>

		<!-- Related subdivision -->
		<div class="container">
			<?php
			get_template_part('template-parts/component', 'related-subdivision', array(
				'post_id' => get_the_ID()
			));
			?>
		</div>
	</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->