<?php
/**
 * Default theme options.
 *
 * @package creativ_education
 */

if ( ! function_exists( 'creativ_education_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function creativ_education_get_default_theme_options() {

	$defaults = array();

	$defaults['show_header_contact_info'] 	= true;
    $defaults['header_email']             	= __( 'info@creativthemes.com','creativ-education' );
    $defaults['header_phone' ]            	= __( '+1-541-754-3010','creativ-education' );
    $defaults['header_location' ]           = __( 'London, UK','creativ-education' );
    $defaults['show_header_social_links'] 	= true;

    // Homepage Options
	$defaults['enable_frontpage_content'] 	= false;

	// Featured Slider Section
	$defaults['disable_featured_slider']	= true;
	$defaults['featured_slider_first']	   	= 0;
	$defaults['featured_slider_second']	   	= 0;
	$defaults['featured_slider_third']	   	= 0;

	//Featured Courses Us Section	
	$defaults['disable_courses_section']	   	= true;
	$defaults['courses_title']	   	 		= esc_html__( 'Featured Courses', 'creativ-education' );
	$defaults['courses_first']	   			= 0;
	$defaults['courses_second']	   			= 0;
	$defaults['courses_third']	   			= 0;

	//Cta Section	
	$defaults['disable_cta_section']	   	= true;
	$defaults['cta_description']	   	 	= esc_html__( 'Apply Now For Admission to Creativ Education', 'creativ-education' );
	$defaults['cta_button_label']	   	 	= esc_html__( 'Learn More', 'creativ-education' );
	$defaults['cta_button_url']	   	 		= '#';

	// Our Service Section
	$defaults['disable_service_section']	= true;
	$defaults['service_title']	   	 		= esc_html__( 'Featured Services', 'creativ-education' );
	$defaults['service_first']	   			= 0;
	$defaults['service_second']	   			= 0;
	$defaults['service_third']	   			= 0;

	// Gallery Section
	$defaults['disable_gallery_section']	= true;
	$defaults['gallery_title']	   	 		= esc_html__( 'Featured Gallery', 'creativ-education' );
	$defaults['gallery_first']	   			= 0;
	$defaults['gallery_second']	   			= 0;
	$defaults['gallery_third']	   			= 0;
	$defaults['gallery_fourth']	   			= 0;
	$defaults['gallery_fifth']	   			= 0;
	$defaults['gallery_sixth']	   			= 0;

	// Blog Section
	$defaults['disable_blog_section']		= true;
	$defaults['latest_blog_title']	   	 	= esc_html__( 'Latest Posts', 'creativ-education' );
	$defaults['blog_category']	   			= 0; 
	$defaults['blog_number']				= 3;

	//General Section
	$defaults['readmore_text']				= esc_html__('Read More','creativ-education');
	$defaults['excerpt_length']				= 25;
	$defaults['layout_options']				= 'right-sidebar';	

	//Footer section 		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'creativ-education' );

	// Pass through filter.
	$defaults = apply_filters( 'creativ_education_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'creativ_education_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function creativ_education_get_option( $key ) {

		$default_options = creativ_education_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;