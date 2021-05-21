<?php

/**
 * The template fro displaying archive pages.
 *
 * @package Wordpress
 * @subpackage Tega_Games
 * @since v1.0.0
 */

get_header();

$description = get_the_archive_description();

if (have_posts()) : ?>

    <header class="page-header">
        <?php the_archive_title('<h1 class="page-title text-center">', '</h1>'); ?>
        <?php if ($description) : ?>
            <div class="archive-description">
                <?php echo wp_kses_post(wpautop($description)); ?>
            </div>
        <?php endif; ?>
    </header>

    <div class="category-grid">
        <?php while (have_posts()) :
            the_post();
            get_template_part('template-parts/content/category', 'category');
        endwhile; ?>
    </div>

    <?php the_posts_navigation(); ?>

<?php else : ?>
    <?php get_template_part('template-parts/content/content-none'); ?>
<?php endif; ?>

<?php get_footer(); ?>