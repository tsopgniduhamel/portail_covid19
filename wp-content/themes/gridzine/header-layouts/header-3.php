<!-- Header Area -->
	<header id="site-header" class="site-header style3">
		<!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="top-right">
							<ul class="contact">
								<?php if(get_theme_mod('gridzine_header_email_number')): ?>
									<i class="fa fa-envelope"></i><li><a href="mailto:<?php echo esc_attr(get_theme_mod('gridzine_header_email_number')); ?>"><?php echo esc_html(get_theme_mod('gridzine_header_email_number')); ?></a></li>
								<?php endif; ?>
								<?php if(get_theme_mod('gridzine_header_phone_number')): ?>
									<i class="fa fa-phone"></i><li><a href="tel:<?php echo esc_html(get_theme_mod('gridzine_header_phone_number')); ?>"><?php echo esc_html(get_theme_mod('gridzine_header_phone_number')); ?></a></li>
								<?php endif; ?>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                       <?php if(get_theme_mod('gridzine_header_social_enable')): ?>
							<!-- Social -->
						<?php gridzine_social_links(); ?>
							<!--/ End Social -->
						<?php endif; ?>
                    </div>
				</div>
            </div>
        </div>
		<!--/ End Topbar -->
		
		<!-- Middle Header -->
		<div class="middle-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Logo -->
						<div class="logo">
							<?php the_custom_logo(); ?>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-9 col-md-9 col-12">
						<!-- Main Menu -->
						<div class="main-menu">
							<nav class="nav">
								<?php
										if ( has_nav_menu( 'main' ) ) : 
							            wp_nav_menu( array(
							                'theme_location'    => 'main',
							                'depth'             => 8,
							                'container'         => 'div',
							                'menu_class'        => 'nav menu',
							                'fallback_cb'       => 'gridzine_bootstrap_navwalker::fallback',
							                'walker'            => new gridzine_bootstrap_navwalker()
							            ));
							        endif;
							        ?>
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Middle Header -->
    </header>
	<!--/ End Header Area -->