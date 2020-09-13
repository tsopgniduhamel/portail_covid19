<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package creativ_education
 */
/**
* Hook - creativ_education_action_doctype.
*
* @hooked creativ_education_doctype -  10
*/
do_action( 'creativ_education_action_doctype' );
?>
<head>
<?php
/**
* Hook - creativ_education_action_head.
*
* @hooked creativ_education_head -  10
*/
do_action( 'creativ_education_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - creativ_education_action_before.
*
* @hooked creativ_education_page_start - 10
*/
do_action( 'creativ_education_action_before' );

/**
*
* @hooked creativ_education_header_start - 10
*/
do_action( 'creativ_education_action_before_header' );

/**
*
*@hooked creativ_education_site_branding - 10
*@hooked creativ_education_header_end - 15 
*/
do_action('creativ_education_action_header');

/**
*
* @hooked creativ_education_content_start - 10
*/
do_action( 'creativ_education_action_before_content' );

/**
 * Banner start
 * 
 * @hooked creativ_education_banner_header - 10
*/
do_action( 'creativ_education_banner_header' );  