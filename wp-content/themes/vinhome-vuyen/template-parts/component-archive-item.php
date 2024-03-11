<?php
/**
 * The template for displaying content in the index.php template.
 */
$class_name = $args['class_name'] ?? 'col-lg-4 col-md-6';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($class_name); ?>>
	<div class="lav-archive-item" data-aos="fade-up">
		<!-- Image -->
		<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="lav-archive-item-image">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
		</a>

		<!-- Date -->
		<div class="lav-archive-item-date">
			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
				<path d="M7 12.5C10.3137 12.5 13 9.81371 13 6.5C13 3.18629 10.3137 0.5 7 0.5C3.68629 0.5 1 3.18629 1 6.5C1 9.81371 3.68629 12.5 7 12.5Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
				<path d="M7 3.16669V6.50002L9 8.50002" stroke="#222222" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
			<span><?php echo get_the_date(); ?></span>
		</div>

		<!-- Title -->
		<h2 class="lav-archive-item-title">
			<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'vinhome-vuyen'), the_title_attribute(array('echo' => false))); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>

		<!-- Description -->
		<div class="lav-archive-item-description">
			<?php echo get_the_excerpt(); ?>
		</div>
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->