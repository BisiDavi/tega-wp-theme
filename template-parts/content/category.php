<?php

/**
 * @package Wordpress
 * @subpackage Tega_Games
 */
?>

<div id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
    <?php if (is_singular()) : ?>
        <?php the_title('<h1 class="title>', '</h1>'); ?>
    <?php else : ?>
        <?php the_title(sprintf('<h2 class="title"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
    <?php endif; ?>
    <?php the_post_thumbnail(); ?>
</div>