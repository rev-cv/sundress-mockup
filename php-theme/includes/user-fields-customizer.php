<?php
function customize_register($wp_customize) {
    $wp_customize->add_section('contact_info_section', array(
        'title' => __('Contact Info', 'your-theme'),
        'priority' => 30,
    ));

    // Настройка телефона

    $wp_customize->add_setting('phone_number', array(
        'default' => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone Number', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    // Настройка e-mail

    $wp_customize->add_setting('email_address', array(
        'default' => 'info@example.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('email_address', array(
        'label' => __('Email Address', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'email',
    ));

    // Настройка адресса

    $wp_customize->add_setting('physical_address', array(
        'default' => '123 Main Street, Anytown, USA',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('physical_address', array(
        'label' => __('Physical Address 1', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('physical_address_2', array(
        'default' => '123 Main Street, Anytown, USA',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('physical_address_2', array(
        'label' => __('Physical Address 2', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    // Настройка для часов работы

    $wp_customize->add_setting('working_hours_1', array(
        'default' => '8:00 - 18:00',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('working_hours_1', array(
        'label' => __('Working Hours 1', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('working_hours_2', array(
        'default' => '8:00 - 18:00',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('working_hours_2', array(
        'label' => __('Working Hours 2', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'text',
    ));

    // Настройка для Telegram

    $wp_customize->add_setting('telegram', array(
        'default' => 'https://web.telegram.org/',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('telegram', array(
        'label' => __('Telegram URL', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'url',
    ));

    // Настройка для VK

    $wp_customize->add_setting('vcontact', array(
        'default' => 'https://web.telegram.org/',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('vcontact', array(
        'label' => __('VK URL', 'your-theme'),
        'section' => 'contact_info_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'customize_register');

function get_info_in_header() {
    $wh1 = get_theme_mod('working_hours_1', '15:00');
    $wh2 = get_theme_mod('working_hours_2', '15:00');
    
    echo '<span>' . esc_html($wh1) . '</span>';
    echo '<span>' . esc_html($wh2) . '</span>';
}

function get_info_in_footer() {
    $phone = get_theme_mod('phone_number', '');
    $address_1 = get_theme_mod('physical_address', '');
    $address_2 = get_theme_mod('physical_address_2', '');
    
    echo '<div class="col-7">' . esc_html($address_1) . '</div>';
    echo '<div class="col-7">' . esc_html($address_2) . '</div>';
    echo '<div class="col-7">' . esc_html($phone) . '</div>';
}

function get_social_in_footer() {
    $telegram = get_theme_mod('telegram', 'https://web.telegram.org/');
    $vk = get_theme_mod('vcontact', 'https://vk.com/');

    echo '<a href="' . esc_url_raw($telegram) . '" target="_blank"><svg class="icon"><use xlink:href="#ico-telegram"/></svg></a>';
    echo '<a href="' . esc_url_raw($vk) . '" target="_blank"><svg class="icon"><use xlink:href="#ico-vk"/></svg></a>';
}

?>