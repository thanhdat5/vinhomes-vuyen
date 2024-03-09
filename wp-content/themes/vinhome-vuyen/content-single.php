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
		'title' => esc_html__('Chi tiết tin tức', 'vinhome-vuyen')
	));
	?>

	<div class="lav-page-inner">
		<div class="container">
			<!-- Breadcrumb -->
			<div class="lav-page-breadcrumb">
				<a href="<?php echo esc_url(home_url()); ?>">
					<?php esc_html_e('Trang chủ', 'vinhome-vuyen'); ?>
				</a>
				<svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3 2.5L5 4.5L3 6.5" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
				<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
					<?php esc_html_e('Tin tức & Sự kiện', 'vinhome-vuyen'); ?>
				</a>
			</div>

			<!-- Body -->
			<div class="row">
				<div class="col-lg-8">
					<div class="lav-post-content">
						<h1 class="lav-post-title"><?php the_title(); ?></h1>
						<div class="lav-post-meta">
							<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M8 4.66663V7.99996L10 9.99996" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<span class="lav-post-date"><?php the_date(); ?></span>
							<span><?php esc_html_e('đăng bởi', 'vinhome-vuyen'); ?></span>
							<a class="lav-post-author" href="<?php echo esc_url(get_author_posts_url((int) get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
						</div>
						<div class="lav-post-excerpt"><?php the_excerpt(); ?></div>
						<div class="lav-post-body"><?php the_content(); ?></div>
					</div>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>

			<!-- Related posts -->
			<?php
			get_template_part('template-parts/component', 'related-posts', array(
				'post_id' => get_the_ID()
			));
			?>
		</div>
	</div>
</article><!-- /#post-<?php the_ID(); ?> -->