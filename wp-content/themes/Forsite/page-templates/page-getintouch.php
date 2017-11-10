<?php
/**
 * Template Name: Page - Get In Touch
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="page-content">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <?php the_content(); ?>
                </div>
                <div class="col-lg-4">
                    <?php if(get_field('contact_form_shortcode')): ?>
                        <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                    <?php endif; ?>
                    <div class="d-block d-lg-none text-center">
                        <?php if(get_field('contact_number', 'option')): ?>
                        <p class="h3">OR</p>
                        <a class="btn btn-primary btn-large btn-block" href="tel:<?php the_field('contact_number', 'option'); ?>">Call Us</a>
                        <?php endif; ?>
                    </div>
                </div>                
            </div>

            <?php if( have_rows('contact_persons') ): ?>
            <div class="row">

                <?php while ( have_rows('contact_persons') ) : the_row(); ?>
                <div class="col-lg-6">
                    <div class="brand-card mb-5">
                        <div class="row align-items-center">
                            <div class="brand-card__img col-sm-5">
                                <?php if($contact_person_thumbnail = get_sub_field('contact_person_thumbnail')): ?>                          
                                    <?php echo wp_get_attachment_image( $contact_person_thumbnail['ID'], array('400', '400'), '', array('class' => 'img-fluid' )); ?>
                                <?php endif; ?>
                            </div>
                            <div class="brand-card__body col-sm-7">
                                <div class="brand-card__content">
                                    <?php if(get_sub_field('contact_person_name')): ?>
                                        <h3 class="brand-card__title h5"><?php the_sub_field('contact_person_name'); ?></h3>
                                    <?php endif; ?>
                                    <?php if(get_sub_field('contact_person_position')): ?>                                    
                                        <h4 class="h4 brand-card__subtitle h5"><?php the_sub_field('contact_person_position'); ?></h4>                                
                                    <?php endif; ?>
                                    <div class="brand-card__contact">
                                        <?php if(get_sub_field('contact_person_email')): ?>
                                            <p class="m-0">E: <a class="text-tertiary" href="mailto:<?php the_sub_field('contact_person_email'); ?>"><?php the_sub_field('contact_person_email'); ?></a>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('contact_person_mobile')): ?>
                                            <br>
                                            T: <a class="text-tertiary" href="tel:<?php the_sub_field('contact_person_mobile'); ?>"><?php the_sub_field('contact_person_mobile'); ?></a></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.brand-card -->

                </div>
                <?php endwhile; ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
  
<?php endwhile; ?>