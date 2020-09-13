<?php 
/**
 * Template part for displaying About Section
 *
 *@package creativ_education
 */
?>
    <?php 
        $cta_description = creativ_education_get_option( 'cta_description' );
        $cta_button_label = creativ_education_get_option( 'cta_button_label' );
        $cta_button_url = creativ_education_get_option( 'cta_button_url' );
    ?>

    <?php if ( !empty($cta_description ) )  :?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($cta_description); ?></h2>
        </div><!-- .section-header -->
    <?php endif;?>

    <?php if ( !empty($cta_button_label ) )  :?>
        <div class="read-more">
            <a href="<?php echo esc_url($cta_button_url); ?>" class="btn btn-primary"><?php echo esc_html($cta_button_label); ?></a>
        </div><!-- .read-more -->
    <?php endif;?>
