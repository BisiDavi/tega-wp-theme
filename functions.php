<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */

// load stylesheeets

function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/index.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('media-query', get_template_directory_uri() . '/assets/css/index.mediaquery.css', array(), false, 'all');
    wp_enqueue_style('media-query');

    wp_register_style('menu', get_template_directory_uri() . '/assets/css/menu.css', array(), false, 'all');
    wp_enqueue_style('menu');

    wp_register_style('archive', get_template_directory_uri() . '/assets/css/archive.css', array(), false, 'all');
    wp_enqueue_style('archive');

    wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), false, 'all');
    wp_enqueue_style('swiper');

    wp_register_style('font-css', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array(), false, 'all');
    wp_enqueue_style('font-css');
}

add_action('wp_enqueue_scripts', 'load_css');

// load js
function load_js()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0.0', true);

    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array('swiper-bundle'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

// menus
register_nav_menus(array(
    'top-menu' => 'Top Menu',
    'mobile-menu' => 'Mobile Menu'
));

add_image_size('blog-large', 1000, 5500, false);
add_image_size('blog-small', 81, 75, true);
