<?php
/**
 * Template name: Contact
 */
?>

<?php get_header(); ?>

    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Contact section start-->
        <div class="conact-section">
            <div class="container">

                

                <div class="row section-space--bottom--50">
                    <div class="col">
                        <?php
                        $map_shortcode = get_post_meta( get_the_ID(), '_construct_map_shortcode', true );
                        ?>
                        <?php echo  do_shortcode($map_shortcode); ?>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="contact-information">
                            <h3>Contact Information</h3>
                            <ul>
                                <?php
                                $boxes = get_post_meta( get_the_ID(), '_construct_information_boxes', true );
                                if(is_array($boxes)){
                                    foreach($boxes as $box){
                                        $class = $box['_construct_icon_class'];
                                        $text = $box['_construct_text'];
                                        ?>
                                        <li>
                                            <span class="icon"><i class="<?php echo esc_attr( $class ); ?>"></i></span>
                                            <span class="text"><span><?php echo esc_html($text); ?></span></span>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                                
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="contact-form">
                            <h3>Leave Your Message</h3>
                            <?php
                            $shortcode_contact_form = get_post_meta(get_the_ID(  ),'_construct_contact_form_shortcode', true);
                            echo do_shortcode( $shortcode_contact_form );
                            ?>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->
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
                                $attachments = new Attachments( 'testimonial_contact_attachment' );
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
 <?php get_footer(); ?>