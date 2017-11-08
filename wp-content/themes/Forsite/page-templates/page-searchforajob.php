<?php
/**
 * Template Name: Page - Search for a job
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <section class="section bg-white py-0">
        <?php the_content(); ?>
    </section>

<?php endwhile; ?>