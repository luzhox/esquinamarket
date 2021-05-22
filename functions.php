<?php
  require('inc/opciones.php');
  require('inc/customizer.php');
  require('inc/widgets.php');
  require('inc/login.php');
  require('inc/menus.php');
  require('inc/formats.php');
  require('inc/libraries.php');
  require('lib/helpers.php');
  require('inc/etc.php');
  add_action( 'after_setup_theme', function() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
  add_theme_support( 'post-thumbnails' );
  } );

  add_filter('show_admin_bar','__return_false');



  ?>
