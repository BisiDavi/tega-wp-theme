<?php

/**
 * @package Wordpress
 * @subpackage Tega Games
 */

get_header();

while (have_posts()) {
    the_post();

    get_template_part('template-parts/content/content');
}

get_footer();
