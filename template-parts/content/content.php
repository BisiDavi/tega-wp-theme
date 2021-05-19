<?php

/**
 * @package Wordpress
 * @subpackage Tega_Games
 * @since 1.0
 */

?>

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
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>