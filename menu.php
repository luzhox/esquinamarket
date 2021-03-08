
	<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="brand__container">
					<a  class="brand" href="<?php echo esc_url(home_url('/')); ?>">
						<img id="brand" data-brand="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" data-brandtwo="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-invert.svg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
					</a>
				</div>
				<div class="sandwich">
					<div class="menu menu-1"></div>
					<div class="menu menu-2"></div>
					<div class="menu menu-3"></div>
				</div>

				<div class="container-nav">
					<nav id="site-navegation" class="main-navegation" role="navegation">
						<?php wp_nav_menu(array('theme_location'=>'menu_principal')); ?>
					</nav>
				</div>

			</div>
		</header>