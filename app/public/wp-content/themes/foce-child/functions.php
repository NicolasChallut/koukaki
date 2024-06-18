<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

function theme_enqueue_assets() {
    // Enqueue parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme styles and scripts
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    // Enqueue Swiper CSS from CDN
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    // Enqueue custom scripts from child theme
    wp_enqueue_script('video-loader-script', get_stylesheet_directory_uri() . '/js/video-loader.js', array(), null, true);
    wp_enqueue_script('custom-swiper-js', get_stylesheet_directory_uri() . '/js/custom-swiper.js', array('swiper-js'), null, true);
    wp_enqueue_script('menu', get_stylesheet_directory_uri() . '/js/menu.js', array(), null, true);

    // Enqueue Swiper JS from CDN
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
}

// Get customizer options from parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);

    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}


