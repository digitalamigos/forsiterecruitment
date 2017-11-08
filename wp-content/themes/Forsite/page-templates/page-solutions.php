<?php
/**
 * Template Name: Page - Solutions
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="page-content pb-0">
        <div class="container">
            
            <?php the_content(); ?>

            <?php if( have_rows('our_solutions') ): ?>
                <?php while ( have_rows('our_solutions') ) : the_row(); ?>
                <div class="row mb-5">
                    <div class="col-lg-3">                        
                        <?php if(get_sub_field('our_solution_title')): ?>
                            <h2><?php the_sub_field('our_solution_title'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-9">
                        <?php if(get_sub_field('our_solution_description')): ?>
                            <?php the_sub_field('our_solution_description'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
  
<?php endwhile; ?>