<div class="swiper-button-next control"></div>
<div class="swiper-button-prev control"></div>
<div class="swiper-pagination"></div>
<div thumbsSlider="" class="swiper-container mySwiper">
    <div id="thumbnail-slide" class="swiper-wrapper thumbnail-slide">
        <?php
        $about_args = array(
            'post_type' => 'post',
            'category_name' => 'about'
        );
        $aboutPost = new WP_Query($about_args);

        if ($aboutPost->have_posts()) {
            while ($aboutPost->have_posts()) {
                $aboutPost->the_post(); ?>
                <div class="swiper-slide">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
            <?php }
        }
        wp_reset_postdata();

        $home_args = array(
            'post_type' => 'post',
            'category_name' => 'home'
        );
        $homePost = new WP_Query($home_args);

        if ($homePost->have_posts()) {
            while ($homePost->have_posts()) {
                $homePost->the_post(); ?>
                <div class="swiper-slide">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
            <?php }
        }
        wp_reset_postdata();

        $postArgs = array(
            'post_type' => 'post',
            'cat' => '-17, -18'
        );
        $sliderPost = new WP_Query($postArgs);

        if ($sliderPost->have_posts()) {
            while ($sliderPost->have_posts()) {
                $sliderPost->the_post(); ?>
                <div class="swiper-slide">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
        <?php }
        }
        wp_reset_postdata();
        ?>
    </div>
</div>