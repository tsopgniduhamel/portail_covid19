<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gridzine
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="single-blog">
							<!-- Blog Head -->
						<div class="blog-head">
								<div class="heading">
									<?php if ( 'post' === get_post_type() ) : ?>
											<?php gridzine_posted_on(); ?>	
										<?php
										endif; ?>
									<?php the_title( '<h2>', '</h2>' ); ?>
									<?php gridzine_posted_by(); ?>
								</div>
								<?php gridzine_post_thumbnail(); ?>
								<?php
										the_content( sprintf(
											wp_kses(
												/* translators: %s: Name of current post. Only visible to screen readers */
												__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gridzine' ),
												array(
													'span' => array(
														'class' => array(),
													),
												)
											),
											get_the_title()
										) );

										wp_link_pages( array(
											'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gridzine' ),
											'after'  => '</div>',
										) );
									?>
								
							</div>
							<!-- Blog Bottom -->
							<div class="blog-bottom">
								<div class="bottom-inner">
																		<?php the_post_navigation(); ?>
								</div>
							</div>
		</div>									

</article>	
<?php gridzine_related_post(); ?>
<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
							comments_template();
			endif;					
?>

