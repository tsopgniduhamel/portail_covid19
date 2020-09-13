<!-- Header Area -->
	<header id="site-header" class="site-header style2">
		<!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <?php if(get_theme_mod('gridzine_header_social_enable')): ?>
							<!-- Social -->
						<?php gridzine_social_links(); ?>
							<!--/ End Social -->
						<?php endif; ?>
                    </div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="top-right">
							<?php if(get_theme_mod('gridzine_header_search_enable')): ?>
							<!-- Search Form -->
							<?php get_search_form(); ?>
							<!--/ End Search Form -->
						<?php endif; ?>
						</div>
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