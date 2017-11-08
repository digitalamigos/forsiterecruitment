<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="single-header d-flex align-items-center">
      <div class="container">
        <h1 class="single-title"><?php the_title(); ?></h1>
      </div>
    </header>
    <div class="single-content">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </div>
    <footer class="single-footer">
      <div class="container">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </div>
    </footer>    
  </article>
<?php endwhile; ?>
