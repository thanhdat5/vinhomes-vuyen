<?php

/**
 * The Template for displaying Archive pages.
 */
get_header();
$page_title = esc_html__('Lưu trữ', 'vinhome-vuyen');
if (is_day()) {
	$page_title = esc_html__('Lưu trữ ngày: ' . get_the_date(), 'vinhome-vuyen');
}
if (is_month()) {
	$page_title = esc_html__('Lưu trữ tháng: ' . get_the_date(_x('F Y', 'monthly archives date format', 'vinhome-vuyen')), 'vinhome-vuyen');
}
if (is_year()) {
	$page_title = esc_html__('Lưu trữ năm: ' . get_the_date(_x('Y', 'yearly archives date format', 'vinhome-vuyen')), 'vinhome-vuyen');
}
?>
<div class="lav-page lav-archive">
	<!-- Banner -->
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => get_theme_file_uri('assets/images/page-bg.jpeg'),
		'title' => $page_title
	));
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
