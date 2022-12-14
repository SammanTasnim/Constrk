<?php get_header(); ?>
<?php
while(have_posts(  )){
    the_post(  );
}
?>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Projects section start-->
        
        
            <div class="project-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 section-space--bottom--40">
                            <div class="project-image"><img src="<?php echo get_the_post_thumbnail_url(  ); ?>" class="img-fluid" alt=""></div>
                        </div>

                        <div class="col-lg-4 col-12 section-space--bottom--30">
                            <div class="project-information">
                                <h3>Project Information</h3>
                                <ul>
                                    <li><strong>Client:</strong> <a href="#">RRS Company</a></li>
                                    <li><strong>Location:</strong> San Francisco</li>
                                    <li><strong>Area(sf):</strong> 550,000 sf</li>
                                    <li><strong>Year:</strong> 2018</li>
                                    <li><strong>Budget:</strong> $245000000</li>
                                    <li><strong>Architect:</strong> Scott & Austin</li>
                                    <li><strong>Sector:</strong> <a href="#">Tunnel</a>, <a href="#">Transport</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12 section-space--bottom--30 pl-30 pl-sm-15 pl-xs-15">
                            <div class="project-details">
                                <h2><?php the_title(  ); ?></h2>
                                <p><?php the_content(  ); ?></p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row row-5 image-popup">

                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 section-space--top--10">
                                    <a href="assets/img/projects/project-9.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project-9.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 section-space--top--10">
                                    <a href="assets/img/projects/project-10.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project-10.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 section-space--top--10">
                                    <a href="assets/img/projects/project-11.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project-11.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 section-space--top--10">
                                    <a href="assets/img/projects/project-12.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project-12.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 section-space--top--10">
                                    <a href="assets/img/projects/project-10.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project-10.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 section-space--top--10">
                                    <a href="assets/img/projects/project-11.jpg" class="gallery-item single-gallery-thumb"><img src="assets/img/projects/project-11.jpg" class="img-fluid" alt=""><span class="plus"></span></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
        
        ?>
        
        <!--Projects section end-->
    </div>

    <!--====================  brand logo area ====================-->
    <div class="brand-logo-slider-area grey-bg section-space--inner--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__wrapper">
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/1.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/2.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/3.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/4.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/1.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/2.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/3.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>
                                <div class="swiper-slide brand-logo-slider__single">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/img/brand-logo/4.png" class="img-fluid" alt="">
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo area  ====================-->
    <!--====================  footer area ====================-->
    <div class="footer-area dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content-wrapper section-space--inner--100">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <!-- footer intro wrapper -->
                                <div class="footer-intro-wrapper">
                                    <div class="footer-logo">
                                        <a href="#">
                                            <img src="assets/img/logo/logo-light.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-desc">
                                        Lorem ipsum dolor sit amet consect adipisici elit, sed do eiusmod tempor incididuk ut labore et dolore magna aliqua Ut enim
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">USEFUL LINKS</h4>
                                    <ul class="footer-widget__navigation">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Company News</a></li>
                                        <li><a href="#">Projects</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget__title">USEFUL LINKS</h4>
                                    <ul class="footer-widget__navigation">
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Showcase</a></li>
                                        <li><a href="#">Affliates</a></li>
                                        <li><a href="#">Disclaimer</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4">
                                <!-- footer widget -->
                                <div class="footer-widget mb-0">
                                    <h4 class="footer-widget__title">CONTACT US</h4>
                                    <div class="footer-widget__content">
                                        <p class="address">Your address goes here, street Crossroad123.</p>
                                        <ul class="contact-details">
                                            <li><span>P:</span>99 55 66 88 526</li>
                                            <li><span>F:</span>55 44 77 62</li>
                                            <li><span>E:</span>cons@email.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-wrapper">
            <div class="footer-copyright text-center">
                Copyright © 2019. All right reserved
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->
    <!--=======  offcanvas mobile menu  =======-->

    <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
        <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
            <i class="ion-android-close"></i>
        </a>

        <div class="offcanvas-wrapper">

            <div class="offcanvas-inner-content">
                <div class="offcanvas-mobile-search-area">
                    <form action="#">
                        <input type="search" placeholder="Search ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage One</a></li>
                                <li><a href="index-2.html">Homepage Two</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="service.html">Service</a>
                            <ul class="sub-menu">
                                <li><a href="service.html">Service Page</a></li>
                                <li><a href="service-details.html">Service Details Left Sidebar</a></li>
                                <li><a href="service-details-right-sidebar.html">Service Details Right Sidebar</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Project</a>
                            <ul class="sub-menu">
                                <li><a href="project.html">Project Page</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Submenu Level One</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Submenu Level Two</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                                <li><a href="#">Submenu Level Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                        <li><a href="#">Submenu Level Two</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>



                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info__list">
                                <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">(1245) 2456 012 </a></li>
                                <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

    </div>

    <!--=======  End of offcanvas mobile menu  =======-->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="ion-android-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper.min.js"></script>

    <!-- Light gallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="assets/js/plugins/lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>

    <!-- Counter up JS -->
    <script src="assets/js/plugins/counterup.min.js"></script>

    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>