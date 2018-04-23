<header class="banner fixed-top" id="header">
    <div class="header-top">
        <nav class="navbar ">
            <div class="container container-header ">
                <div class="header-top__inner d-flex justify-content-between align-items-center">
                    <div class="header-search-mobile hidden-sm-up">
                        <ul class="nav  header-nav">
                            <li>
                                <a href="#" title="Search"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-logo d-flex align-items-center">
                        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/kenkin-logo.png" alt="<?php bloginfo('name'); ?>"/>
                        </a>
                    </div>
                    <div class="header-search d-flex align-items-center hidden-sm-down <?php echo (!is_user_logged_in()) ? 'extend' : ''?>">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="social-media d-flex  on-top ">
                        <a href="#" title="Kenkin Facebook" class="d-block"><i class="fa fa-facebook-square" ></i></a>
                        <a href="#" title="Kenkin Twitter" class="d-block"><i class="fa fa-twitter-square" ></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <?php
    if (has_nav_menu('primary_navigation')) :?>
        <div class="header-bottom nav-down">
            <div class="container">
                <?php wp_nav_menu( array(
                        'theme_location'    => 'primary_navigation',
                        'container'         => 'div',
                        'container_class'   => 'header-container-category ',
                        'menu_class'        => 'nav cat d-flex justify-content-between top-nav')
                );?>
            </div>
        </div>
    <?php endif; ?>
</header>
