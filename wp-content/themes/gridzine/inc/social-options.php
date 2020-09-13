<?php 


$wp_customize->add_panel( 'gridzine_social_links', array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Social Link Options', 'gridzine' ),
			'description' => __( 'Social Link Options', 'gridzine' ),
		)
	);	



$wp_customize->add_section( 'gridzine_social_links_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 10,
    'title'                 => __( 'Social Media Links', 'gridzine' ),
    'description'           => __( 'Input Social Media Links ', 'gridzine' ),
    'panel'				=> 'gridzine_social_links'
) );



//Facebook Layout Options

$wp_customize->add_setting( 'gridzine_facebook_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_facebook_link_url', array(
    'label'                 =>  __( 'Paste Facebook Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_facebook_link_url',
) );

//Twitter Layout Options

$wp_customize->add_setting( 'gridzine_twitter_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_twitter_link_url', array(
    'label'                 =>  __( 'Paste Twitter Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_twitter_link_url',
) );

//Google Layout Options

$wp_customize->add_setting( 'gridzine_google_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_google_link_url', array(
    'label'                 =>  __( 'Paste GoogleLink Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_google_link_url',
) );

//Pinterest Layout Options

$wp_customize->add_setting( 'gridzine_pinterest_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_pinterest_link_url', array(
    'label'                 =>  __( 'Paste Pinterest Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_pinterest_link_url',
) );

//Instagram Layout Options

$wp_customize->add_setting( 'gridzine_instagram_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_instagram_link_url', array(
    'label'                 =>  __( 'Paste Instagram Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_instagram_link_url',
) );

//Linkedin Layout Options

$wp_customize->add_setting( 'gridzine_linkedin_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_linkedin_link_url', array(
    'label'                 =>  __( 'Paste Linkedin Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_linkedin_link_url',
) );

//Youtube Layout Options

$wp_customize->add_setting( 'gridzine_youtube_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_youtube_link_url', array(
    'label'                 =>  __( 'Paste Youtube Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_youtube_link_url',
) );

//Whatsapp Layout Options

$wp_customize->add_setting( 'gridzine_whatsapp_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_whatsapp_link_url', array(
    'label'                 =>  __( 'Paste Whatsapp Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_whatsapp_link_url',
) );

//Skype Layout Options

$wp_customize->add_setting( 'gridzine_skype_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_skype_link_url', array(
    'label'                 =>  __( 'Paste Skype Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_skype_link_url',
) );

//We Chat Layout Options

$wp_customize->add_setting( 'gridzine_wechat_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'gridzine_wechat_link_url', array(
    'label'                 =>  __( 'Paste We Chat  Link Here', 'gridzine' ),
    'section'               => 'gridzine_social_links_section',
    'type'                  => 'text',
    'priority'              => 10,
    'settings'              => 'gridzine_wechat_link_url',
) );

