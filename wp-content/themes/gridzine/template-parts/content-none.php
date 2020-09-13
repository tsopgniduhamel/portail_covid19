<?php
/**
 * Template part for displaying a message that posts cannot be found
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
									<h2><?php esc_html_e( 'Nothing Found', 'gridzine' ); ?></h2>
								</div>
								<?php
									if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

										<p><?php
											printf(
												wp_kses(
													/* translators: 1: link to WP admin new post page. */
													__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gridzine' ),
													array(
														'a' => array(
															'href' => array(),
														),
													)
												),
												esc_url( admin_url( 'post-new.php' ) )
											);
										?></p>

									<?php elseif ( is_search() ) : ?>

										<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gridzine' ); ?></p>
										<?php
											get_search_form();

									else : ?>

										<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gridzine' ); ?></p>
										<?php
											get_search_form();

									endif; ?>
							</div>
							
		</div>
									
									

</article>	