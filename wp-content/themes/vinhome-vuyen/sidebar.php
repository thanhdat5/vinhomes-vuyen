<?php

/**
 * Sidebar Template.
 */

if (is_active_sidebar('primary_widget_area') || is_archive() || is_single()) :
?>
	<div id="sidebar" class="lav-sidebar">
		<!-- Section Related Posts -->
		<div class="lav-sidebar-widget">
			<?php
			get_template_part('template-parts/component', 'sidebar-latest-posts');
			?>
		</div>

		<!-- Dynamic widget -->
		<?php
		if (is_active_sidebar('primary_widget_area')) :
		?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php
				dynamic_sidebar('primary_widget_area');
				?>
			</div><!-- /.widget-area -->
		<?php
		endif;
		?>
	</div><!-- /#sidebar -->
<?php
endif;
?>