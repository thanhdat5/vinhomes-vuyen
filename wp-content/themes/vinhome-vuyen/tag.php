<?php

/**
 * The Template used to display Tag Archive pages.
 */
get_header();
?>
<div class="lav-page lav-category">
	<!-- Banner -->
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => get_theme_file_uri('assets/images/page-bg.jpeg'),
		'title' => esc_html__('Thẻ: ' . single_tag_title('', false), 'vinhome-vuyen')
	));
	?>

	<!-- Description -->
	<?php
	$tag_description = tag_description();
	if (!empty($tag_description)) :
	?>
		<div class="lav-page-description">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<?php echo apply_filters('tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php
	endif;
	?>

	<!-- Body -->
	<div class="lav-page-body">
		<div class="container">
			<?php
			if (have_posts()) :
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
