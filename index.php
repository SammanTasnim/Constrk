<?php get_header(); ?>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <div class="blog-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 order-1 order-lg-2">
                        <div class="row">
                            <?php
                            while(have_posts(  )){
                                the_post(  );
                                ?>
                                <div class="col-sm-6 col-12">
                                    <div class="blog-post-slider__single-slide blog-post-slider__single-slide--grid-view">
                                        <?php
                                        $image = get_the_post_thumbnail_url(  );
                                        ?>
                                        <div class="blog-post-slider__image section-space--bottom--30">
                                            <a href="<?php echo the_permalink(  ); ?>"><img src="<?php echo esc_url( $image ); ?>" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="blog-post-slider__content">
                                            <p class="post-date"><?php echo get_the_date(  ); ?></p>
                                            <?php
                                            
                                            ?>
                                            <h3 class="post-title">
                                                <a href="<?php echo the_permalink(  ); ?>"><?php echo the_title(  ); ?></a>
                                            </h3>
                                            <p class="post-excerpt"><?php echo the_excerpt(  ); ?></p>
                                            <a href="<?php echo the_permalink(  ); ?>" class="see-more-link"><?php echo esc_html( 'SEE MORE', 'construct' ); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            

                            

                        </div>

                        <div class="row ">
                            <div class="col">
                                
                                
                                <?php 
                                the_posts_pagination(array(
                                    'prev_text' => '<li><i class="fa fa-angle-left"></i> Prev</li>',
                                    'next_text' => '<li><i class="fa fa-angle-right"></i> Next</li>'
                                ));
                                ?>
                                    
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 order-2 order-lg-1">

                        <div class="sidebar">
                            <h3 class="sidebar-title">Search</h3>

                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" placeholder="Search" >
                                    <button><i class="ion-ios-search"></i></button>
                                </form>
                            </div>

                        </div>

                        <div class="sidebar">
                            <h3 class="sidebar-title">Categories</h3>

                            <ul class="sidebar-list">
                            <?php
                            $terms = get_terms();
                            
                            if(is_array($terms)){
                                foreach($terms as $term){
                                    $category_name = $term->name;
                                    ?>
                                    <li><a href="#"><?php echo esc_html( $category_name ); ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                            </ul>

                            

                        </div>

                        <div class="sidebar">
                            <h3 class="sidebar-title">Popular Post</h3>
                            <?php
                            $popular_posts_args = array(
                                'posts_per_page' => 3,
                                'meta_key' => 'my_post_viewed',
                                'orderby' => 'meta_value_num',
                                'order'=> 'DESC'
                            );
                            $popular_posts_loop = new WP_Query( $popular_posts_args );
                            while( $popular_posts_loop->have_posts() ):
                                $popular_posts_loop->the_post();
                                ?>
                                 <div class="sidebar-blog">
                                    <a href="<?php the_permalink(  ); ?>" class="image"><img src="<?php echo get_the_post_thumbnail_url(  ); ?>" alt=""></a>
                                    <div class="content">
                                        <h5><a href="blog-details-left-sidebar.html"><?php echo the_title(  ); ?></a></h5>
                                        <span><?php echo get_the_date(  ); ?></span>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_query();
                            ?>

                            

                            

                        </div>

                        <div class="sidebar">
                            <h3 class="sidebar-title">Popular Tags</h3>
                            <ul class="sidebar-tag">
                            <?php
                            $tags = get_tags(array(
                                'orderby' => 'count',
                                'order'   => 'DESC',
                                'number'  => 28,
                                
                            ));
                            foreach((array) $tags as $tag){
                                $tag_name = $tag->name;
                                $tag_link = get_term_link($tag);

                                ?>
                                <li><a href="<?php echo esc_url( $tag_link ); ?>"><?php echo esc_html( $tag_name ); ?></a></li>
                                <?php
                            }
                            ?>
                            </ul>
                            

                        </div>

                    </div>

                </div>
            </div>
        </div>
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
  <?php get_footer(); ?>