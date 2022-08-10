<section class="hero" data-aos="fade-in">
    <?php $isVideo = get_sub_field('isVideo');if ((!$isVideo)) : ?>
    <article class="hero-container owl-carousel owl-theme">
        <?php if (have_rows('sliderhero')) {
            while (have_rows('sliderhero')) {
                the_row(); ?>
                <article class="hero-item <?php the_sub_field('customClass')?> <?php the_sub_field('typeSlide')?>">
                    <div class="overlay" style="background-color:<?php the_sub_field('overlay') ?>"></div>
                    <?php
                    $image = get_sub_field('imagen_de_escritorio');
                    if (!empty($image)) : ?>
                        <img class="hide-on-small-only " src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <?php
                    $image = get_sub_field('imagen_de_mobile');
                    if (!empty($image)) : ?>
                        <img class="hide-tablet-on-up " src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="hero-item__content <?php the_sub_field('align') ?> container">
                        <div class="hero-item__content__title" data-aos="fade-up">
                            <?php the_sub_field("texto") ?>
                        </div>
                        <div class="hero-item__content__buttons">
                        <?php if (have_rows('buttons')) { while (have_rows('buttons')) {the_row(); ?>
                            <?php
                            $link = get_sub_field('button');

                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="<?php the_sub_field("type") ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                        <?php }} ?>
                      </div>
                    </div>

                </article>
        <?php }
        } ?>
    </article>
    <?php endif; ?>
    <?php
                    $isVideoTrue = get_sub_field('isVideo');
                    if (($isVideoTrue)) : ?>
                    <article class="hero-container video">
                        <div class="hero-container__video">
                            <div class="shadow shadowtop"></div>
                            <div class="hero-item hero-container__video__text">
                                    <div class="hero-item__content center">
                                        <div class="hero-item__content__title">
                                            <?php the_sub_field('textVideo')?>
                                        </div>
                                        <div class="hero-item__content__buttons">
                                            <?php if (have_rows('buttonsVideo')) { while (have_rows('buttonsVideo')) {the_row(); ?>
                                                <?php
                                                $link = get_sub_field('button');

                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                    <a class="<?php the_sub_field("type") ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                                                <?php }
                                            } ?>
                                        </div>
                                    </div>
                            </div>
                            <video width="320" height="240" controls poster="<?php the_sub_field('cover')?>" loop autoplay muted="true">
                            <source src="<?php the_sub_field('video')?>" type="video/mp4">
                            </video>
                            .<div class="shadow shadowbottom"></div>
                           </div>
                    </article>
                     <?php endif; ?>
    <div class="vermas">
        <?php
        $link = get_sub_field('ver_mas');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <span></span>
                <?php echo esc_html($link_title); ?>
            </a>
        <?php endif; ?>
    </div>
</section>