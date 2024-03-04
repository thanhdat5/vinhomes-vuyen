<?php

defined( 'ABSPATH' ) || exit;

/**
 * Implement Theme Customizer additions and adjustments.
 * https://codex.wordpress.org/Theme_Customization_API
 *
 * How do I "output" custom theme modification settings? https://developer.wordpress.org/reference/functions/get_theme_mod
 * echo get_theme_mod( 'copyright_info' );
 * or: echo get_theme_mod( 'copyright_info', 'Default (c) Copyright Info if nothing provided' );
 *
 * "sanitize_callback": https://codex.wordpress.org/Data_Validation
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @return void
 */
function vinhome_vuyen_customize( $wp_customize ) {
	/**
	 * Initialize sections
	 */
	$wp_customize->add_section(
		'theme_header_section',
		array(
			'title'    => __( 'Header', 'vinhome-vuyen' ),
			'priority' => 1000,
		)
	);

	/**
	 * Section: Page Layout
	 */
	// Header Logo.
	$wp_customize->add_setting(
		'header_logo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo',
			array(
				'label'       => __( 'Upload Header Logo', 'vinhome-vuyen' ),
				'description' => __( 'Height: &gt;80px', 'vinhome-vuyen' ),
				'section'     => 'theme_header_section',
			)
		)
	);
	/**
	 * 
	 */
	$wp_customize->add_section(
		'theme_contact_section',
		array(
			'title'    => __('Liên hệ', 'vinhome-vuyen'),
			'priority' => 1000,
		)
	);
	// Địa chỉ
	$wp_customize->add_setting(
		'lav_address',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_address',
		array(
			'type'     => 'textarea',
			'label'    => __('Địa chỉ', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_address',
			'priority' => 1,
		)
	);
	// Số điện thoại 1
	$wp_customize->add_setting(
		'lav_phone_1',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_phone_1',
		array(
			'type'     => 'text',
			'label'    => __('Số điện thoại 1', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_phone_1',
			'priority' => 2,
		)
	);
	// Số điện thoại 2
	$wp_customize->add_setting(
		'lav_phone_2',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_phone_2',
		array(
			'type'     => 'text',
			'label'    => __('Số điện thoại 2', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_phone_2',
			'priority' => 3,
		)
	);
	// Email
	$wp_customize->add_setting(
		'lav_email',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_email',
		array(
			'type'     => 'email',
			'label'    => __('Email', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_email',
			'priority' => 4,
		)
	);
	// Zalo
	$wp_customize->add_setting(
		'lav_zalo',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_zalo',
		array(
			'type'     => 'url',
			'label'    => __('Zalo', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_zalo',
			'priority' => 5,
		)
	);
	// Facebook
	$wp_customize->add_setting(
		'lav_facebook',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_facebook',
		array(
			'type'     => 'url',
			'label'    => __('Facebook', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_facebook',
			'priority' => 6,
		)
	);
	// Youtube
	$wp_customize->add_setting(
		'lav_youtube',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_youtube',
		array(
			'type'     => 'url',
			'label'    => __('Youtube', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_youtube',
			'priority' => 7,
		)
	);
	// Bản đồ
	$wp_customize->add_setting(
		'lav_map',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_map',
		array(
			'type'     => 'textarea',
			'label'    => __('Bản đồ', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_map',
			'priority' => 8,
		)
	);
	// Contact form shortcode
	$wp_customize->add_setting(
		'lav_contact_form_shortcode',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_contact_form_shortcode',
		array(
			'type'     => 'text',
			'label'    => __('Contact form shortcode', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_contact_form_shortcode',
			'priority' => 10,
		)
	);
	// Contact form image
	$wp_customize->add_setting(
		'lav_contact_image',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'lav_contact_image',
			array(
				'label'       => __( 'Hình ảnh liên hệ', 'vinhome-vuyen' ),
				'section'     => 'theme_contact_section',
				'priority' 	  => 10,
			),
		)
	);
	// Copyright
	$wp_customize->add_setting(
		'lav_copyright',
		array(
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		'lav_copyright',
		array(
			'type'     => 'text',
			'label'    => __('Copyright', 'vinhome-vuyen'),
			'section'  => 'theme_contact_section',
			'settings' => 'lav_copyright',
			'priority' => 11,
		)
	);
}
add_action( 'customize_register', 'vinhome_vuyen_customize' );

/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @return void
 */
function vinhome_vuyen_customize_preview_js() {
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/inc/customizer.js', array( 'jquery' ), null, true );
}
add_action( 'customize_preview_init', 'vinhome_vuyen_customize_preview_js' );
