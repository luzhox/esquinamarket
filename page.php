<?php
    
    get_header(); ?>
  <body <?php body_class(); ?>>
  <?php
  while ( have_posts() ) { the_post();

    // Check if ACF is enabled and the modules field exists
    if ( function_exists('get_field') && get_field('modules') !== null ) {

      the_modules_loop();

    } else {

      the_module('post');

    }

  }
  ?>

  <?php get_footer(); ?>
  </body>
</html>