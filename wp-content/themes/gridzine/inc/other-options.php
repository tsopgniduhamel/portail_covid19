<?php 

$wp_customize->add_panel( 'gridzine_other_options', array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Advanced Options', 'gridzine' ),
			'description' => __( 'Advanced Options', 'gridzine' ),
		)
	);	


$wp_customize->add_section( 'gridzine_pre_loader_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 10,
    'title'                 => __( 'Advanced Options ', 'gridzine' ),
    'description'           => __( 'Enable/Disable Preloader ', 'gridzine' ),
    'panel'				=> 'gridzine_other_options'
) );

$wp_customize->add_setting( 'gridzine_pre_loader_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'gridzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'gridzine_pre_loader_enable', array(
    'label'                 =>  __( 'Enable Disable Pre Loader', 'gridzine' ),
    'section'               => 'gridzine_pre_loader_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'gridzine_pre_loader_enable',
        
) );
$wp_customize->add_setting( 'gridzine_related_post_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'gridzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'gridzine_related_post_enable', array(
    'label'                 =>  __( 'Enable Disable Related Post', 'gridzine' ),
    'section'               => 'gridzine_pre_loader_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'gridzine_related_post_enable',
        
) );
$wp_customize->add_setting( 'gridzine_back_top_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'gridzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'gridzine_back_top_enable', array(
    'label'                 =>  __( 'Enable Disable Back To Top', 'gridzine' ),
    'section'               => 'gridzine_pre_loader_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'gridzine_back_top_enable',
        
) );
