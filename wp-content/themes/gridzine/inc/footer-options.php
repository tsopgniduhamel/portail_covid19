<?php 


$wp_customize->add_panel( 'gridzine_footer_layout', array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Footer Layout Options', 'gridzine' ),
			'description' => __( 'Footer Layout Options', 'gridzine' ),
		)
	);	



$wp_customize->add_section( 'gridzine_footer_layout_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 10,
    'title'                 => __( 'Select from 4 Different Footer Layout', 'gridzine' ),
    'description'           => __( 'Select Footer and Check Result Live in Customizer', 'gridzine' ),
    'panel'				=> 'gridzine_footer_layout'
) );

//Footer Layout Options

$wp_customize->add_setting( 'gridzine_footer_layout_options', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 1,
    'sanitize_callback'     => 'gridzine_sanitize_select'
) );

$wp_customize->add_control( 'gridzine_footer_layout_options', array(
    'label'                 =>  __( 'Select Footer Layout', 'gridzine' ),
    'section'               => 'gridzine_footer_layout_section',
    'type'                  => 'radio',
    'priority'              => 10,
    'settings'              => 'gridzine_footer_layout_options',
    'choices' 				=> array(
						    '1' => __( 'Footer One','gridzine' ),
						    '2' => __( 'Footer Two' ,'gridzine'),
						    '3' => __( 'Footer Three' ,'gridzine'),
						    '4' => __( 'Footer Four','gridzine' ),

						  ),
) );


$wp_customize->add_setting( 'gridzine_footer_social_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'gridzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'gridzine_footer_social_enable', array(
    'label'                 =>  __( 'Enable/Disable Footer Social Links', 'gridzine' ),
    'section'               => 'gridzine_footer_layout_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'gridzine_footer_social_enable',
        
) );

$wp_customize->add_setting( 'gridzine_footer_copyright_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'gridzine_footer_copyright_text', array(
    'label'                 =>  __( 'Branding Removal Text', 'gridzine' ),
    'section'               => 'gridzine_footer_layout_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_footer_copyright_text',
        
) );