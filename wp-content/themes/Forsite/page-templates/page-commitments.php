<?php
/**
 * Template Name: Page - Our Commitments
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<section class="section bg-gray">
    <div class="container">
        <?php if(get_field('our_commitments_section_title')): ?>        
        <h2 class="section-title text-center"><?php the_field('our_commitments_section_title'); ?></h2>
        <?php endif; ?>
        
        <?php $our_commitments = get_field('our_commitments'); ?>
        <?php if($our_commitments): ?>
        <div class="section-content">
            <div id="jsOurCommitments" class="commitments d-flex align-items-center justify-content-center  flex-wrap">
                <?php foreach( $our_commitments as $image ): ?>
                <div>
                    <a class="commitments-item" href="<?php echo get_field('link_url', $image['ID']); ?>">
                        <img class="commitments-item__image img-fluid" src="<?php echo $image['url']; ?>" width="150" alt="Partner">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>