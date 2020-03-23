</div> <!-- cierra el contenido -->

<footer class="site-footer"  role="contentinfo">
        <div class="container">
                <div class="logo">
                        <img id="logito" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.svg">
                </div>
                <div class="links">
                <p class="title">Categoría:</p>
                
                        <ul>
                                <li><a href="./beneficios-apcci/">Opcion 1</a></li>
                                <li><a href="./nuestros-asociados/">Opcion 2</a></li>
                                <li><a href="./noticias/">Opcion 3</a></li>
                                <li><a href="./sobre-nosotros/">Opcion 4</a></li>
                        </ul>
                </div>
                <div class="social"><p class="title">Síguenos en:</p>
                        <a href="#" target="_blank"> <i class="ico-facebook"></i></a>
                        <a href="#" target="_blank"><i class="ico-linkedin"></i></a>
                        <a href="#" target="_blank" ><i class="ico-twitter"></i></a>
                <p class="title call">Llámanos:</p>
                <a class="number" href="tel:+51<?php echo esc_html(get_option('numero_estudio')); ?>"><?php echo esc_html(get_option('numero_estudio')); ?></a>

                </div>
                <div class="address">
                        <p class="title">Vísitanos en:</p>
                        <p class="content"><?php echo esc_html(get_option('direccion_estudio')); ?></p>
                </div>
        
        </div> <!--container-->

</footer><!--Cierra el footer-->



</div> <!-- cierra el page -->

<?php wp_footer(); ?>
</body>
</html>