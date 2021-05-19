<?php

/**
 *
 * @package Tega_Games
 * @since Tega_Games 1.0
 */

get_header();

// load the home page category
$about_args = array(
    'post_type' => 'post',
    'category_name' => 'about'
);
$aboutPost = new WP_Query($about_args);
if ($aboutPost->have_posts()) {
    while ($aboutPost->have_posts()) {
        $aboutPost->the_post();
        get_template_part('template-parts/section/about', 'about');
    }
}
wp_reset_postdata();

// load the home page category
$home_args = array(
    'post_type' => 'post',
    'category_name' => 'home'
);
$homepagePost = new WP_Query($home_args);
if ($homepagePost->have_posts()) {
    while ($homepagePost->have_posts()) {
        $homepagePost->the_post();
        get_template_part('template-parts/section/home', 'home');
    }
}
wp_reset_postdata();

// load slider post loop
$postArgs = array(
    'post_type' => 'post',
    'cat' => '-17, -18'
);
$sliderPost = new WP_Query($postArgs);
if ($sliderPost->have_posts()) {
    while ($sliderPost->have_posts()) {
        $sliderPost->the_post();
        get_template_part('template-parts/content/content', 'content');
    }
}
wp_reset_postdata();

get_footer();
