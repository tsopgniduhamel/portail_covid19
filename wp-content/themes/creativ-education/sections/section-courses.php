<?php 
/**
 * Template part for displaying About Section
 *
 *@package creativ_education
 */
?>
    <?php 
        $courses_title       = creativ_education_get_option( 'courses_title' );
        $courses_post[0]     = absint(creativ_education_get_option( 'courses_first' ));
        $courses_post[1]     = absint(creativ_education_get_option( 'courses_second' ));
        $courses_post[2]     = absint(creativ_education_get_option( 'courses_third' ));
    ?>

    <?php if(!empty($courses_title)):?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($courses_title);?></h2>
        </div><!-- .section-header -->
    <?php endif;?>

    <div class="section-content col-3">
        <?php $args = array (
            'post_type' => 'page',
            'post_per_page' => 3,
            'post__in'         => $courses_post,
            'orderby'           =>'post__in',
        );        
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
        $i=-1;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>
            
            <article>
                <div class="featured-image">
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>"/>
                    </a>
                <?php endif; ?>
                    
                </div><!-- .featured-image -->
                
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