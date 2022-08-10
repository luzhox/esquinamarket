<div class="banner-menu" data-aos="fade-up" style="background-image:url('<?php the_sub_field('bg')?>')">
  <div class="overlay"></div>
  <div class="container">
    <h3 data-aos="fade-right"> <?php the_sub_field('title')?></h3>
    <div class="banner-menu__content">
    <?php if (have_rows('cartas')) {
              while (have_rows('cartas')) {
                  the_row(); ?>
      <a class="banner-menu__item" data-aos="fade" target="_blank" href="<?php the_sub_field('link')?>"><?php the_sub_field('text')?></a>
      <?php }} ?>
    </div>
  </div>
</div>