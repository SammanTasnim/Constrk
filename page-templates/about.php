<?php
/**
 * Template name: About
 */
?>

<?php get_header(); ?>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--top--120">
        <!--About section start-->
        <div class="about-section section-space--inner--bottom--120">
            <div class="container">
                <div class="row row-25 align-items-center">

                    <div class="col-lg-6 col-12 mb-30">
                        <div class="about-image-two">
                            <img src="assets/img/about/about-3.jpg" alt="">
                            <span class="video-popup">
                                <?php
                                $video_link = get_post_meta( get_the_ID(), '_construct_video_link', true );
                                ?>
                            <a href="<?php echo esc_url($video_link); ?>" ><i class="ion-ios-play-outline"></i></a>
                        </span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-30">
                        <div class="about-content-two">
                            <?
                            $welcome_text = get_post_meta( get_the_ID(), '_construct_welcome', true );
                            $title = get_post_meta( get_the_ID(), '_construct_title', true );
                            $ready = get_post_meta( get_the_ID(), '_construct_ready', true );
                            $content = get_post_meta( get_the_ID(), '_construct_content', true );
                            
                            ?>
                            <h3><?php echo esc_html( $welcome_text ); ?></h3>
                            <h1><?php echo esc_html( $title ); ?></h1>
                            <h4><?php echo esc_html( $ready ); ?></h4>
                            <p><?php echo esc_html( $content ); ?></p>
                            <a href="service.html" class="ht-btn--default ht-btn--default--dark-hover section-space--top--20">Our Services</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--About section end-->
        <!--Feature section start-->
        <div class="feature-section section-space--inner--100 grey-bg">
            <div class="container">
                <div class="col-lg-12">
                    <div class="feature-item-wrapper">
                        <div class="row">
                            <?php
                            $rated_boxes = get_post_meta( get_the_ID(), '_construct_rated_boxes', true );
                            // var_dump($rated_boxes);
                            if(is_array($rated_boxes)){
                                foreach($rated_boxes as $rated_box){
                                    $rated_image = isset($rated_box['_construct_rated_image']) ? $rated_box['_construct_rated_image'] : '';
                                    $rated_title = isset($rated_box['_construct_rated_title']) ? $rated_box['_construct_rated_title'] : '';
                                    $rated_content = isset($rated_box['_construct_rated_content']) ? $rated_box['_construct_rated_content'] : '';
                                    ?>
                                    <div class="col-lg-4 col-md-6 col-12 section-space--bottom--30">
                                        <div class="feature">
                                            <div class="icon">
                                                <img src="<?php echo $rated_image; ?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="content">
                                                <h3><?php echo esc_html( $rated_title ); ?></h3>
                                                <p><?php echo esc_html( $rated_content ); ?></p>
                                                .......
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature section end-->
        <!--About section start-->
        <div class="about-section section-space--inner--120">
            <div class="container">
                <div class="about-wrapper row">

                    <div class="col-sm-6 col-12 order-1 order-lg-2">
                        <div class="about-image about-image-1">
                            <img src="assets/img/about/about-1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-sm-6 col-12 order-2 order-lg-3">
                        <div class="about-image about-image-2">
                            <img src="assets/img/about/about-2.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 order-3 order-lg-1">
                        <div class="about-content about-content-1">
                            <h1><span>50</span>Years of Experience</h1>
                            <p>ligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor ellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum atibus saepe eveniet ut et voluptates repudiandae sint et molestiae</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 order-4">
                        <div class="about-content about-content-2">
                            <p>ligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor ellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum atibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapie</p>
                            <a href="contact.html" class="ht-btn--default ht-btn--default--dark-hover section-space--top--20">Contact us</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--About section end-->
        <!--====================  fun fact area ====================-->
        <?php
        $background_image = get_post_meta( get_the_ID(), '_construct_background_image', true );
        ?>
        <div class="funfact-section section-space--inner--100 bg-img" data-bg="<?php echo $background_image; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fun-fact-wrapper">
                            <div class="row">
                                <?php
                                $boxes = get_post_meta( get_the_ID(), '_construct_total_client_boxes', true );
                                // var_dump($boxes);
                                if(is_array($boxes)){
                                    foreach($boxes as $box){
                                        $image = isset($box['_construct_total_image']) ? $box['_construct_total_image'] : '';
                                        $number = isset($box['_construct_number']) ? $box['_construct_number'] : '';
                                        $name = isset($box['_construct_name']) ? $box['_construct_name'] : '';
                                        ?>
                                        
                                        <div class="single-fact col-md-3 col-6 section-space--bottom--30">
                                            <img src="<?php echo esc_url($image); ?>" alt="">
                                            <h1 class="counter"><?php echo esc_html( $number ); ?></h1>
                                            <h4><?php echo esc_html($name); ?></h4>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of fun fact area  ====================-->
        <!--====================  team member area ====================-->
        <div class="team-member-area section-space--inner--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area text-center">
                            <h2 class="section-title section-space--bottom--50">Our Team <span class="title-icon"></span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="team-member-wrapper">
                            <div class="row">
                                <!--Team start-->
                                <?php
                                $team_boxes = get_post_meta( get_the_ID(), '_construct_our_team_boxes', true );
                                if(is_array($team_boxes)){
                                    foreach($team_boxes as $team_box){
                                        $team_image = isset($team_box['_construct_image']) ? $team_box['_construct_image'] : '';
                                        $name = isset($team_box['_construct_client_name']) ? $team_box['_construct_client_name'] : '';
                                        $client_position = isset($team_box['_construct_client_position']) ? $team_box['_construct_client_position'] : '';
                                        $client_email = isset($team_box['_construct_client_email']) ? $team_box['_construct_client_email'] : '';
                                        $client_facebook_link = isset($team_box['_construct_client_facebook_link']) ? $team_box['_construct_client_facebook_link'] : '';
                                        $client_twitter_link = isset($team_box['_construct_client_twitter_link']) ? $team_box['_construct_client_twitter_link'] : '';
                                        $client_linkedin_link = isset($team_box['_construct_client_linkedin_link']) ? $team_box['_construct_client_linkedin_link'] : '';
                                        ?>
                                         <div class="col-lg-3 col-sm-6 col-12 section-space--bottom--30">
                                            <div class="team">
                                                <div class="image">
                                                    <img src="<?php echo esc_url($team_image); ?>" alt="">
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"><?php echo esc_html( $name ); ?></h3>
                                                    <span><?php echo esc_html( $client_position ); ?></span>
                                                    <a href="#" class="email"><?php echo esc_html( $client_email ); ?></a>
                                                    <div class="social">
                                                        <a href="<?php echo esc_url($client_facebook_link); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                                        <a href="<?php echo esc_url($client_twitter_link); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                                        <a href="<?php echo esc_url($client_linkedin_link); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                        <a href="<?php echo esc_url($client_facebook_link); ?>" class="google"><i class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                               
                                <!--Team end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of team member area  ====================-->
        <!--====================  testimonial slider area ====================-->
        <!-- <div class="testimonial-slider-area testimonial-slider-area-bg section-space--inner--120 bg-img" data-bg="assets/img/backgrounds/testimonial.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="testimonial-slider">
                            <div class="testimonial-slider__container-area">
                                <div class="swiper-container testimonial-slider__container">
                                    <div class="swiper-wrapper testimonial-slider__wrapper">
                                        <div class="swiper-slide testimonial-slider__single-slide">
                                            <div class="author">
                                                <div class="author__image">
                                                    <img src="assets/img/testimonial/1.jpg" alt="">
                                                </div>
                                                <div class="author__details">
                                                    <h4 class="name">Madison Black</h4>
                                                    <div class="designation">Founder</div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                Lorem ipsum dolor sit amet, consectetur adipisi elit sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slider__single-slide">
                                            <div class="author">
                                                <div class="author__image">
                                                    <img src="assets/img/testimonial/2.jpg" alt="">
                                                </div>
                                                <div class="author__details">
                                                    <h4 class="name">Madison Black</h4>
                                                    <div class="designation">Founder</div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                Lorem ipsum dolor sit amet, consectetur adipisi elit sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slider__single-slide">
                                            <div class="author">
                                                <div class="author__image">
                                                    <img src="assets/img/testimonial/3.jpg" alt="">
                                                </div>
                                                <div class="author__details">
                                                    <h4 class="name">Madison Black</h4>
                                                    <div class="designation">Founder</div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                Lorem ipsum dolor sit amet, consectetur adipisi elit sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--====================  End of testimonial slider area  ====================-->
        <!--====================  brand logo area ====================-->
        <div class="brand-logo-slider-area section-space--inner--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
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

    </div>
    <!--====================  footer area ====================-->
 <?php get_footer(); ?>