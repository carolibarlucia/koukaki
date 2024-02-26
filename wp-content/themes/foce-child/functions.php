<?php
// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

add_action('wp_enqueue_scripts', 'foce_enqueue_script');
function foce_enqueue_script()
{
    wp_register_script('foce-child-swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js');
    wp_enqueue_script('foce-child-swiper');
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');

    wp_enqueue_script('foce-child-script', get_stylesheet_directory_uri() . '/script.js');

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/sass/style.css');
    wp_enqueue_style('foce-child-style', get_stylesheet_directory_uri() . '/sass/style.css');
}
