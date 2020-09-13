<?php

$default = creativ_education_get_default_theme_options();
/**
* Add Header Top Panel
*/
$wp_customize->add_panel( 'header_top_panel', array(
    'title'          => __( 'Header Top', 'creativ-education' ),
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
) );

/** Header contact info section */
$wp_customize->add_section(
    'header_contact_info_section',
    array(
        'title'    => __( 'Contact Info', 'creativ-education' ),
        'panel'    => 'header_top_panel',
        'priority' => 10,
    )
);

/** Header contact info control */
$wp_customize->add_setting( 
    'theme_options[show_header_contact_info]', 
    array(
        'default'           => $default['show_header_contact_info'],
        'sanitize_callback' => 'creativ_education_sanitize_checkbox',
    ) 
);

$wp_customize->add_control(
    'theme_options[show_header_contact_info]',
    array(
        'label'       => __( 'Show Contact Info', 'creativ-education' ),
        'description' => __( 'Enable to show contact info in header top.', 'creativ-education' ),
        'section'     => 'header_contact_info_section',
        'type'        => 'checkbox',
    )
);

/** Location */
$wp_customize->add_setting( 'theme_options[header_location]', array(
    'default'           => $default['header_location'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_location]',
    array(
        'label'           => __( 'Location', 'creativ-education' ),
        'description'     => __( 'Enter Location.', 'creativ-education' ),
        'section'         => 'header_contact_info_section',
    )
);

/** Phone */
$wp_customize->add_setting( 'theme_options[header_phone]', array(
    'default'           => $default['header_phone'],
    'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control(
    'theme_options[header_phone]',
    array(
        'label'           => __( 'Phone', 'creativ-education' ),
        'description'     => __( 'Enter phone number.', 'creativ-education' ),
        'section'         => 'header_contact_info_section',
    )
);

/** Email */
$wp_customize->add_setting( 
    'theme_options[header_email]', 
    array(
        'default'           => $default['header_email'],
        'sanitize_callback' => 'sanitize_email',
    ) 
);

$wp_customize->add_control(
    'theme_options[header_email]',
    array(
        'label'           => __( 'Email', 'creativ-education' ),
        'description'     => __( 'Enter valid email address.', 'creativ-education' ),
        'section'         => 'header_contact_info_section',
    )
);

/** Header social links section */
$wp_customize->add_section(
    'header_social_links_section',
    array(
        'title'    => __( 'Social Links', 'creativ-education' ),
        'panel'    => 'header_top_panel',
        'priority' => 20,
    )
);

/** Header social links control */
$wp_customize->add_setting( 
    'theme_options[show_header_social_links]', 
    array(
        'default'           => $default['show_header_social_links'],
        'sanitize_callback' => 'creativ_education_sanitize_checkbox',
    ) 
);

$wp_customize->add_control(
    'theme_options[show_header_social_links]',
    array(
        'label'       => __( 'Show Social Links', 'creativ-education' ),
        'description' => __( 'Enable to show social links in header top.', 'creativ-education' ),
        'section'     => 'header_social_links_section',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting( 
    'theme_options[social_link_1]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_1]',
    array(
        'label'           => __( 'Social Link 1', 'creativ-education' ),
        'description'     => __( 'Enter valid url.', 'creativ-education' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
    )
);

$wp_customize->add_setting( 
    'theme_options[social_link_2]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_2]',
    array(
        'label'           => __( 'Social Link 2', 'creativ-education' ),
        'description'     => __( 'Enter valid url.', 'creativ-education' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
    )
);
$wp_customize->add_setting( 
    'theme_options[social_link_3]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_3]',
    array(
        'label'           => __( 'Social Link 3', 'creativ-education' ),
        'description'     => __( 'Enter valid url.', 'creativ-education' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
    )
);

$wp_customize->add_setting( 
    'theme_options[social_link_4]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_4]',
    array(
        'label'           => __( 'Social Link 4', 'creativ-education' ),
        'description'     => __( 'Enter valid url.', 'creativ-education' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
    )
);

$wp_customize->add_setting( 
    'theme_options[social_link_5]', 
    array(
        'sanitize_callback' => 'esc_url_raw',
    ) 
);

$wp_customize->add_control(
    'theme_options[social_link_5]',
    array(
        'label'           => __( 'Social Link 5', 'creativ-education' ),
        'description'     => __( 'Enter valid url.', 'creativ-education' ),
        'section'         => 'header_social_links_section',
        'type'            => 'url',
    )
);