<div class="banner-top" style="background-image:url(<?php the_sub_field('img')?>)">
  <div class="overlay"></div>
  <div class="container">
    <div class="banner-top__title">
      <?php $isRedirect = get_sub_field('linkRedirect'); if ($isRedirect) : ?>
        <a href="<?php the_sub_field('link')?>" class="banner-top__link"></a>
      <?php endif; ?>
      <?php the_sub_field('text')?>
    </div>

  </div>
</div>