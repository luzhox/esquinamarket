<?php

add_action( 'wp_enqueue_scripts', function() {
    $theme = wp_get_theme();
    $theme_ver = $theme->version;
     wp_enqueue_style( 'estilos',
      get_template_directory_uri().'/styles/css/style.min.css',
      array(),
      $theme_ver
      );
      wp_enqueue_style( 'aos',
      get_template_directory_uri().'/styles/css/aos.css',
      array(),
      $theme_ver
      );
      wp_enqueue_style( 'owlcarousel2',
      get_template_directory_uri().'/styles/css/owl.carousel.min.css',
      array(),
      $theme_ver
      );
      wp_enqueue_style( 'owlcarouseltheme',
      get_template_directory_uri().'/styles/css/owl.theme.default.min.css',
      array(),
      $theme_ver
      );

      wp_enqueue_script("jquery");

      wp_enqueue_script( 'main',
        get_template_directory_uri().'/scripts/main.min.js',
        array( 'jquery' ),
        $theme_ver,
        false//para que vaya en el header
      );

      wp_enqueue_script( 'owl-carousel',
      get_template_directory_uri().'/scripts/owl.carousel.min.js',
      array( 'jquery' ),
      $theme_ver,
      true
      );
      wp_enqueue_script( 'aos-script',
        get_template_directory_uri().'/scripts/aos.js',
        array( 'jquery' ),
        $theme_ver,
        true
      );
      wp_enqueue_script( 'scripts',
        get_template_directory_uri().'/scripts/scripts.js',
        array( 'jquery' ),
        $theme_ver,
        true//para que vaya en el footer
      );

      } );

?>