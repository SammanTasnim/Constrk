<?php
/**
 * Template name: Project Template
 */
?>

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
                    <div class="col-lg-12">
                        <div class="project-item-wrapper">
                            <div class="row">
                            <?php 
                            global $wp_query;
                            $args = array(
                                
                                'post_type' => 'project',
                                'posts_per_page' => 2,
                                'post_status' => 'publish',
                                
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'paged' => get_query_var('paged'),
                            );

                            $wp_query = new WP_Query($args);
                            
                           
                            ?>
                            <?php
                            while($wp_query->have_posts(  )){
                                $wp_query->the_post(  );
                                
                              ?>
                                <div class="col-lg-4 col-sm-6 col-12 section-space--bottom--30">
                                    <div class="service-grid-item service-grid-item--style2">
                                        <div class="service-grid-item__image">
                                            <div class="service-grid-item__image-wrapper">
                                                <a href="<?php echo the_permalink(  ); ?>">
                                                    <?php 
                                                    $img_url = get_the_post_thumbnail_url();
                                                    ?>
                                                    <img src="<?php echo esc_url($img_url); ?>" class="img-fluid" alt="">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="service-grid-item__content">
                                            <h3 class="title">
                                                
                                                <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                                            </h3>
                                            <p class="subtitle"><?php the_excerpt(  ); ?></p>
                                            <a href="<?php echo the_permalink(); ?>" class="see-more-link">SEE MORE</a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>

                                
                                



                            </div>
                        </div>
                    </div>
                </div>

                <div class="row section-space--top--60">
                    <div class="col">
                        <ul class="page-pagination">
                        <?php 
                        the_posts_pagination(array(
                            'prev_text' => '<li><a><i class="fa fa-angle-left"></i> Prev</a></li>',
                            'next_text' => '<li><i class="fa fa-angle-right"></i> Next</li>'
                        ));
                        ?>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
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
                                
                            <?php
                                $projects_attachments = new Attachments( 'testimonial_contact_attachment' );
                                
                                while($projects_attachments->get()){
                                    $immg_url = $projects_attachments->url();
                                    ?>
                                    <div class="swiper-slide brand-logo-slider__single">
                                        <div class="image">
                                            
                                                <img src="<?php echo $immg_url; ?>" class="img-fluid" alt="">
                                            
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