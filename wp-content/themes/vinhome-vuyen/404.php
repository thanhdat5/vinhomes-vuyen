<?php

/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */
get_header();
?>
<div class="lav-page lav-not-found">
	<!-- Banner -->
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => get_theme_file_uri('assets/images/page-bg.jpeg'),
		'title' => esc_html__('Không tìm thấy trang', 'vinhome-vuyen')
	));
	?>

	<!-- Body -->
	<div class="lav-page-body">
		<div class="container">
			<p><?php esc_html_e('Không tìm thấy URL được yêu cầu trên máy chủ này', 'vinhome-vuyen'); ?></p>
			<a class="lav-btn btn btn-secondary" href="<?php echo esc_url(home_url()); ?>">
				<?php esc_html_e('Quay lại Trang chủ', 'vinhome-vuyen'); ?>
			</a>
		</div>
	</div><!-- /.entry-content -->
</div><!-- /#post-0 -->
<?php
get_footer();
