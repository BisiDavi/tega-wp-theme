<?php

/**
 * Template part for displaying no post message
 *
 * @package Wordpress
 * @subpackage Tega_Games
 */
?>

<section class="no-results container-fluid">
    <div class="row">
        <header class="page-header col-12">
            <?php if (is_search()) : ?>
                <h1 class="page-title">
                    <?php printf(
                        esc_html__('Resutls for "%s"', 'tegagames'),
                        '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
                    );
                    ?>
                </h1>
            <?php else : ?>
                <h1 class="page-title text-center">
                    <?php esc_html_e('Nothing here', 'tegagames'); ?>
                </h1>
            <?php endif; ?>
        </header>

        <div class="page-content col-12">
            <?php if (is_home() && current_user_can('publish_posts')) : ?>
                <?php printf(
                    '<p class="text-center">' . wp_kses(
                        __('Ready to publish your first post? <a href="%s">Get started here</a>.', 'tegagames'),
                        array(
                            'a' => array('href' => array(),),
                        )
                    ) . '</p>',
                    esc_url(admin_url('post-new.php'))
                );
                ?>

            <?php elseif (is_search()) : ?>
                <p class="text-center"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try a different keyword'); ?></p>
                <div class="d-flex justify-content-center">
                    <?php get_search_form(); ?>
                </div>
            <?php else : ?>
                <p class="text-center"><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tegagames'); ?></p>
                <div class="d-flex justify-content-center">
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>