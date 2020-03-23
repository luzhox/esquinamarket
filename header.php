<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
<meta name="google-site-verification" content="cmXC_4jm86FLs_UKqxxlFXcWcxIWMlis5wD5YB64YYw" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
	<title><?php wp_title(''); ?> <?php if(wp_title('',false)){echo':';} ?> <?php bloginfo('name') ?></title>
	<meta name="theme-color" content="#ec6a03"/>
	<meta name="msapplication-navbutton-color" content="#ec6a03"/>
	<?php  wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="container-logo">
					<a  class="logo" href="<?php echo esc_url(home_url('/')); ?>">
						<img id="logito" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
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
		<div id="contenido" >
