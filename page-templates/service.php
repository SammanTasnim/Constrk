<?php
/**
 * Template name: Service
 */
?>
<?php get_header( ); ?>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Service section start-->
        <div class="service-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-item-wrapper">
                            <div class="row">
                                <?
                                $boxes = get_post_meta( get_the_ID(), '_construct_service_boxes', true );
                                if(is_array($boxes)){
                                    foreach($boxes as $box){
                                        $icon_class = isset($box['_construct_icon_class']) ? $box['_construct_icon_class'] : '';
                                        $box_title = isset($box['_construct_title']) ? $box['_construct_title'] : '';
                                        $box_content = isset($box['_construct_content']) ? $box['_construct_content'] : '';
                                        ?>
                                        <div class="col-lg-4 col-md-6 col-12 section-space--bottom--30">
                                            <div class="service-grid-item">
                                                <div class="service-grid-item__image">
                                                    <div class="service-grid-item__image-wrapper">
                                                        <a href="service-details.html">
                                                            <img src="assets/img/service/service1.jpg" class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="<?php echo esc_attr($icon_class); ?>"></i>
                                                    </div>
                                                </div>
                                                <div class="service-grid-item__content">
                                                    <h3 class="title">
                                                        <a href="service-details.html"><?php echo esc_html( $box_title ); ?></a>
                                                    </h3>
                                                    <p class="subtitle"><?php echo esc_html( $box_content ); ?></p>
                                                    <a href="service-details.html" class="see-more-link">SEE MORE</a>
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
        </div>
        <!--Service section end-->
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
                            <?php
                                $attachments = new Attachments( 'testimonial_project_attachment' );
                                while($attachments->get()){
                                    $img_url = $attachments->url();
                                    ?>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            
                                                <img src="<?php echo $img_url; ?>" class="img-fluid" alt="">
                                            
                                        </div>

                                    </div>
                                
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo area  ====================-->
    <!--====================  footer area ====================-->
<?php get_footer(  ); ?>