<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="lav-loader">
		<div class="ring">
			<img src="<?php echo get_site_icon_url();?>" alt=""/>
			<span></span>
		</div>
	</div>
	<?php wp_body_open(); ?>
	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'vinhome-vuyen'); ?></a>

	<header class="lav-header">
		<nav id="header" class="navbar navbar-expand-md <?php echo (is_home() || is_front_page()) ? ' home' : ''; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
					<?php
					$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

					if (!empty($header_logo)) :
					?>
						<img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
					<?php
					else :
						echo esc_attr(get_bloginfo('name', 'display'));
					endif;
					?>
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'vinhome-vuyen'); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<?php
					// Loading WordPress Custom Menu (theme_location).
					wp_nav_menu(
						array(
							'menu_class'     => 'navbar-nav ms-auto',
							'container'      => '',
							'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
							'walker'         => new WP_Bootstrap_Navwalker(),
							'theme_location' => 'main-menu',
						)
					);
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>
	<div id="wrapper">
		<main id="main">