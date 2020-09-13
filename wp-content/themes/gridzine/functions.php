<?php
/**
 * Gridzine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gridzine
 */

if ( ! function_exists( 'gridzine_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gridzine_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gridzine, use a find and replace
		 * to change 'gridzine' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gridzine', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'gridzine-list-thumb', 1200, 800, true ); 
		add_image_size( 'gridzine-slider-grid', 1920, 800, true );
		add_image_size( 'gridzine-slider-grid-small', 560, 270, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'top' => esc_html__( 'Top left', 'gridzine' ),
			'main' => esc_html__( 'Middle Center', 'gridzine' ),
			'footer' => esc_html__( 'Footer Righr', 'gridzine' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gridzine_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gridzine_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gridzine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gridzine_content_width', 640 );
}
add_action( 'after_setup_theme', 'gridzine_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gridzine_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gridzine' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gridzine' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Below Menu', 'gridzine' ),
		'id'            => 'top',
		'description'   => esc_html__( 'Add Slider Widget Here.', 'gridzine' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Above Footer', 'gridzine' ),
		'id'            => 'bottom',
		'description'   => esc_html__( 'Add widgets here.', 'gridzine' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'gridzine' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'gridzine' ),
		'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'gridzine' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'gridzine' ),
		'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'gridzine' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'gridzine' ),
		'before_widget' => '<div id="%1$s" class="single-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gridzine_widgets_init' );

if ( ! function_exists( 'gridzine_fonts_url' ) ) :
	/**
	 * Register Google fonts for speedster
	 *
	 * Create your own gridzine_fonts_url() function to override in a child theme.
	 *
	 * @since speedster 1.0.3
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function gridzine_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'gridzine' ) ) {
			$fonts[] = 'Roboto:400,500,700';
		}

		/* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'gridzine' ) ) {
			$fonts[] = 'Playfair Display:400,700,400italic,700italic';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}

		return esc_url( $fonts_url );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function gridzine_scripts() {

	//Load Google Font
	wp_enqueue_style( 'gridzine-google-fonts', gridzine_fonts_url(), array(), null );

	// Load  Bootstrap CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/scorpionthemes/css/bootstrap.css', array(), '4.2.2' );

	// Load fancybox
	wp_enqueue_style( 'fancybox', get_template_directory_uri() .'/scorpionthemes/css/fancybox.css', array(), '1.0.0' );

	// Load font awesome css
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/scorpionthemes/css/font-awesome.css', array(), '1.0.0' );

	// Load owl carousel css
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/scorpionthemes/css/owl-carousel.css', array(), '1.0.0' );

	// Load animate css
	wp_enqueue_style( 'animate', get_template_directory_uri() .'/scorpionthemes/css/animate.css', array(), '1.0.0' );

	//load reset CSS
	wp_enqueue_style( 'gridzine-reset', get_template_directory_uri() .'/scorpionthemes/css/default.css', array(), '1.0.0' );

	//Load style css
	wp_enqueue_style( 'gridzine-style', get_stylesheet_uri() );
	// Load Font Awesome css
	wp_enqueue_style( 'gridzine-responsive', get_template_directory_uri() .'/scorpionthemes/css/responsive.css', array(), '2.0.0' );
	// Load Font Awesome css
	wp_enqueue_style( 'slick-nav', get_template_directory_uri() .'/scorpionthemes/css/slicknav.css', array(), '2.0.0' );

	if(is_rtl()){
		// Load  Bootstrap CSS
	wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() .'/scorpionthemes/css/bootstrap-rtl.css', array(), '4.2.2' );

	// Load fancybox
	wp_enqueue_style( 'fancybox-rtl', get_template_directory_uri() .'/scorpionthemes/css/fancybox-rlt.css', array(), '1.0.0' );


	// Load owl carousel css
	wp_enqueue_style( 'owl-carousel-rtl', get_template_directory_uri() .'/scorpionthemes/css/owl-carousel-rtl.css', array(), '1.0.0' );

	// Load animate css
	wp_enqueue_style( 'animate-rtl', get_template_directory_uri() .'/scorpionthemes/css/animate-rtl.css', array(), '1.0.0' );

	//load reset CSS
	wp_enqueue_style( 'gridzine-reset-rtl', get_template_directory_uri() .'/scorpionthemes/css/default-rtl.css', array(), '1.0.0' );

	// Load Font Awesome css
	wp_enqueue_style( 'gridzine-responsive-rtl', get_template_directory_uri() .'/scorpionthemes/css/responsive-rtl.css', array(), '2.0.0' );
	// Load Font Awesome css
	wp_enqueue_style( 'slick-nav-rtl', get_template_directory_uri() .'/scorpionthemes/css/slicknav-rtl.css', array(), '2.0.0' );

	wp_enqueue_style( 'gridzine-rtl', get_template_directory_uri() .'/style-rtl.css', array(), '2.0.0' );
	} // rtl css end

	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/scorpionthemes/js/popper.js', array('jquery'), '1.0.0', true );	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/scorpionthemes/js/bootstrap.js', array('jquery'), '4.2.0', true );
	wp_enqueue_script( 'slick-nav', get_template_directory_uri() . '/scorpionthemes/js/slick-nav.js', array(), '1.0.0', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/scorpionthemes/js/magnific-popup.js', array(), '1.0.0', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/scorpionthemes/js/fancybox.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/scorpionthemes/js/owl-carousel.js', array(), '1.0.0', true );
	wp_enqueue_script( 'scroll-up', get_template_directory_uri() . '/scorpionthemes/js/scrollup.js', array(), '1.0.0', true );
	wp_enqueue_script( 'gridzine-active', get_template_directory_uri() . '/scorpionthemes/js/active.js', array('jquery'), '1.0.0', true );
	

	wp_enqueue_script( 'gridzine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// SCRIPTS
		wp_enqueue_script( 'basic-html5shiv', get_template_directory_uri() . '/scorpionthemes/js/html5shiv.js', array(), '3.7.3', true );
		wp_script_add_data( 'basic-html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script( 'respond', get_template_directory_uri() . '/scorpionthemes/js/respond.js', array(), '3.7.3', true );
		wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gridzine_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * boostrap Navwalker.
 */
require get_template_directory() . '/inc/third-party/wp_bootstrap_navwalker.php';
/**
 * BreadCrumb
 */
require get_template_directory() . '/inc/third-party/breadcrumb-trail.php';

/**
 * Load Widget Helpers Functions.
 */
require get_template_directory() . '/inc/widgets/widget_init.php';

// Other Options
require get_template_directory() . '/inc/hooks.php';

