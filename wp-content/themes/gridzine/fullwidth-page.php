<?php
/**
 * Template Name: Full Width Template 
 * The template used for displaying front page contents
 *
 * @package gridzine
 */

get_header(); ?>

   <!-- Main Area -->
	<section id="main-area" class="main-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12">
					<div class="blog-area">	

								<?php
								if ( have_posts() ) :

									if ( is_home() && ! is_front_page() ) : ?>

									<?php
									endif;

									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'page' );

									endwhile;

									the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Main Area -->
<?php get_footer(); ?>

