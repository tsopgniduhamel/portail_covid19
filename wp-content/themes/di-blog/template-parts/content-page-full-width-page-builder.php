<div id="post-<?php the_ID(); ?>" <?php post_class( 'post-contents' ); ?> itemscope itemtype="http://schema.org/CreativeWork">
	
	<div class="post-excepr-content entry-content" itemprop="text">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'di-blog' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div>
	
</div>
