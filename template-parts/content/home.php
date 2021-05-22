<?php

/**
 * @package Wordpress
 * @subpackage Tega_Games
 * @since 1.0
 */

?>
<main id="page" class="col-12 page-content">
    <div class="swiper-container mySwiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row content mx-auto game-profile">
                    <?php if (has_post_thumbnail()) :  ?>
                        <div class="content-video col-lg-7">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="content-text col-lg-4">
                        <?php the_title(' <h3 class="title">', '</h3>'); ?>
                        <div class="game-tags">
                            <?php $post_tags = get_the_tags(); ?>
                            <?php if ($post_tags) : ?>
                                <?php foreach ($post_tags as $tag) : ?>
                                    <p class="gamedesign">
                                        <?php echo $tag->name; ?>
                                    </p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/content/thumbnail', 'thumbnail'); ?>
        <a id="goUp" class="to-top"></a>
    </div>
</main>