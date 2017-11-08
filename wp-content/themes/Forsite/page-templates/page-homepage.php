<?php
/**
 * Template Name: Page - Homepage
 */
?>

<section id="#featuredJobs" class="section bg-gray">
    <div class="container">
        <?php if(get_field('featured_section_title')): ?>
        <h2 class="section-title text-center"><?php the_field('featured_section_title'); ?></h2>
        <?php endif; ?>

        <?php if( have_rows('featured_jobs') ): ?>
        <div class="section-content">
            <div id="jsFeaturedJobs" class="featured-jobs">
                <?php while ( have_rows('featured_jobs') ) : the_row(); ?>
                <div class="featured-job text-center">
                    <h3 class="h4 font-weight-normal mb-3"><?php the_sub_field('featured_job_title'); ?></h3>
                    <h4 class="font-weight-normal mb-3"><?php the_sub_field('featured_job_company'); ?></h4>
                    <div class="mb-3">
                        <?php the_sub_field('featured_job_description'); ?>
                    </div>
                    <a class="btn btn-outline-primary btn-block btn-lg-inline-block" href="<?php the_sub_field('featured_job_link'); ?>">View job</a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="section bg-white sr-fadeinup">
    <div class="container">
        <?php if(get_field('solutions_section_title')): ?>
        <h2 class="section-title text-center"><?php the_field('solutions_section_title'); ?></h2>
        <?php endif; ?>

        <?php if( have_rows('solutions') ): ?>
        <div class="section-content">
            
            <?php $row = 0; ?>
            <?php while ( have_rows('solutions') ) : the_row(); ?>
                <?php if($row % 2 === 0): ?>
                <div class="brand-card brand-card_large mb-5 sr-fadeinup">
                    <div class="row align-items-center">
                        <div class="brand-card__img col-lg-5">  
                            <?php if($solution_image = get_sub_field('solution_image')): ?>                          
                                <?php echo wp_get_attachment_image( $solution_image['ID'], array('600', '400'), '', array('class' => 'img-fluid d-none d-lg-block' )); ?>
                            <?php endif; ?>
                        </div>
                        <div class="brand-card__body col-lg-7">
                            <div class="brand-card__content">
                                <?php if(get_sub_field('solution_title')): ?>
                                    <h3 class="brand-card__title h2"><strong><?php the_sub_field('solution_title'); ?></strong></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('solution_description')): ?>
                                    <div class="brand-card__text">
                                        <?php the_sub_field('solution_description'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_sub_field('learn_more_link')): ?>                                
                                    <a href="<?php the_sub_field('learn_more_link'); ?>" class="btn btn-outline-primary btn-block btn-lg-inline-block">Learn More</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="brand-card brand-card_right brand-card_large mb-5 sr-fadeinup">
                    <div class="row align-items-center">
                        <div class="brand-card__img col-lg-5 order-lg-2">
                            <?php if($solution_image = get_sub_field('solution_image')): ?>
                                <?php echo wp_get_attachment_image( $solution_image['ID'], array('600', '400'), '', array('class' => 'img-fluid d-none d-lg-block' )); ?>
                            <?php endif; ?>
                        </div>
                        <div class="brand-card__body col-lg-7 order-lg-1">
                            <div class="brand-card__content">
                                <?php if(get_sub_field('solution_title')): ?>
                                    <h3 class="brand-card__title h2"><strong><?php the_sub_field('solution_title'); ?></strong></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('solution_description')): ?>
                                    <div class="brand-card__text">
                                        <?php the_sub_field('solution_description'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_sub_field('learn_more_link')): ?>                                
                                    <a href="<?php the_sub_field('learn_more_link'); ?>" class="btn btn-outline-primary btn-block btn-lg-inline-block">Learn More</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php $row++; endwhile; ?>
               
        </div>
        <?php endif; ?>

    </div>
</section>

<section class="section bg-gray sr-fadeinup">
    <div class="container">
        <h2 class="section-title text-center sr-only">Who we are</h2>
        <div class="section-content">
            <div class="text-center">
                <div class="lead">
                    <?php the_field('who_we_are_description'); ?>
                </div>
                <a class="btn btn-primary btn-block btn-lg-inline-block" href="<?php the_field('who_we_are_link'); ?>">Who we are</a>
            </div>
        </div>
    </div>
</section>

<section class="section bg-white sr-fadeinup">
    <div class="container">
        <?php if(get_field('our_values_section_title')): ?>
        <h2 class="section-title text-center"><?php the_field('our_values_section_title'); ?></h2>
        <?php endif; ?>
        <?php if( have_rows('our_values') ): ?>
        <div class="section-content">
            <div class="row">
                <?php while ( have_rows('our_values') ) : the_row(); ?>
                <div class="col-sm-6 col-lg mb-3">

                    <div class="values-item">
                        <div class="values-item__top">
                            <?php if($our_value_icon = get_sub_field('our_value_icon')): ?>
                                <img class="mb-3" src="<?php echo $our_value_icon['url']; ?>" alt="<?php the_sub_field('our_value_name'); ?> Icon">
                            <?php endif; ?>
                            <?php if(get_sub_field('our_value_name')): ?>
                            <h3 class="h4 font-weight-normal mb-0"><?php the_sub_field('our_value_name'); ?></h3>
                            <?php endif; ?>
                        </div>
                        <div class="values-item__description">
                            <?php the_sub_field('our_value_description'); ?>
                            <?php if(get_sub_field('our_value_link')): ?>
                            <br>
                            <a href="<?php the_sub_field('our_value_link'); ?>">more...</a></p>
                            <?php endif; ?>
                        </div>
                        
                    </div> <!-- / .values-item -->

                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="section bg-gray sr-fadeinup">
    <div class="container">
        <?php if(get_field('our_partners_section_title')): ?>        
        <h2 class="section-title text-center"><?php the_field('our_partners_section_title'); ?></h2>
        <?php endif; ?>
        
        <?php $our_partners = get_field('our_partners'); ?>
        <?php if($our_partners): ?>
        <div class="section-content">
            <div id="jsOurPartners" class="partners d-flex align-items-center justify-content-center  flex-wrap">
                <?php foreach( $our_partners as $image ): ?>
                <div>
                    <a class="partners-item" href="<?php echo get_field('link_url', $image['ID']); ?>">
                        <img class="partners-item__image img-fluid" src="<?php echo $image['url']; ?>" alt="Partner">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>