<?php
/**
 * Gridzine Theme Customizer
 *
 * @package Gridzine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gridzine_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Sanitization Callback
	require_once trailingslashit( get_template_directory() ) . '/inc/sanitize.php'; 

	// Header Options
	require_once trailingslashit( get_template_directory() ) . '/inc/header-options.php'; 

	// Social Options
	require_once trailingslashit( get_template_directory() ) . '/inc/social-options.php'; 

	// Footer Options
	require_once trailingslashit( get_template_directory() ) . '/inc/footer-options.php'; 

	// Other Options
	require_once trailingslashit( get_template_directory() ) . '/inc/other-options.php'; 

	// Load Upgrade to Pro control.
	require_once trailingslashit( get_template_directory() ) . '/inc/upgrade-to-pro/control.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'gridzine_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new gridzine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Upgrade to Gridzine Plus', 'gridzine' ),
				'pro_text' => esc_html__( 'Buy Now', 'gridzine' ),
				'pro_url'  => 'https://justwpthemes.com/downloads/gridzine-plus-wordpress-theme/',
				'priority' => 1,
			)
		)
	);


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'gridzine_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'gridzine_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'gridzine_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gridzine_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gridzine_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gridzine_customize_preview_js() {
	wp_enqueue_script( 'gridzine-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gridzine_customize_preview_js' );
function gridzine_customizer_control_scripts() {

	wp_enqueue_script( 'gridzine-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.js', array('customize-controls'), '20151215', true );
	wp_enqueue_style( 'gridzine-customizer', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.css' );

}

add_action( 'customize_controls_enqueue_scripts', 'gridzine_customizer_control_scripts', 0 );