<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/img/sundress.webp" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colors.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/frame.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/content.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/submenu.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <menu>
        <div class="menu">
        <a class="logo" href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_site_icon_url(); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <div class="operating-mode">
          <div>Режим работы:</div>
          <?php get_info_in_header() ?>
        </div>
        <a class="contacts" href="/contacts/">Контакты</a>
        <a class="map" href="/map/">Карта ТЦ</a>
        
        <div class="search-panel">
          <input type="text" placeholder="Найти магазин">
          <button><svg class="icon"><use xlink:href="#ico-search"/></svg></button>
        </div>
        <button class="burger"><span></span></button>
      </div>
      <div class="submenu">

        <!-- <div class="search-panel">
          <input type="text" placeholder="Найти магазин">
          <button><svg class="icon"><use xlink:href="#ico-search"/></svg></button>
        </div> -->

        <?php
          wp_nav_menu(array(
            'theme_location' => 'submenu-about',
            'menu_id'        => 'submenu-about',
            'container'      => 'nav',
            'container_class'=> 'block null-list',
          ))
        ?>

        <?php
          wp_nav_menu(array(
            'theme_location' => 'submenu-shops',
            'menu_id'        => 'submenu-shops',
            'container'      => 'nav',
            'container_class'=> 'block shop-list',
          ))
        ?>

        <?php
          wp_nav_menu(array(
            'theme_location' => 'submenu-cafe',
            'menu_id'        => 'submenu-cafe',
            'container'      => 'nav',
            'container_class'=> 'block cafe-list',
          ))
        ?>

        <?php
          wp_nav_menu(array(
            'theme_location' => 'submenu-services',
            'menu_id'        => 'submenu-services',
            'container'      => 'nav',
            'container_class'=> 'block service-list',
          ))
        ?>

        <?php
          wp_nav_menu(array(
            'theme_location' => 'submenu-entertainment',
            'menu_id'        => 'submenu-entertainment',
            'container'      => 'nav',
            'container_class'=> 'block corn-list',
          ))
        ?>
        
      </div>
    </menu>