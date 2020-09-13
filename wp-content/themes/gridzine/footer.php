<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gridzine
 */

?>
<?php if(is_front_page() || is_home() ): ?>
	<?php dynamic_sidebar('bottom'); ?>
<?php endif; ?>
	
	<?php if(get_theme_mod('gridzine_footer_layout_options')): 
		$footer_layout = esc_attr(get_theme_mod('gridzine_footer_layout_options'));
	 	get_template_part('footer-layouts/footer',$footer_layout);
	 	
	 else: 
	 	get_template_part('footer-layouts/footer','1'); 
	 endif; ?>
	
<?php wp_footer(); ?>
</body>
</html>