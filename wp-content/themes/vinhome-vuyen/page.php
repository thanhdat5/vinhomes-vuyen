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
	<div class="lav-page-body">
		<?php the_content(); ?>
	</div>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();
