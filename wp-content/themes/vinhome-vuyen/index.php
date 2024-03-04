<?php

/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();
$page_id = get_option('page_for_posts');
$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];
$page_title = get_the_title($page_id);
?>
<div class="lav-page lav-news">
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => $image,
		'title' => $page_title
	));
	?>

	<!-- Description -->
	<div class="lav-page-description">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<?php echo get_post_field('post_content', $page_id) ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Body -->
	<div class="lav-news-body">
		<div class="container">
			<?php get_template_part('template-parts/component', 'archive-loop'); ?>
		</div>
	</div>
</div>
<?php
get_footer();
