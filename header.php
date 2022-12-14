<!DOCTYPE html>
<html class="no-js" <?php language_attributes(  ); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Constrk - Construction Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">

    <!-- CSS
	============================================ -->

    <?php wp_head(  ); ?>


</head>

<body  <?php body_class(  ); ?>>

  <?php wp_body_open(  ); ?>

    <!--====================  header area ====================-->
    <div class="header-area header-sticky header-sticky--default">
        <div class="header-area__desktop header-area__desktop--default">
            <!--=======  header top bar  =======-->
            <div class="header-top-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <!-- top bar left -->
                            <div class="top-bar-left-wrapper">
                                <div class="social-links social-links--white-topbar d-inline-block">
                                    <?php
                                    global $construct_options;
                                    $fb_link = $construct_options['up_header_fb_link'];
                                    $twitter_link = $construct_options['up_header_twitter_link'];
                                    ?>
                                    <ul>
                                        <li><a href="<?php echo esc_url($fb_link); ?>"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="<?php echo esc_url($twitter_link); ?>"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="//vimeo.com"><i class="zmdi zmdi-vimeo"></i></a></li>
                                        <li><a href="//linkedin.com"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                        <li><a href="//skype.com"><i class="zmdi zmdi-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- top bar right -->
                            <div class="top-bar-right-wrapper">

                                <a href="contact.html" class="ht-btn ht-btn--default d-inline-block">GET A QUOTE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header top bar  =======-->
            <!--=======  header info area  =======-->
            <div class="header-info-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-info-wrapper align-items-center">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/img/logo/logo.png" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!-- header contact info -->
                                <div class="header-contact-info">
                                    <div class="header-info-single-item">
                                        <div class="header-info-single-item__icon">
                                            <i class="zmdi zmdi-smartphone-android"></i>
                                        </div>
                                        <div class="header-info-single-item__content">
                                            <h6 class="header-info-single-item__title">Phone</h6>
                                            <p class="header-info-single-item__subtitle">98 9875 5968 54</p>
                                        </div>
                                    </div>
                                    <div class="header-info-single-item">
                                        <div class="header-info-single-item__icon">
                                            <i class="zmdi zmdi-home"></i>
                                        </div>
                                        <div class="header-info-single-item__content">
                                            <h6 class="header-info-single-item__title">Address</h6>
                                            <p class="header-info-single-item__subtitle">your address goes here</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header info area =======-->
            <!--=======  header navigation area  =======-->
            <div class="header-navigation-area default-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- header navigation -->
                            <div class="header-navigation header-navigation--header-default position-relative">
                                <div class="header-navigation__nav position-static">
                                    <nav>
                                    <?php 
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary-menu',
                                        // 'walker' => new WP_Bootstrap_Navwalker(),
                                        // 'menu_class' => 'nav-menu'
                                    ) );
                                    ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======  End of header navigation area =======-->
        </div>
    </div>
    <!--====================  End of header area  ====================-->
    <!--====================  breadcrumb area ====================-->
    <?php 
    if(is_page_template( 'page-templates/elementor-home.php' )){
        ?>
        <?php
    }
    else{
        ?>
        <?php
        global $construct_options;
        $breadcrumb_image = $construct_options['breadcrumb_image'];
        $breadcrumb_image_url = $breadcrumb_image['url'];
        ?>
        <div class="breadcrumb-area bg-img" data-bg="<?php echo esc_url($breadcrumb_image_url); ?>">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h1><?php wp_title(); ?></h1>
                            <p><?php construct_breadcrumb(); ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    
    