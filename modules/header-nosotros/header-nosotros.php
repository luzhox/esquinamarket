<div class="header-nosotros">
  <div class="container">
    <div class="header-nosotros__text">
      <?php the_sub_field('text')?>
      <div class="header-nosotros__text__brand">
        <?php $images = get_sub_field('gallery');$size = 'full';if( $images ): ?>
          <?php foreach( $images as $image ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="header-nosotros__img" style="background:url(<?php the_sub_field('img')?>)"></div>
</div>