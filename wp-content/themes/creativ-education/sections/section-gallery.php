<?php 
/**
 * Template part for displaying Gallery Section
 *
 *@package creativ_education
 */
?>
    <?php 
        $gallery_title       = creativ_education_get_option( 'gallery_title' );
        $gallery_post[0]     = absint(creativ_education_get_option( 'gallery_first' ));
        $gallery_post[1]     = absint(creativ_education_get_option( 'gallery_second' ));
        $gallery_post[2]     = absint(creativ_education_get_option( 'gallery_third' ));
        $gallery_post[3]     = absint(creativ_education_get_option( 'gallery_fourth' ));
        $gallery_post[4]     = absint(creativ_education_get_option( 'gallery_fifth' ));
        $gallery_post[5]     = absint(creativ_education_get_option( 'gallery_sixth' ));
    ?>

    <?php if(!empty($gallery_title)):?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($gallery_title);?></h2>
        </div><!-- .section-header -->
    <?php endif;?>

    <div class="section-content col-3">
        <?php $args = array (
            'post_type' => 'page',
            'post_per_page' => 3,
            'post__in'         => $gallery_post,
            'orderby'           =>'post__in',
        );        
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
        $i=-1;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>
            
            <article>
                <div class="overlay"></div>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="featured-image">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>
                    </div><!-- .featured-image -->
                <?php endif; ?>

                <div class="entry-container">
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    </header>

                    <div class="entry-content">
                        <?php
                            $excerpt = creativ_education_the_excerpt( 10 );
                            echo wp_kses_post( wpautop( $excerpt ) );
                        ?>
                    </div><!-- .entry-content -->
                </div><!-- .entry-container -->
            </article>

          <?php endwhile;?>
          <?php wp_reset_postdata(); ?>
        <?php endif;?>
    </div>