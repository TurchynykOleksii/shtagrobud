<!DOCTYPE html>
<html <?php bloginfo('language'); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?=wp_get_document_title(); ?></title>
  <link rel="Shortcut Icon" type="image/x-icon"
    href="<?=get_template_directory_uri(); ?>/build/img/general/title.png" />
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/build/css/libs/swiper.min.css">
  <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/build/css/style.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <header class="header">
    <div class="wrapper">
      <div class="header__inner">
        <a href="#" class="header__logo">Shtagrobud</a>
        <nav class="header__navigation">
          <?php wp_nav_menu(array(
					  'menu' => 'header__list',
					  'container' => 'ul',
					  'container_class' => 'header__list',
					  'container_id' => '',
					  'menu_class' => 'header__list',
					  'menu_id' => 'header__list',
					  'echo' => true,
					  'fallback_cb' => 'wp_page_menu',
					  'before' => '',
					  'after' => '',
					  'link_before' => '',
					  'link_after' => '',
					  'depth' => 0,
					  'walker' => '',
				)) ?>

          <div class="menu__mobile">
            <div class="menu__mobile_button">
              <span></span>
            </div>
          </div>
        </nav>
        <?php wp_nav_menu(array(
					  'menu' => 'header__mobile-list',
					  'container' => 'ul',
					  'container_class' => 'header__mobile-list',
					  'container_id' => '',
					  'menu_class' => 'header__mobile-list',
					  'menu_id' => 'header__mobile-list',
					  'echo' => true,
					  'fallback_cb' => 'wp_page_menu',
					  'before' => '',
					  'after' => '',
					  'link_before' => '',
					  'link_after' => '',
					  'depth' => 0,
					  'walker' => '',
				)) ?>

      </div>
    </div>
  </header>

  <main class="main">