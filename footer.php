</div>

<footer class="site-footer"  role="contentinfo">
        <div class="container">
                <div class="site-footer__brand">
                        <img id="logito" src="<?php echo get_theme_mod('brand_img-revert'); ?>">
                </div>
                <div class="site-footer__links">
                <p class="title">Otros Links:</p>
                <?php wp_nav_menu(array('theme_location'=>'footer')); ?>
                </div>
                <div class="site-footer__social">
                        <p class="title">Síguenos en:</p>
                        <div class="group">
                        <?php $args = array(
                                'theme_location'=> 'redes',
                                'container' => 'nav',
                                'container_class' => 'site-footer__socials',
                                'link_before'=> '<span class="sr-text">',
                                'link_after'=>'</span>'
                        );  wp_nav_menu($args);?>

                        </div>
                        <p class="title call">Llámanos:</p>
                        <a class="number" href="tel:+51<?php echo esc_html(get_option('numero_page')); ?>"><?php echo esc_html(get_option('numero_page')); ?></a>
                </div>
                <div class="site-footer__address">
                        <?php dynamic_sidebar('location')?>
                </div>

        </div>

</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>