<header class="site-header fixed-top">
    <div id="jsHeader">
        <div class="topbar d-none d-lg-block">
            <div class="d-flex justify-content-end align-items-center">
                <a class="mr-auto" href="<?= esc_url(home_url('/')); ?>">                
                    <img class="top-bar__logo img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" alt="<?php bloginfo('name'); ?>">
                </a>
                <a class="btn btn-topbar btn-secondary btn-lg" href="<?php the_field('search_for_a_job_link', 'option'); ?>">Search for a job</a>
                <button class="navportal-toggler btn btn-topbar btn-primary btn-lg">Employee Portal</button>
            </div>
        </div>
        <div class="navbar">
            <div class="container-fluid">
                <a class="brand d-block d-lg-none" href="<?= esc_url(home_url('/')); ?>">
                    <img class="top-bar__logo img-fluid d-block d-lg-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-i-dark.png" alt="<?php bloginfo('name'); ?>">
                </a>

                <div class="ml-auto d-flex align-items-center">
                    <div class="navbar-social mr-3">
                        <a href="<?php the_field('linkedin_link', 'option'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i> <span class="sr-only">Linkedin</span></a>
                    </div>
                    <button class="search-toggler mr-3" type="button" aria-expanded="false" aria-label="Toggle Search">
                        <i class="fa fa-search" aria-hidden="true"></i> <span class="sr-only">Search</span>
                    </button>
                    <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>   
            </div>
        </div>
        <div class="navbar-search">
            <div class="container">
                <form class="search-box d-flex align-items-center" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                    <label class="sr-only" for="s">Search for:</label>
                    <div class="relative w-100">
                        <input class="form-control" type="search" value="" name="s" id="s" autocomplete="off" placeholder="Search...">
                        <button class="search-box__submit btn-link" type="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">Search</span></button>
                    </div>
                </form>
            </div>
        </div>    
    </div>

    <div class="navmenu bg-secondary d-flex flex-column align-items-center justify-content-center">
        <button type="button" class="navbar-close d-none d-lg-block" aria-label="Close"></button>
        <div class="navmenu__wrap align-items-center">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav text-center mb-lg-3']);
            endif;
            ?>
            <ul class="navbar-nav text-center mb-lg-0">
                <li class="nav-item">
                    <p class="nav-label d-none d-lg-block">For Consultancy Services</p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/forsite-partners-logo.png" alt="Forsite Partners"> <a href="<?php the_field('visit_our_partners_link', 'option'); ?>" class="nav-link">Visit Forsite Partners</a></p>
                </li>
            </ul>
            <div class="d-block d-lg-none mb-3">
                <a class="nav-btn btn btn-primary btn-block" href="<?php the_field('onboarding_link', 'option'); ?>">Onboarding</a>
            </div>
            <div class="d-block d-lg-none">
                <a class="nav-btn btn btn-primary btn-block" href="<?php the_field('timesheets_and_payroll_link', 'option'); ?>">Timesheets & Payroll</a>
            </div>
        </div>
    </div>
    <div class="navportal bg-primary d-none d-lg-flex flex-column justify-content-center align-items-center">
        <button type="button" class="navbar-close d-none d-lg-block" aria-label="Close"></button>
        <div class="row w-100 no-gutters text-center">
            <div class="col-md-7 mx-auto">
                <h2 class="text-white text-center">Log into</h2>
                <div class="row">
                    <div class="col-lg">
                        <a href="<?php the_field('onboarding_link', 'option'); ?>" class="btn btn-outline-white btn-large btn-block mb-3 mb-lg-0">Onboarding</a>
                    </div>
                    <div class="col-lg">
                        <a href="<?php the_field('timesheets_and_payroll_link', 'option'); ?>" class="btn btn-outline-white btn-large btn-block">Timesheets & Payroll</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
