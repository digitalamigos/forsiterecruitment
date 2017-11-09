<div class="hero">
    <?php $home_hero_slider = get_field('home_hero_slider'); ?>

    <?php if(get_field('hero_option') === 'slider'): ?>
        <?php if($home_hero_slider): ?>
        <div id="jsHeroSlider" class="hero-slider">
            <?php foreach( $home_hero_slider as $image ): ?>
                <?php $hero_slide = wp_get_attachment_image_src($image['ID'], array('1920', '1200')); ?>
                <div class="hero-slider__img" style="background-image: url(<?php echo $hero_slide[0]; ?>);"></div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    <?php else: ?>
        <?php if($video = get_field('hero_video')): ?>
        <div class="hero-video">
            <div class="video-embed"><?php the_field('hero_video'); ?></div>
        </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="hero-content d-flex flex-column align-items-center justify-content-center">
        <div class="container d-flex justify-content-center align-items-center flex-column sr-fadeindown">
            <img class="hero-content__logo-desktop img-fluid mb-5 d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-hero.png" alt="<?php bloginfo('name'); ?> - Passionate about people">
            <img class="hero-content__logo-mobile img-fluid mb-5 d-block d-lg-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-hero-mobile.png" alt="<?php bloginfo('name'); ?> - Passionate about people">
            <div class="row w-100 no-gutters text-center">
                <div class="col-lg-6 mx-auto">
                    <div class="row">                        
                        <div class="col-lg-6">
                            <a href="<?php echo get_the_permalink(get_field('hero_search_for_a_job_link')); ?>" class="btn btn-primary btn-large btn-block mb-3 mb-lg-0">Search for a job</a>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?php echo get_the_permalink(get_field('hero_get_in_touch_link')); ?>" class="btn btn-primary btn-large btn-block">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="hero__next-section" href="#content"><i class="fa fa-angle-down" aria-hidden="true"></i><span class="sr-only">Next Section</span></a>
</div>