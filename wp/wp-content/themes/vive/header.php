<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Ministerio Vive</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="<? bloginfo('stylesheet_url')?>">
</head>
<body id="top" class="scrollspy">
<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div> 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-container" class="brand-logo">
                <img src="<?php bloginfo('template_url') ?>/img/logo-small.png" alt="">
            </a>

                  <?php
            
                        $args = array(
                          'theme_location' => 'top-bar',
                          'depth'    => 0,
                          'container'  => false,
                          'menu_class'   => 'right hide-on-med-and-down',
                          'walker'   => new BootstrapNavMenuWalker()
                        );

                        wp_nav_menu($args);
                      
                 ?>


                <?php
            
                        $args = array(
                          'theme_location' => 'top-bar',
                          'depth'    => 0,
                          'container'  => false,
                          'menu_class'   => 'side-nav',
                        'menu_id'   => 'nav-mobile',
                          'walker'   => new BootstrapNavMenuWalker()
                        );

                        wp_nav_menu($args);
                      
                 ?>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>  
    </nav>
</div>