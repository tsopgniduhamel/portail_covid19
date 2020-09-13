<?php 
/**
 * Template part for displaying Services Section
 *
 *@package creativ_education
 */
?>
    <?php 
        $service_title       = creativ_education_get_option( 'service_title' );
        $service_post[0]     = absint(creativ_education_get_option( 'service_first' ));
        $service_post[1]     = absint(creativ_education_get_option( 'service_second' ));
        $service_post[2]     = absint(creativ_education_get_option( 'service_third' ));
    ?>

    <?php if(!empty($service_title)):?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($service_title);?></h2>
        </div><!-- .section-header -->
    <?php endif;?>

    <div class="section-content col-3">
        <?php $args = array (
            'post_type' => 'page',
            'post_per_page' => 3,
            'post__in'         => $service_post,
            'orderby'           =>'post__in',
        );        
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
        $i=-1;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>
            
            <article>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="featured-image">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>
                    </div><!-- .featured-image -->
                <?php endif; ?>
                
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                </header>

                <div class="entry-content">
                    <?php
                        $excerpt = creativ_education_the_excerpt( 20 );
                        echo wp_kses_post( wpautop( $excerpt ) );
                    ?>
                </div><!-- .entry-content -->

                <div class="read-more">
                    <?php $readmore_text = creativ_education_get_option( 'readmore_text' );?>
                    <a href="<?php the_permalink();?>"><?php echo esc_html($readmore_text);?></a>
                </div><!-- .read-more -->
            </article>

          <?php endwhile;?>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
    </div>