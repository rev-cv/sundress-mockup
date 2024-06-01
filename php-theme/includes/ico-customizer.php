<?php

function ico_customizer_setup() {
    load_theme_textdomain('wptuts');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 90,
        'width' => 85,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'ico_customizer_setup');

?>