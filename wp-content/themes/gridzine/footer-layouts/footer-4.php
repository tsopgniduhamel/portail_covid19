<!-- Footer -->
	<footer class="footer style4">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
					<!-- Single Widget -->
						<div class="single-widget">
							<div class="logo">
								<?php the_custom_logo(); ?>
							</div>
						</div>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="col-lg-3 col-md-3 col-12">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="col-lg-3 col-md-3 col-12">
						
							<?php dynamic_sidebar('footer-2'); ?>
						
					</div>
					<!--/ End Single Widget -->
					<!-- Single Widget -->
					<div class="col-lg-3 col-md-3 col-12">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
					<!--/ End Single Widget -->
					
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<?php if(get_theme_mod('gridzine_footer_social_enable')): ?>
						<!-- Social -->
						<?php gridzine_social_links(); ?>
						<!--/ End Social -->
						<?php endif; ?>
						<!-- Copyright -->
						<div class="copyright">
							<?php if(get_theme_mod('gridzine_footer_copyright_text')): ?>
							<p><?php 
							$copyright 		= get_theme_mod('gridzine_footer_copyright_text');
							$allowed_tags = array(
												    'strong' => array(),
												    	'a' => array(
												       'href' => array(),
												       'title' => array()
												    )
												  );
							echo wp_kses($copyright,$allowed_tags); ?> </p>
							<?php else: ?>
							<p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gridzine' ) ); ?>"><?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'gridzine' ), 'WordPress' );
						?></a>
						<span class="sep"> | </span>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s', 'gridzine' ), 'Gridzine', '<a href="http://scorpionthemes.com">scorpionthemes</a>' );
						?></p>
						<?php endif;?>
						</div>
						<!--/ End Copyright -->
					</div>
				</div>
            </div>
		</div>	
		<!--/ End Footer Bottom -->
	</footer>
	<!--/ End footer -->