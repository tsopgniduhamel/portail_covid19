<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
<div class="arimolite-logo">
<?php 
if ( has_custom_logo() && isset($logo[0]) ) { ?>
    <a class="logo-img" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>
<?php } ?>

<?php if ( !isset($logo[0]) ) { ?>
    <?php if ( is_front_page() ) { ?>
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?> </a></h1>
    <?php } else { ?>
    <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?> </a></h2>
    <?php } ?>
<?php  } ?>

<?php if ( !get_theme_mod( 'arimolite_hide_tagline') ) { ?>
    <span class="tag-line"><?php echo get_bloginfo( 'description'); ?></span>
<?php  } ?>
</div>