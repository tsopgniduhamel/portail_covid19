<!-- Header Area -->
	<header id="site-header" class="site-header style5">
		<!-- Middle Header -->
		<div class="middle-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<?php the_custom_logo(); ?>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-10 col-md-10 col-12">
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
						<div class="bars">
							<a href="#"><i class="fa fa-bars"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Middle Header -->
    </header>
	<!--/ End Header Area -->