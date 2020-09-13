<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gridzine
 */

get_header(); ?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gridzine
 */

get_header(); ?>

   <!-- Main Area -->
	<section id="main-area" class="main-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-12">
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
				<div class="col-lg-3 col-sm-3">
				 <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Main Area -->
<?php get_footer(); ?>

