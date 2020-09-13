<?php
/**
 * Widget - Slider Widget for Top Area
 *
 * @package Gridzine
 */

/*-----------------------------------------------------
		Slider Widgets 1
-----------------------------------------------------*/

if ( ! class_exists( 'Gridzine_Slider_Widget_One' ) ) :
	/**
	* Sidebar Post Widget One
	*/
	class Gridzine_Slider_Widget_One extends WP_Widget
	{
		
		function __construct()
		{
			$opts = array(
				'description'	=> esc_html__( 'Full Width Slider for Top Area', 'gridzine' )
			);

			parent::__construct( 'featured_slider_widget_one', esc_html__( 'Gridzine: Slider Widget', 'gridzine' ), $opts );
		}

		function widget( $args, $instance ) {
			$title = apply_filters( 'widget_title', ! empty( $instance['title'] ) ? $instance['title'] : '', $instance, $this->id_base );
			$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 5;
			
			echo $args[ 'before_widget' ];

			echo $args[ 'before_title' ];

			echo esc_html( $title ); 
			
			echo $args[ 'after_title' ];

			$arguments = array(
				'cat'	=> absint( $cat ),
				'posts_per_page' => absint( $post_no ),
			); 

			$query = new WP_Query( $arguments );

			if( $query->have_posts() ) :
			?>

					<!-- Big Slider -->
				    <section id="big-slider" class="big-slider">
				        <div class="slider-active">
                            	<?php
                            		while( $query->have_posts() ) :
                            			$query->the_post();
                            	?>
                            	<!-- Single Slider -->
                            	<?php if( has_post_thumbnail() ):
                            	$featured_img_url = get_the_post_thumbnail_url();?>
								<div class="single-slider" style="background-size;cover;background-image:url(<?php echo esc_url($featured_img_url); ?>);">
								<?php else: ?>
								<div class="single-slider" style="background-size;cover;background-image:url(<?php echo esc_url(get_template_directory_uri());?>/scorpionthemes/img/default.png');">
								<?php endif; ?>

									<div class="container">
										<div class="row">
											<div class="col-lg-12 col-12">
												<div class="welcome-text">	
													<div class="inner-text">	
														<span class="base"><?php the_category( ', ' ); ?></span>
														<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
														<span class="date"><?php echo get_the_date(); ?></span>
														<a href="<?php the_permalink(); ?>" class="btn primary"><?php esc_html_e('Read More', 'gridzine'); ?></a>
													</div>
												</div>
											</div>
										</div>
									</div>
					            </div>
					            <!--/ End Single Slider -->
					            <?php
                                	endwhile;
                                	wp_reset_postdata($query);
                                ?>
                    </div>
                </section>
			<?php 
			endif;
			echo $args[ 'after_widget' ]; 
		}

		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

			$instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
			$instance[ 'cat' ] = absint( $new_instance[ 'cat' ] );
			$instance[ 'post_no' ] = absint( $new_instance[ 'post_no' ] );

			return $instance;
		}

		function form( $instance ) {

			$title = ! empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
			$cat = ! empty( $instance[ 'cat' ] ) ? $instance[ 'cat' ] : 0;
			$post_no = ! empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><strong><?php echo esc_html__( 'Title: ', 'gridzine' ); ?></strong></label>
				<input type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) )?>"><strong><?php echo esc_html__( 'Select Category: ', 'gridzine' ); ?></strong></label>
				<?php
					$cat_args = array(
						'orderby'	=> 'name',
						'hide_empty'	=> 0,
						'id'	=> $this->get_field_id( 'cat' ),
						'name'	=> $this->get_field_name( 'cat' ),
						'class'	=> 'widefat',
						'taxonomy'	=> 'category',
						'selected'	=> absint( $cat ),
						'show_option_all'	=> esc_html__( 'Show Recent Posts', 'gridzine' )
					);
					wp_dropdown_categories( $cat_args );
				?>
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'post_no' ) )?>"><strong><?php echo esc_html__( 'Post No: ', 'gridzine' )?></strong></label>
				<input type="number" id="<?php echo esc_attr( $this->get_field_id( 'post_no' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_no' ) ); ?>" value="<?php echo esc_attr( $post_no ); ?>" class="widefat">
			</p>
			<?php			
		}
	}
endif; ?>

