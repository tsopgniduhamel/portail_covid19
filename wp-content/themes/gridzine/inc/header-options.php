<?php 


$wp_customize->add_panel( 'gridzine_header_layout', array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Header Layout Options', 'gridzine' ),
			'description' => __( 'Header Layout Options', 'gridzine' ),
		)
	);	



$wp_customize->add_section( 'gridzine_header_layout_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 10,
    'title'                 => __( 'Select from 5 Different Layout', 'gridzine' ),
    'description'           => __( 'Select Header and Check Result Live in Customizer', 'gridzine' ),
    'panel'				=> 'gridzine_header_layout'
) );

//Header Layout Options

$wp_customize->add_setting( 'gridzine_header_layout_options', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 1,
    'sanitize_callback'     => 'gridzine_sanitize_select'
) );

$wp_customize->add_control( 'gridzine_header_layout_options', array(
    'label'                 =>  __( 'Select Header Layout', 'gridzine' ),
    'section'               => 'gridzine_header_layout_section',
    'type'                  => 'radio',
    'priority'              => 10,
    'settings'              => 'gridzine_header_layout_options',
    'choices' 				=> array(
						    '1' => __( 'Header One','gridzine' ),
						    '2' => __( 'Header Two','gridzine'),
						    '3' => __( 'Header Three','gridzine' ),
						    '4' => __( 'Header Four','gridzine' ),
						    '5' => __( 'Header Five','gridzine'),

						  ),
) );

$wp_customize->add_setting( 'gridzine_header_social_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'gridzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'gridzine_header_social_enable', array(
    'label'                 =>  __( 'Enable/Disable Header Social Links', 'gridzine' ),
    'section'               => 'gridzine_header_layout_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'gridzine_header_social_enable',
        
) );

$wp_customize->add_setting( 'gridzine_header_search_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'gridzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'gridzine_header_search_enable', array(
    'label'                 =>  __( 'Enable Disable Search at Header', 'gridzine' ),
    'section'               => 'gridzine_header_layout_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'gridzine_header_search_enable',
        
) );

$wp_customize->add_setting( 'gridzine_header_email_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'gridzine_header_email_number', array(
    'label'                 =>  __( 'Header Three Email Addresss', 'gridzine' ),
    'section'               => 'gridzine_header_layout_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_header_email_number',
        
) );

$wp_customize->add_setting( 'gridzine_header_phone_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'gridzine_header_phone_number', array(
    'label'                 =>  __( 'Header Three Phone Number', 'gridzine' ),
    'section'               => 'gridzine_header_layout_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_header_phone_number',
        
) );