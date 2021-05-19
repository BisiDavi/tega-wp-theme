<div id="home" class="swiper-slide">
    <div class="profile content row">
        <div class="content-profile col-lg-4">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content-bio col-lg-6">
            <?php the_title(' <h1 class="title">', '</h1>'); ?>
            <?php the_content(); ?>
        </div>
    </div>
</div>