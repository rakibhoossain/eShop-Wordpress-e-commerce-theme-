<?php
/**
 * eshop Theme Customizer
 *
 * @package eshop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function eshop_customize_register( $wp_customize ) {

    /** sanitizer additions **/
    require_once get_template_directory() . '/inc/customizer/sanitize.php';

    /** Toggle additions **/
    require_once get_template_directory() . '/inc/customizer/class/class-customizer-toggle-control.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	/***********************************************/
	/************** GENERAL OPTIONS  ***************/
	/***********************************************/
	$wp_customize->add_panel( 'eshop_panel_general', array(
		'priority'       => 24,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Theme options', 'eshop' ),
	) );

	/***********************************************/
	/************** Breadcrumb Settings  ***************/
	/***********************************************/

	$wp_customize->add_section( 'eshop_blog_breadcrumb_section', array(
		'title'       => esc_html__( 'Breadcrumbs', 'eshop' ),
		'description' => esc_html__( 'Breadcrumb related settings.', 'eshop' ),
		'panel'       => 'eshop_panel_general',
	) );

	// /* BreadCrumb Menu:  Prefix */
	// $wp_customize->add_setting( 'eshop_blog_breadcrumb_menu_prefix', array(
	// 	'sanitize_callback' => 'wp_kses_post',
	// 	'default'           => esc_html__( 'You are here', 'eshop' ),
	// ) );
	// $wp_customize->add_control( 'eshop_blog_breadcrumb_menu_prefix', array(
	// 	'label'       => esc_html__( 'Text before the breadcrumbs menu', 'eshop' ),
	// 	'description' => esc_html__( 'Recommended: You are here', 'eshop' ),
	// 	'section'     => 'eshop_blog_breadcrumb_section',
	// ) );

	// /* BreadCrumb Menu:  separator */
	// $wp_customize->add_setting( 'eshop_blog_breadcrumb_menu_separator', array(
	// 	'sanitize_callback' => 'eshop_sanitize_radio_buttons',
	// 	'default'           => 'rarr',
	// ) );
	// $wp_customize->add_control( 'eshop_blog_breadcrumb_menu_separator', array(
	// 	'type'        => 'select',
	// 	'choices'     => array(
	// 		'rarr'      => esc_html( '&rarr;' ),
	// 		'middot'    => esc_html( '&middot;' ),
	// 		'diez'      => esc_html( '&#35;' ),
	// 		'ampersand' => esc_html( '&#38;' ),
	// 	),
	// 	'label'       => esc_html__( 'Separator to be used between breadcrumb items', 'eshop' ),
	// 	'description' => esc_html__( 'Select from predefined separators', 'eshop' ),
	// 	'section'     => 'eshop_blog_breadcrumb_section',
	// ) );

	/* BreadCrumb Menu:  post category */
	$wp_customize->add_setting('eshop_blog_breadcrumb_menu_post_category', array(
        'sanitize_callback' => 'eshop_sanitize_checkbox',
        'default' => 1,
        'capability' => 'edit_theme_options'
    ));
    
    $wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'eshop_blog_breadcrumb_menu_post_category', array(
        'label'       => esc_html__( 'Show post category ?', 'eshop' ),
        'description' => esc_html__( 'Show the post category in the breadcrumb ?', 'eshop' ),
        'section'     => 'eshop_blog_breadcrumb_section',
        'priority' => 3,
        'type'        => 'ios',// light, ios, flat
    ) ) );




	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'eshop_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'eshop_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'eshop_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function eshop_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function eshop_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function eshop_customize_preview_js() {
	wp_enqueue_script( 'eshop-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'eshop_customize_preview_js' );
