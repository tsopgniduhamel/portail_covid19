<?php


require_once trailingslashit( get_template_directory() ) . '/inc/widgets/slider-1.php';
require_once trailingslashit( get_template_directory() ) . '/inc/widgets/slider-3.php';
require_once trailingslashit( get_template_directory() ) . '/inc/widgets/slider-5.php';
require_once trailingslashit( get_template_directory() ) . '/inc/widgets/sidebar-widgets.php';

if ( ! function_exists( 'gridzine_load_home_widgets' ) ) :

    /**
     * Load widgets.
     *
     * @since 1.0.2
     */
    function gridzine_load_home_widgets() {


        register_widget('Gridzine_Recent_Post_Widget');
        register_widget('Gridzine_Author_Widget');
        register_widget( 'Gridzine_Slider_Widget_One' );
        register_widget( 'Gridzine_Slider_Widget_Three' );
        register_widget( 'Gridzine_Slider_Widget_Five' );

    }

endif;

add_action( 'widgets_init', 'gridzine_load_home_widgets' );
