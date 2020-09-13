<?php
/**
 * Home Page Options.
 *
 * @package Creativ Education
 */

$default = creativ_education_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'creativ-education' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Featured Slider Section
$wp_customize->add_section( 'section_featured_slider',
	array(
		'title'      => __( 'Featured Slider', 'creativ-education' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

// Disable Slider Section
$wp_customize->add_setting('theme_options[disable_featured_slider]', 
	array(
	'default' 			=> $default['disable_featured_slider'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'creativ_education_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_featured_slider]', 
	array(		
	'label' 	=> __('Disable Slider Section', 'creativ-education'),
	'section' 	=> 'section_featured_slider',
	'settings'  => 'theme_options[disable_featured_slider]',
	'type' 		=> 'checkbox',	
	)
);

// Featured Slider First Page
$wp_customize->add_setting('theme_options[featured_slider_first]', 
	array(
	'default'           => $default['featured_slider_first'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[featured_slider_first]', 
	array(
	'label'       => __('Select First Page', 'creativ-education'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[featured_slider_first]',		
	'type'        => 'dropdown-pages'
	)
);

// Featured Slider Second Page
$wp_customize->add_setting('theme_options[featured_slider_second]', 
	array(
	'default'           => $default['featured_slider_second'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[featured_slider_second]', 
	array(
	'label'       => __('Select Second Page', 'creativ-education'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[featured_slider_second]',		
	'type'        => 'dropdown-pages'
	)
);


// Featured Slider Third Page
$wp_customize->add_setting('theme_options[featured_slider_third]', 
	array(
	'default'           => $default['featured_slider_third'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[featured_slider_third]', 
	array(
	'label'       => __('Select Third Page', 'creativ-education'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[featured_slider_third]',		
	'type'        => 'dropdown-pages'
	)
);

// Featured Courses Section
$wp_customize->add_section( 'section_home_courses',
	array(
		'title'      => __( 'Featured Courses', 'creativ-education' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Disable Courses Section
$wp_customize->add_setting('theme_options[disable_courses_section]', 
	array(
	'default' 			=> $default['disable_courses_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'creativ_education_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_courses_section]', 
	array(		
	'label' 	=> __('Disable Courses Section', 'creativ-education'),
	'section' 	=> 'section_home_courses',
	'settings'  => 'theme_options[disable_courses_section]',
	'type' 		=> 'checkbox',	
	)
);

//Courses Section  title
$wp_customize->add_setting('theme_options[courses_title]', 
	array(
	'default'           => $default['courses_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[courses_title]', 
	array(
	'label'       => __('Section Title', 'creativ-education'),
	'section'     => 'section_home_courses',   
	'settings'    => 'theme_options[courses_title]',		
	'type'        => 'text'
	)
);

// Courses First Page
$wp_customize->add_setting('theme_options[courses_first]', 
	array(
	'default'           => $default['courses_first'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[courses_first]', 
	array(
	'label'       => __('Select First Page', 'creativ-education'),
	'section'     => 'section_home_courses',   
	'settings'    => 'theme_options[courses_first]',		
	'type'        => 'dropdown-pages'
	)
);

// Courses Second Page
$wp_customize->add_setting('theme_options[courses_second]', 
	array(
	'default'           => $default['courses_second'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[courses_second]', 
	array(
	'label'       => __('Select Second Page', 'creativ-education'),
	'section'     => 'section_home_courses',   
	'settings'    => 'theme_options[courses_second]',		
	'type'        => 'dropdown-pages'
	)
);

// Courses Third Page
$wp_customize->add_setting('theme_options[courses_third]', 
	array(
	'default'           => $default['courses_third'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[courses_third]', 
	array(
	'label'       => __('Select Third Page', 'creativ-education'),
	'section'     => 'section_home_courses',   
	'settings'    => 'theme_options[courses_third]',		
	'type'        => 'dropdown-pages'
	)
);


// Call to action section
$wp_customize->add_section( 'section_cta',
	array(
		'title'      => __( 'Call To Action', 'creativ-education' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Disable Cta Section
$wp_customize->add_setting('theme_options[disable_cta_section]', 
	array(
	'default' 			=> $default['disable_cta_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'creativ_education_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_cta_section]', 
	array(		
	'label' 	=> __('Disable Call to action section', 'creativ-education'),
	'section' 	=> 'section_cta',
	'settings'  => 'theme_options[disable_cta_section]',
	'type' 		=> 'checkbox',	
	)
);

// Cta Description
$wp_customize->add_setting('theme_options[cta_description]', 
	array(
	'default' 			=> $default['cta_description'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[cta_description]', 
	array(
	'label'       => __('Cta Description', 'creativ-education'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_description]',		
	'type'        => 'textarea'
	)
);
// Cta Button Text
$wp_customize->add_setting('theme_options[cta_button_label]', 
	array(
	'default' 			=> $default['cta_button_label'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[cta_button_label]', 
	array(
	'label'       => __('Button Label', 'creativ-education'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_button_label]',		
	'type'        => 'text'
	)
);
// Cta Button Url
$wp_customize->add_setting('theme_options[cta_button_url]', 
	array(
	'default' 			=> $default['cta_button_url'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[cta_button_url]', 
	array(
	'label'       => __('Button Url', 'creativ-education'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_button_url]',		
	'type'        => 'url'
	)
);

// Featured Services Section
$wp_customize->add_section( 'section_home_service',
	array(
		'title'      => __( 'Featured Services', 'creativ-education' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Disable Service Section
$wp_customize->add_setting('theme_options[disable_service_section]', 
	array(
	'default' 			=> $default['disable_service_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'creativ_education_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_service_section]', 
	array(		
	'label' 	=> __('Disable Services Section', 'creativ-education'),
	'section' 	=> 'section_home_service',
	'settings'  => 'theme_options[disable_service_section]',
	'type' 		=> 'checkbox',	
	)
);

//Services Section title
$wp_customize->add_setting('theme_options[service_title]', 
	array(
	'default'           => $default['service_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[service_title]', 
	array(
	'label'       => __('Section Title', 'creativ-education'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_title]',		
	'type'        => 'text'
	)
);

// Services First Page
$wp_customize->add_setting('theme_options[service_first]', 
	array(
	'default'           => $default['service_first'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[service_first]', 
	array(
	'label'       => __('Select First Page', 'creativ-education'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_first]',		
	'type'        => 'dropdown-pages'
	)
);

// Services Second Page
$wp_customize->add_setting('theme_options[service_second]', 
	array(
	'default'           => $default['service_second'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[service_second]', 
	array(
	'label'       => __('Select Second Page', 'creativ-education'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_second]',		
	'type'        => 'dropdown-pages'
	)
);

// Services Third Page
$wp_customize->add_setting('theme_options[service_third]', 
	array(
	'default'           => $default['service_third'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[service_third]', 
	array(
	'label'       => __('Select Third Page', 'creativ-education'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_third]',		
	'type'        => 'dropdown-pages'
	)
);

// Featured Gallery Section
$wp_customize->add_section( 'section_home_gallery',
	array(
		'title'      => __( 'Featured Gallery', 'creativ-education' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Disable Gallery Section
$wp_customize->add_setting('theme_options[disable_gallery_section]', 
	array(
	'default' 			=> $default['disable_gallery_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'creativ_education_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_gallery_section]', 
	array(		
	'label' 	=> __('Disable Gallery Section', 'creativ-education'),
	'section' 	=> 'section_home_gallery',
	'settings'  => 'theme_options[disable_gallery_section]',
	'type' 		=> 'checkbox',	
	)
);

//Gallery Section title
$wp_customize->add_setting('theme_options[gallery_title]', 
	array(
	'default'           => $default['gallery_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[gallery_title]', 
	array(
	'label'       => __('Section Title', 'creativ-education'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_title]',		
	'type'        => 'text'
	)
);

// Gallery First Page
$wp_customize->add_setting('theme_options[gallery_first]', 
	array(
	'default'           => $default['gallery_first'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[gallery_first]', 
	array(
	'label'       => __('Select First Page', 'creativ-education'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_first]',		
	'type'        => 'dropdown-pages'
	)
);

// Gallery Second Page
$wp_customize->add_setting('theme_options[gallery_second]', 
	array(
	'default'           => $default['gallery_second'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[gallery_second]', 
	array(
	'label'       => __('Select Second Page', 'creativ-education'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_second]',		
	'type'        => 'dropdown-pages'
	)
);

// Gallery Third Page
$wp_customize->add_setting('theme_options[gallery_third]', 
	array(
	'default'           => $default['gallery_third'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[gallery_third]', 
	array(
	'label'       => __('Select Third Page', 'creativ-education'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_third]',		
	'type'        => 'dropdown-pages'
	)
);

// Gallery Fourth Page
$wp_customize->add_setting('theme_options[gallery_fourth]', 
	array(
	'default'           => $default['gallery_fourth'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[gallery_fourth]', 
	array(
	'label'       => __('Select Fourth Page', 'creativ-education'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_fourth]',		
	'type'        => 'dropdown-pages'
	)
);

// Gallery Fifth Page
$wp_customize->add_setting('theme_options[gallery_fifth]', 
	array(
	'default'           => $default['gallery_fifth'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[gallery_fifth]', 
	array(
	'label'       => __('Select Fifth Page', 'creativ-education'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_fifth]',		
	'type'        => 'dropdown-pages'
	)
);

// Gallery Sixth Page
$wp_customize->add_setting('theme_options[gallery_sixth]', 
	array(
	'default'           => $default['gallery_sixth'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'creativ_education_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[gallery_sixth]', 
	array(
	'label'       => __('Select Sixth Page', 'creativ-education'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_sixth]',		
	'type'        => 'dropdown-pages'
	)
);
// Latest Blog Section
$wp_customize->add_section( 'section_home_blog',
	array(
		'title'      => __( 'Blog Section', 'creativ-education' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Disable Blog Section
$wp_customize->add_setting('theme_options[disable_blog_section]', 
	array(
	'default' 			=> $default['disable_blog_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'creativ_education_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[disable_blog_section]', 
	array(		
	'label' 	=> __('Disable Blog Section', 'creativ-education'),
	'section' 	=> 'section_home_blog',
	'settings'  => 'theme_options[disable_blog_section]',
	'type' 		=> 'checkbox',	
	)
);
//Service Blog title
$wp_customize->add_setting('theme_options[latest_blog_title]', 
	array(
	'default'           => $default['latest_blog_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[latest_blog_title]', 
	array(
	'label'       => __('Blog Title', 'creativ-education'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[latest_blog_title]',		
	'type'        => 'text'
	)
);
// Setting  Blog Category.
$wp_customize->add_setting( 'theme_options[blog_category]',
	array(
	'default'           => $default['blog_category'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Creativ_Education_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',
		array(
		'label'    => __( 'Select Category', 'creativ-education' ),
		'section'  => 'section_home_blog',
		'settings' => 'theme_options[blog_category]',		
		'priority' => 100,
		)
	)
);

// Blog Number.
$wp_customize->add_setting( 'theme_options[blog_number]',
	array(
		'default'           => $default['blog_number'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'creativ_education_sanitize_number_range',
		)
);
$wp_customize->add_control( 'theme_options[blog_number]',
	array(
		'label'       => __( 'Number For Blog', 'creativ-education' ),
		'section'     => 'section_home_blog',
		'type'        => 'number',
		'priority'    => 100,
		'input_attrs' => array( 'min' => 1, 'max' => 6, 'step' => 1, 'style' => 'width: 115px;' ),
		
	)
);