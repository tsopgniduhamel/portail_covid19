<?php
/**
 * Custom widgets.
 *
 * @package Samurai
 */


if ( ! class_exists( 'Gridzine_Author_Widget' ) ) :

	/**
	 * Author widget class.
	 *
	 * @since 1.0.0
	 */
	class Gridzine_Author_Widget extends WP_Widget {

	    function __construct() {
	    	$opts = array(
				'classname'   => 'single-sidebar author',
				'description' => esc_html__( 'Displays Author Information. Place it in sidebar.', 'gridzine' ),
    		);

			parent::__construct( 'gridzine-author-widget', esc_html__( 'Gridzine: Author Info', 'gridzine' ), $opts );
	    }


	    function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
            $page_id    = !empty( $instance['page'] ) ? $instance['page'] : '';

            $arguments = array(
                'post_type'             => 'page',
                'page_id'               => absint( $page_id ),
                'posts_per_page'        => 1,
                'ignore_sticky_posts'   => true
            );

            echo $args['before_widget'];

            echo $args['before_title'];
            echo esc_html( $title );
            echo $args['after_title'];

            $query = new WP_Query( $arguments );
            if( $query->have_posts() ) :
                while( $query->have_posts() ) :
                    $query->the_post();
                    if( has_post_thumbnail() ) :
                     ?>
                        
                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) ); ?>  
                    <?php
                    endif;
                    ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;

            echo $args['after_widget'];

	    }

	    function update( $new_instance, $old_instance ) {
	        $instance = $old_instance;

            $instance[ 'title' ]    = sanitize_text_field( $new_instance[ 'title' ] );
            $instance[ 'page' ] = absint( $new_instance[ 'page' ] );

	        return $instance;
	    }

	    function form( $instance ) {

	        $instance = wp_parse_args( (array) $instance, array(
                'title'         => '',
                'page'          => '',
	        ) );
	        ?>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                    <strong><?php esc_html_e( 'Title: ', 'gridzine' ); ?></strong>
                </label>
                <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( "title" ) ) ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'page' ) ); ?>">
                    <strong><?php esc_html_e( 'Page:', 'gridzine' ); ?></strong>
                </label>
                <?php
                    wp_dropdown_pages( array(
                            'id'               => $this->get_field_id( "page" ),
                            'class'            => 'widefat',
                            'name'             => $this->get_field_name( "page" ),
                            'selected'         => $instance["page"],
                            'show_option_none' => esc_html__( '&mdash; Select &mdash;', 'gridzine' ),
                        )
                    );
                ?>
            </p>           
	        <?php
        }

	}

endif;


/*-----------------------------------------------------
       Recent Post Widgets 1
-----------------------------------------------------*/

if ( ! class_exists( 'Gridzine_Recent_Post_Widget' ) ) :
    /**
    * Sidebar Post Widget One
    */
    class Gridzine_Recent_Post_Widget extends WP_Widget
    {
        
        function __construct()
        {
            $opts = array(
                'classname'   => 'single-sidebar posts',
                'description'   => esc_html__( 'Recent Post Widget for Sidebar', 'gridzine' )
            );

            parent::__construct( 'gridzine_recent_post_widget', esc_html__( 'Gridzine: Recent Posts', 'gridzine' ), $opts );
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
                'cat'   => absint( $cat ),
                'posts_per_page' => absint( $post_no ),
            ); 

            $query = new WP_Query( $arguments );

            if( $query->have_posts() ) :
            ?>

                                <?php
                                    while( $query->have_posts() ) :
                                        $query->the_post();
                                ?>

                                <div class="single-post">
                                    <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri();?>/scorpionthemes/img/1.png')">
                                    <?php endif; ?>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                  
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
                        'orderby'   => 'name',
                        'hide_empty'    => 0,
                        'id'    => $this->get_field_id( 'cat' ),
                        'name'  => $this->get_field_name( 'cat' ),
                        'class' => 'widefat',
                        'taxonomy'  => 'category',
                        'selected'  => absint( $cat ),
                        'show_option_all'   => esc_html__( 'Show Recent Posts', 'gridzine' )
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
endif; 




