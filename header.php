<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
<meta name="google-site-verification" content="cmXC_4jm86FLs_UKqxxlFXcWcxIWMlis5wD5YB64YYw" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400|Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo site_icon_url() ?>">
	<title><?php wp_title(''); ?> <?php if(wp_title('',false)){echo':';} ?> <?php bloginfo('name') ?></title>
	<meta name="theme-color" content="#ec6a03"/>
	<meta name="msapplication-navbutton-color" content="#ec6a03"/>
	<?php  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
		<div id="contenido" >