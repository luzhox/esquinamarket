<div class="slider-brand" style="background-color:<?php the_sub_field('color')?>">
    <div class="container">
        <div class="slider-brand__title" data-aos="fade-in" data-aos="fade-up"><?php the_sub_field('title') ?></div>
        <div class="slider-brand__items owl-carousel owl-theme">
        <?php if (have_rows('brand')) {
            while (have_rows('brand')) {
                the_row(); ?>
            <div class="slider-brand__item" data-aos="zoom-in" data-aos="fade-up" style="background:url(<?php the_sub_field('img') ?>)">
                <a href="<?php the_sub_field('link')?>" class="slider-brand__item__link"></a>
            </div>
        <?php }} ?>
        </div>
    </div>
</div>