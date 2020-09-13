<?php

if ( ! function_exists( 'gridzine_social_links' ) ) :

function gridzine_social_links() {

							echo'<ul class="social">';

							if(get_theme_mod('gridzine_facebook_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_facebook_link_url')); ?>"><i class="fa fa-facebook"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_twitter_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_twitter_link_url')); ?>"><i class="fa fa-twitter"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_linkedin_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_linkedin_link_url')); ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_pinterest_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_pinterest_link_url')); ?>"><i class="fa fa-pinterest"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_google_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_google_link_url')); ?>"><i class="fa fa-google"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_youtube_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_youtube_link_url')); ?>"><i class="fa fa-youtube"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_whatsapp_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_whatsapp_link_url')); ?>"><i class="fa fa-whatsapp"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_wechat_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_wechat_link_url')); ?>"><i class="fa fa-wechat"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_youtube_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_youtube_link_url')); ?>"><i class="fa fa-youtube"></i></a></li>
							<?php endif;
							if(get_theme_mod('gridzine_skype_link_url')): ?>
								<li><a href="<?php echo esc_url(get_theme_mod('gridzine_skype_link_url')); ?>"><i class="fa fa-skype"></i></a></li>
							<?php endif;								


							echo '</ul>';
					}
							

endif;

if(!function_exists('gridzine_copyright_info')):
	function gridzine_copyright_info(){
		printf( esc_html__( 'Theme: %1$s by %2$s', 'gridzine' ), 'Gridzine', '<a href="http://scorpionthemes.com">scorpionthemes</a>' );
	}
endif;

if(!function_exists('gridzine_related_post')):

	function gridzine_related_post() {


		if(get_theme_mod('gridzine_related_post_enable')) {
						echo'<div class="row single"><div class="col-12"><div class="related-posts">';
									
									// Calling function for related posts
							$show_related_posts = get_theme_mod( 'gridzine_related_post_enable', 1 );

					        $qargs = array(
					            'no_found_rows'       => true,
					            'ignore_sticky_posts' => true,
					            'posts_per_page'      => 4
					        );

					        $current_object = get_queried_object();

					        if ( $current_object instanceof WP_Post ) {
					            $current_id = $current_object->ID;

					            if ( absint( $current_id ) > 0 ) {
					                // Exclude current post.
					                $qargs['post__not_in'] = array( absint( $current_id ) );

					                // Include current posts categories.
					                $categories = wp_get_post_categories( $current_id );
					                if ( ! empty( $categories ) ) {
					                    $qargs['tax_query'] = array(
					                        array(
					                            'taxonomy' => 'category',
					                            'field'    => 'term_id',
					                            'terms'    => $categories,
					                            'operator' => 'IN',
					                            )
					                        );
					                }
					            }
					        }

					        $related_posts = new WP_Query( $qargs );

							if( $related_posts->have_posts() && $show_related_posts == 1 ) {
										echo '<h2>'.esc_html('Related Articles','gridzine').'</h2>';
										echo '<div class="row">';
											while( $related_posts->have_posts() ) {
	                                                			$related_posts->the_post();
														echo'<div class="col-lg-3 col-md-6 col-12"><div class="single-post">';
														the_post_thumbnail();
														echo'<h4><a href="'.esc_url(get_the_permalink()).'">'.the_title().'</a></h4>';
														echo '</div></div>';
													}
	                                              wp_reset_postdata();
	                  	                  echo'</div>';                      
								}
							echo'</div></div></div>';											
			
			 }
	}

endif;