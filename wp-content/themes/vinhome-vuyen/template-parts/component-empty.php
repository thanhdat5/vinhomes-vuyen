<?php
/**
 * The template for displaying "not found" content in the Blog Archives.
 */
?>
<article id="post-0" class="lav-empty">
	<header class="entry-header">
		<h1 class="entry-title"><?php esc_html_e('Không có kết quả', 'vinhome-vuyen'); ?></h1>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<p><?php esc_html_e('Xin lỗi, nhưng không tìm thấy kết quả nào.', 'vinhome-vuyen'); ?></p>
		<?php get_search_form(); ?>
	</div><!-- /.entry-content -->
</article><!-- /#post-0 -->