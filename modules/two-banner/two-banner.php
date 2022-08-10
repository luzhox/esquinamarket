<div class="two-banner">
  <?php if (have_rows('banners')) {while (have_rows('banners')) { the_row(); ?>
  <div class="two-banner__item"  data-aos="zoom-in" style="background-image:url(<?php the_sub_field('bg')?>)">
    <a href="<?php the_sub_field('link')?>" class="two-banner__item__link"></a>
     <div class="two-banner__item__content" >
      <?php $image = get_sub_field('image');if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
      <p><?php the_sub_field('text')?></p>
     </div>
  </div>
  <?php }} ?>
</div>