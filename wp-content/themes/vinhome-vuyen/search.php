<?php

/**
 * The Template for displaying Search Results pages.
 */

get_header();
?>
<div id="post-0" class="lav-page lav-search-results">
	<!-- Banner -->
	<?php
	get_template_part('template-parts/component', 'page-banner', array(
		'image'  => get_theme_file_uri('assets/images/page-bg.jpeg'),
		'title' => (esc_html__('Kết quả tìm kiếm cho', 'vinhome-vuyen') . '<br/>' . esc_html__('Từ khóa: "' . get_search_query() . '"', 'vinhome-vuyen'))
	));
	?>

	<!-- Body -->
	<div class="lav-page-body">
		<div class="container">
			<?php
			if (have_posts()) :
				get_template_part('template-parts/component', 'archive-loop');
			else :
				get_template_part('template-parts/component', 'empty');
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php
get_footer();
