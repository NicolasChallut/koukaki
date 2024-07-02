<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

function theme_enqueue_assets() {
    // Enqueue parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/sass/styles.css', array('parent-style'));

    // Enqueue the video loader script
    wp_enqueue_script(
        'video-loader-script', 
        get_stylesheet_directory_uri() . '/js/video-loader.js', 
        array(), 
        null, 
        true
    );

    // Enqueue the Swiper JS library first if not already done
    if (!wp_script_is('swiper-js', 'enqueued')) {
        wp_enqueue_script(
            'swiper-js', 
            'https://unpkg.com/swiper/swiper-bundle.min.js', 
            array(), 
            '7.0.0', 
            true
        );
    }

    // Enqueue the custom Swiper initialization script
    wp_enqueue_script(
        'custom-swiper-js', 
        get_stylesheet_directory_uri() . '/js/custom-swiper.js', 
        array('swiper-js'), 
        null, 
        true
    );

    // Enqueue the menu script
    wp_enqueue_script(
        'menu-script', 
        get_stylesheet_directory_uri() . '/js/menu.js', 
        array(), 
        null, 
        true
    );

    // Enqueue the animated title script
    wp_enqueue_script(
        'animated-title-script', 
        get_stylesheet_directory_uri() . '/js/animated-title.js', 
        array(), 
        null, 
        true
    );
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
?>
