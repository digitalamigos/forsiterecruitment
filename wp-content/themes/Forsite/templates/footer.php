<footer class="site-footer">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 order-lg-2 d-flex justify-content-center justify-content-lg-end mb-3">
            <a href="<?= esc_url(home_url('/')); ?>" title="Forsite Partners" style="text-decoration: none;">
                <img class="footer-logo d-block d-lg-none img-fluid mb-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer-mobile.png?12" alt="<?php bloginfo('name'); ?>">                
                <p class="d-block d-lg-none text-white">Forsite Partners</p>
                <img class="footer-logo d-none d-lg-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png" alt="<?php bloginfo('name'); ?>">
            </a>            
        </div>
        <div class="col-lg-8 order-lg-1 d-flex justify-content-center justify-content-lg-start flex-column flex-lg-row  mb-3">
            <ul class="footer-nav nav text-center d-none d-lg-flex">
                <li class="nav-item">
                    <a class="nav-link forsite-partner-logo" href="<?php the_field('visit_our_partners_link', 'option'); ?>">
                        <img class="d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/forsite-logo-footer.png" alt="Forsite Partner Website">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon icon_left icon_phone" href="tel:<?php the_field('contact_number', 'option'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('contact_number', 'option'); ?></a>        
                </li>
            </ul>

            <?php
            if (has_nav_menu('footer_navigation')) :
                wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav nav flex-column flex-lg-row text-center']);
            endif;
            ?>
            
            <ul class="footer-nav nav text-center d-block d-lg-none">
                <li class="nav-item">
                    <a class="nav-link" href="#">Visit Forsite Partners</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="d-flex justify-content-between justify-content-lg-end align-items-center mb-2 mb-lg-3">
        <ul class="footer-social list-inline d-block d-lg-none mb-0">
            <?php if(get_field('contact_number', 'option')): ?>
            <li class="list-inline-item mr-2"><a href="tel:<?php the_field('contact_number', 'option'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <span class="sr-only"><?php the_field('contact_number', 'option'); ?></span></a></li>
            <?php endif; ?>
            <?php if(get_field('linkedin_link', 'option')): ?>
            <li class="list-inline-item mr-2"><a href="<?php the_field('linkedin_link', 'option'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i> <span class="sr-only">Linkedin</span></a></li>
            <?php endif; ?>
            <?php if(get_field('facebook_link', 'option')): ?>
            <li class="list-inline-item"><a href="<?php the_field('facebook_link', 'option'); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="sr-only">Facebook</span></a></li>
            <?php endif; ?>
        </ul>        
    </div>
  </div>
</footer>

<div id="back-to-top"><a href="#site" class="footer__scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i> <span class="sr-only">Scroll to Top</span></a></div>