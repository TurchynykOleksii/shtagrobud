<?php get_header(); ?>

<section class="hero">
  <div class="wrapper">
    <div class="hero__inner">
      <div class="hero__inner-text">
        <?php if( get_field('hero_headline') ): ?>
        <h1 class="hero__headline"><?= get_field('hero_headline'); ?></h1>
        <?php endif; ?>
        <div class="hero__slogan">
          <?php if( get_field('hero_slogan') ): ?>
          <p class="hero__text"><?= get_field('hero_slogan'); ?></p>
          <?php endif; ?>
          <a href="#footer" class="hero__btn">звернутись</a>
        </div>
      </div>

      <div class="hero__slider swiper">
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php 
            $images = get_field('galereya_foto');
            if( $images ): ?>
          <?php foreach( $images as $image ): ?>
          <div class="hero__slide-item swiper-slide">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </div>
          <?php endforeach; ?>
          <?php endif; ?>

        </div>
        <div class="hero__navigation">
          <div class="hero__prev swiper-button-prev">
            <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/arrow-left.svg"
              alt="стрілка вліво фото" loading="lazy">
          </div>
          <div class="hero__next swiper-button-next">
            <img src="<?php echo get_template_directory_uri() ?>/build/img/icons/arrow-right.svg"
              alt="стрілка вправо фото" loading="lazy">
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="benefits" id="benefits">
  <div class="wrapper">
    <div class="benefits__inner">
      <div class="benefits__inner-text">
        <h2 class="benefits__headline">
          <?= get_field('benefits_headline'); ?>
        </h2>
        <p class="benefits__slogan">
          <?= get_field('benefits_slogan'); ?>
        </p>
      </div>

      <ul class="benefits__list">
        <?php

    if( have_rows('benefity') ):

        while( have_rows('benefity') ) : the_row();
        
        $sub_icon = get_sub_field('ikonka');
        $sub_text = get_sub_field('tekst_ikonky');
        ?>
        <li class="benefits__item">
          <img src="<?php echo esc_url($sub_icon['url']); ?>" alt="<?php echo esc_attr($sub_icon['alt']); ?>"
            loading="lazy">
          <p class="benefits__text">
            <?= $sub_text?>
          </p>
        </li>
        <?php
        endwhile;
        endif;?>

      </ul>
    </div>
  </div>
</section>
<section class="operations" id="operations">
  <div class="wrapper">
    <div class="operations__inner">
      <h3 class="operations__headline"><?= get_field('operations_headline'); ?>
        <span><?= get_field('operations_headlinee'); ?></span>
      </h3>
      <ul class="operations__list">
        <?php

    if( have_rows('operations_list') ):
    
        while( have_rows('operations_list') ) : the_row();
        
        $sub_text = get_sub_field('operations_item');
        
        ?>
        <li class="operations__item">
          <?= $sub_text; ?>
        </li>
        <?php
        endwhile;
        endif;?>


      </ul>
      <p class="operations__text">
        <?= get_field('operations_text'); ?>
      </p>
    </div>
  </div>
</section>
<section class="advice" id="advice">
  <div class="wrapper">
    <div class="advice__inner">
      <h4 class="advice__headline">
        <?= get_field('advice_headline'); ?>
      </h4>
      <div class="advice__wrapper-lists">
        <ul class="advice__list-photo">
          <?php 
            $images = get_field('foto_robit');
            if( $images ): ?>
          <?php foreach( $images as $key => $image ): ?>

          <?php $class = ($key % 2 == 0) ? 'advice__item-photo' : 'advice__item-photo advice__hide'; ?>
          <li class="<?php echo esc_attr($class); ?>">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
              loading="lazy" />
          </li>
          <?php endforeach; ?>
          <?php endif; ?>
        </ul>
        <ul class="advice__list">
          <?php

    if( have_rows('spysok_robit') ):
   
        while( have_rows('spysok_robit') ) : the_row();
        
        $sub_works = get_sub_field('element_spysku_robit');
       
        ?>
          <li class="advice__item">
            <?= ($sub_works);?>
          </li>
          <?php
        // End loop.
        endwhile;
        endif;?>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>