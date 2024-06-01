<?php

function menu_customizer_setup() {

    register_nav_menu('submenu-about', 'Sub Menu About');
    register_nav_menu('submenu-shops', 'Sub Menu Shops');
    register_nav_menu('submenu-cafe', 'Sub Menu Cafe');
    register_nav_menu('submenu-services', 'Sub Menu Services');
    register_nav_menu('submenu-entertainment', 'Sub Menu Entertainment');

    register_nav_menu('footer-col-1', 'Footer Column 1');
    register_nav_menu('footer-col-2', 'Footer Column 2');
    register_nav_menu('footer-col-3', 'Footer Column 3');
    register_nav_menu('footer-col-4', 'Footer Column 4');

}
add_action('after_setup_theme', 'menu_customizer_setup');

?>