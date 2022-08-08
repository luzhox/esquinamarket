<div class="contact-carousel <?php
                    $isGray = get_sub_field('isGray');
                    if ($isGray) : ?> gray <?php endif; ?>  <?php
                    $isFirstSection = get_sub_field('isFirstSection');
                    if ($isFirstSection) : ?> first <?php endif; ?> <?php the_sub_field('typeCarousel')?>">
  <div class="container">
    <div class="contact-carousel__content">
      <div class="contact-carousel__content__title">
        <h3 class="title"><?php the_sub_field('title') ?></h3>
      </div>
      <div class="contact-carousel__content__menu ">
      <?php if (have_rows('menu')) {
              while (have_rows('menu')) {
                  the_row(); ?>
                  <a class="contact-carousel__content__menu__item <?php
                    $isGray = get_sub_field('isActive');
                    if ($isGray) : ?> active <?php endif; ?>" href="#link<?php the_sub_field('id') ?>" data-id="<?php the_sub_field('id') ?>" data-img="<?php the_sub_field('img') ?>">
                  <?php the_sub_field('btnText') ?>
              </a>
                  <?php }} ?>
      </div>
      <div class="contact-carousel__content__info owl-carousel owl-theme">

      <?php if (have_rows('info')) {
              while (have_rows('info')) {
                  the_row(); ?>
                  <div id="<?php the_sub_field('id') ?>" data-hash="link<?php the_sub_field('id') ?>" class="contact-carousel__content__info__item">
                  <div class=" contact-carousel__content__info__img " style="background-image:url(<?php the_sub_field('defaultImg') ?>)">
          </div>
          <div class="contact-carousel__content__info__text">
                  <?php if (have_rows('address')) { while (have_rows('address')) {
                  the_row(); ?>

                    <div class="contact-carousel__content__info__item__address">
                      <p><?php the_sub_field('text') ?></p>
                      <div class="socials">
                      <?php
                    $isFirstWhatsp = get_sub_field('whastapp');
                    if ($isFirstWhatsp) : ?>
                      <a href="https://api.whatsapp.com/send/?phone=51<?php the_sub_field('whastapp')?>&text&type=phone_number&app_absent=0" class="whatsapp"></a>
                      <?php endif; ?>
                      <?php
                          $isFirstX = get_sub_field('coordX');
                          $isFirstY = get_sub_field('coordy');
                          if ($isFirstX && $isFirstY)  : ?>
                            <a href="https://www.waze.com/location?ll=<?php the_sub_field('coordX')?>,<?php the_sub_field('coordy')?>" class="waze"></a>
                            <a href="https://www.google.com/maps/dir/Current+Location/<?php the_sub_field('coordX')?>,<?php the_sub_field('coordy')?>" class="googlemaps"></a>
                          <?php endif; ?>
                      </div>
                    </div>
                  <?php }} ?>
                  </div>
                  </div>
                  <?php }} ?>
      </div>
    </div>
  </div>
  <div class="contact-carousel__img contactImg" style="background-image:url(<?php the_sub_field('defaultImg') ?>)">
<div class="square"></div></div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function(){
    $('.contact-carousel__content__menu__item').click(function(){
      const img = $(this).data('img');
      $(this).addClass('active')
      $(this).siblings().removeClass('active')
      $('.contactImg').css('background-image', `url(${img})`);
    })
  })
</script>