<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gridzine
 */

?>
<div class="blog-area">	
	<div class="single-blog">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<!-- Blog Head -->
						<div class="blog-head">
								<div class="heading">
									 <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									<?php gridzine_posted_by(); ?>
								</div>
								<?php if(has_post_thumbnail()): ?>
								<?php gridzine_post_thumbnail('gridzine-list-thumb'); ?>
								<?php endif; ?>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn primary"><i class="fa fa-plus"></i>
								<?php esc_html_e('Read More','gridzine'); ?></a>
							
						</div>
						
				</div>
	</div>
</div>
					

