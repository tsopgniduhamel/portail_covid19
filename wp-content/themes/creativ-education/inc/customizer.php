<?php
/**
 * Creativ Education Theme Customizer
 *
 * @package creativ_education
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function creativ_education_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Register custom section types.
	$wp_customize->register_section_type( 'Creativ_Education_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new Creativ_Education_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Creativ Education Pro', 'creativ-education' ),
				'pro_text' => esc_html__( 'Buy Pro', 'creativ-education' ),
				'pro_url'  => 'http://www.creativthemes.com/downloads/creativ-education-pro/',
				'priority'  => 10,
			)
		)
	);

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/sanitize.php';

	// Load topbar sections option.
	include get_template_directory() . '/inc/customizer/topbar.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-section.php';

	// Load home page sections option.
	include get_template_directory() . '/inc/customizer/home-section.php';
	
}
add_action( 'customize_register', 'creativ_education_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function creativ_education_customize_preview_js() {
	wp_enqueue_script( 'creativ_education_customizer', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'creativ_education_customize_preview_js' );
/**
 *
 */
function creativ_education_customize_backend_scripts() {

	wp_enqueue_style( 'creativ-education-admin-customizer-style', get_template_directory_uri() . '/inc/customizer/css/customizer-style.css' );
	wp_enqueue_script( 'creativ-education-admin-customizer', get_template_directory_uri() . '/inc/customizer/js/customizer-scipt.js', array( ), '20151215', true );
	wp_enqueue_script( 'creativ-education-customizer-controls', get_template_directory_uri() . '/inc/customizer/js/customizer-controls.js', array( ), '20151215', true );
}
add_action( 'customize_controls_enqueue_scripts', 'creativ_education_customize_backend_scripts', 10 );