<?php

require_once 'includes/breadcrumbs.php';
require_once 'includes/ico-customizer.php';
require_once 'includes/menu-customizer.php';
require_once 'includes/user-fields-customizer.php';

// подключение js
function my_custom_theme_scripts() {
    wp_enqueue_script('sprite-svg', get_template_directory_uri() . '/js/sprite-svg.js', array(), '1.0.0', true);
    wp_enqueue_script('submenu', get_template_directory_uri() . '/js/submenu.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');





?>



