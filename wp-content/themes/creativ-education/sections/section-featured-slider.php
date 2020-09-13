<?php 
/**
 * Template part for displaying Featured Slider Section
 *
 *@package creativ_education
 */
?>
    <?php 
        $featured_slider_post[0]     = absint(creativ_education_get_option( 'featured_slider_first' ));
        $featured_slider_post[1]     = absint(creativ_education_get_option( 'featured_slider_second' ));
        $featured_slider_post[2]     = absint(creativ_education_get_option( 'featured_slider_third' ));
    ?>

    <div class="featured-slider-wrapper" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":true, "autoplay": true, "fade": false }'>
        <?php $args = array (
            'post_type' => 'page',
            'post_per_page' => 3,
            'post__in'         => $featured_slider_post,
            'orderby'           =>'post__in',
        );   

        $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                    <article class="slick-item" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
                        <div class="wrapper">
                            <div class="featured-content-wrapper">
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
                                    <a href="<?php the_permalink();?>" class="btn btn-primary"><?php echo esc_html($readmore_text);?></a>
                                </div><!-- .read-more -->
                            </div><!-- .featured-content-wrapper -->
                        </div><!-- .wrapper -->
                    </article><!-- .slick-item -->
                <?php endwhile;?>
                <?php wp_reset_postdata();
            endif;?>
    </div><!-- .featured-slider-wrapper -->