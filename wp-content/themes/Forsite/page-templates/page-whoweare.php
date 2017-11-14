<?php
/**
 * Template Name: Page - Who We Are
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="page-content">
        <div class="container">

            <?php the_content(); ?>

            
            
            <?php if(get_field('who_we_are_section_title')): ?>
            <h2 class="section-title"><?php the_field('who_we_are_section_title'); ?></h2>
            <?php endif; ?>

            <?php if( have_rows('wwa_our_team') ): ?>

                <?php $row = 0; ?>
                <?php while ( have_rows('wwa_our_team') ) : the_row(); ?>
                    <?php if($row % 2 === 0): ?>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="brand-card mb-5 sr-fadeinup">
                                    <div class="row align-items-start">
                                        <div class="brand-card__img col-md-5">
                                            <?php if($team_member_image = get_sub_field('team_member_image')): ?>                          
                                                <?php echo wp_get_attachment_image( $team_member_image['ID'], array('500', '420'), '', array('class' => 'img-fluid' )); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="brand-card__body col-md-7">
                                            <div class="brand-card__content">
                                                <?php if(get_sub_field('team_member_name')): ?>                                                    
                                                    <h3 class="brand-card__title h4"><?php the_sub_field('team_member_name'); ?></h3>
                                                <?php endif; ?>
                                                <?php if(get_sub_field('team_member_position')): ?>
                                                    <h4 class="h4 brand-card__subtitle h4 mb-3"><?php the_sub_field('team_member_position'); ?></h4>
                                                <?php endif; ?>
                                                <?php if(get_sub_field('team_member_description')): ?>
                                                    <div class="brand-card__text d-none d-lg-block">
                                                        <?php the_sub_field('team_member_description'); ?>
                                                    </div>
                                                <?php endif; ?>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="row">
                            <div class="col-lg-9 ml-auto">
                                <div class="brand-card mb-5 sr-fadeinup">
                                    <div class="row align-items-start">
                                        <div class="brand-card__img col-md-5">
                                            <?php if($team_member_image = get_sub_field('team_member_image')): ?>                          
                                                <?php echo wp_get_attachment_image( $team_member_image['ID'], array('500', '420'), '', array('class' => 'img-fluid' )); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="brand-card__body col-md-7">
                                            <div class="brand-card__content">
                                                <?php if(get_sub_field('team_member_name')): ?>
                                                    <h3 class="brand-card__title h4"><?php the_sub_field('team_member_name'); ?></h3>
                                                <?php endif; ?>
                                                <?php if(get_sub_field('team_member_position')): ?>
                                                    <h4 class="h4 brand-card__subtitle h4 mb-3"><?php the_sub_field('team_member_position'); ?></h4>
                                                <?php endif; ?>
                                                <?php if(get_sub_field('team_member_description')): ?>
                                                    <div class="brand-card__text d-none d-lg-block">
                                                        <?php the_sub_field('team_member_description'); ?>
                                                    </div>
                                                <?php endif; ?>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php $row++; endwhile; ?>

            <?php endif; ?>

        </div>
    </div>

    <section class="section bg-gray">
        <div class="container">
            <?php if(get_field('pwu_section_title')): ?>
            <h2 class="section-title text-center"><?php the_field('pwu_section_title'); ?></h2>
            <?php endif; ?>            
            <?php if(get_field('pwu_section_description')): ?>
            <div class="section-content text-center mb-5">
                <?php the_field('pwu_section_description'); ?>
            </div>
            <?php endif; ?>
            <?php if(get_field('pwu_call_to_action')): ?>
            <div class="text-center">
                <a class="btn btn-primary btn-block btn-lg-inline-block" href="<?php the_field('pwu_call_to_action'); ?>">Get in Touch</a>
            </div>
            <?php endif; ?>
        </div>
    </section>
<?php endwhile; ?>