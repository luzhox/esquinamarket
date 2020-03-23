<?php get_header(); ?>
  <body <?php body_class(); ?>>
  <?php the_field('my_blog_pe') ?>
		<?php $args = array(
			'posts_per_page'=> 1,
            'orderby'=> 'date',
			'order'=>'DESC'); ?>
		<?php $family = new WP_Query($args);?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
		<?php while($family->have_posts()): $family->the_post();?>
		<div class="articulo-principal"  style="background-image:url(<?php echo $url; ?>);">
			<div class="overlay"></div> 
			<div class="container">
				<div class="texto" data-aos="fade-right" >
					<h1><?php the_title(); ?></h1>
					<p class="hide-on-small-only"><?php excerpt('25');?></p>
					<a href="<?php the_permalink()?>">Leer artículo <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-pointing-to-right.png" alt=""></a>
				</div>
			</div>
		</div>
  <?php endwhile; wp_reset_postdata(); ?>

  <section id="articulos" >
	<div class="container">  
				<div class="contenedor-articulos">
				<?php while(have_posts() ): the_post(); ?>
					<?php
					global $post;
					$thumbID = get_post_thumbnail_id( $post->ID );
					$imgDestacada = wp_get_attachment_url( $thumbID );

					?>
				<div class="articles row"  >
					<a href="<?php the_permalink()?>" style="position:absolute; display:block; width:100%; height:100%;"></a>
					<div class="imagen-article" style="background:url(<?php echo $imgDestacada;?>);"></div>
					<div class="textos">
						<div class="detalles">
							<div class="date"><span><?php the_category()?> </span><?php echo get_the_date(); ?></div>
							<span class="icon-profile"></span>
						</div>
						
						<h2 ><?php the_title();?></h2>
						<p><?php excerpt('15');?></p>
						<a href="<?php the_permalink()?>" class="btn-seemore"> Leer Más </a>
					</div>
				</div>
				<?php endwhile; ?>
				</div>
				</div>
		</div>
</section>
<section class="noticiasredes">
	<div class="title">
		<div class="container">
		<p>Descubre muchos más en nuestras redes</p>
		</div>
	</div>
	<div class="container cont-tweets">
		<div class="slider-tweets owl-carousel owl-theme">
			<div class="tweet">
				<div class="tweet__header">
					<div class="img"></div>
					<div class="text">
						Australia Peru Chamber of..
						<span>@APCCI_PERU</span>
					</div>
				</div>
				<div class="tweet__content">
					<p>Los invitamos a participar del Desayuno Conferencia "Clúster Minero del Sur del Perú: Desde la minería a la prosperidad", el cual se llevará a cabo el próximo jueves 6 de febrero. Inscripciones: eventos@apcci.org </p>
					<a href="https://twitter.com/APCCI_PERU/status/1222903263462219778">Ver más</a>
				</div>
			</div>
			<div class="tweet">
				<div class="tweet__header">
					<div class="img"></div>
					<div class="text">
						Australia Peru Chamber of..
						<span>@APCCI_PERU</span>
					</div>
				</div>
				<div class="tweet__content">
					<p>Miembros del Consejo Directorio y el Equipo Ejecutivo de @APCCI_PERU participaron activamente en la celebración por el Día de Australia organizada por la Embajada de Australia en Perú y Bolivia</p>
					<a href="https://twitter.com/APCCI_PERU/status/1221975194677448705">Ver más</a>
				</div>
			</div>
			<div class="tweet">
				<div class="tweet__header">
					<div class="img"></div>
					<div class="text">
						Australia Peru Chamber of..
						<span>@APCCI_PERU</span>
					</div>
				</div>
				<div class="tweet__content">
					<p>COMUNICADO: Solidaridad ante incendios en #Australia #bushfireaustralia</p>
					<a href="https://twitter.com/APCCI_PERU/status/1214378810868686848">Ver más</a>
				</div>
			</div>
			<div class="tweet">
				<div class="tweet__header">
					<div class="img"></div>
					<div class="text">
						Australia Peru Chamber of..
						<span>@APCCI_PERU</span>
					</div>
				</div>
				<div class="tweet__content">
					<p>Ratificación del Acuerdo de Libre Comercio Perú-Australia: Nueva era de integración económica</p>
					<a href="https://twitter.com/APCCI_PERU/status/1207084160625582082">Ver más</a>
				</div>
			</div>
			<div class="tweet">
				<div class="tweet__header">
					<div class="img"></div>
					<div class="text">
						Australia Peru Chamber of..
						<span>@APCCI_PERU</span>
					</div>
				</div>
				<div class="tweet__content">
					<p>Hoy se reunió el Consejo Directivo de APCCI para definir los objetivos, líneas de acción y plan de implementación del 2020</p>
					<a href="https://twitter.com/APCCI_PERU/status/1205250430755848192">Ver más</a>
				</div>
			</div>
			<div class="tweet">
				<div class="tweet__header">
					<div class="img"></div>
					<div class="text">
						Australia Peru Chamber of..
						<span>@APCCI_PERU</span>
					</div>
				</div>
				<div class="tweet__content">
					<p>Se realizó con éxito el APCCI Tennis Cup 2019 gracias a @CMS_Law_Peru, Hotel Casa República y Entrañable. Este torneo tuvo por objetivo propiciar una tarde agradable entre socios y amigos..</p>
					<a href="https://twitter.com/APCCI_PERU/status/1204505194224128000">Ver más</a>
				</div>
			</div>
		</div>
		</div>
</section>
  <?php get_footer(); ?>
  </body>
</html>