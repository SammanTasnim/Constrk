<?php get_header(); ?>
    <!--====================  End of breadcrumb area  ====================-->
    <div class="page-wrapper section-space--inner--120">
        <!--Blog section start-->
        <div class="blog-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 order-1 order-lg-2">
                        <div class="row">

                            <div class="blog-details col-12">
                                <?php
                                while(have_posts(  )){
                                    the_post(  );
                                    $image_url = get_the_post_thumbnail_url(  );
                                    ?>
                                    <div class="blog-inner">
                                        <div class="media">
                                            <div class="image"><img src="<?php echo esc_url($image_url); ?>" alt=""></div>
                                        </div>
                                        <div class="content">
                                            <ul class="meta">
                                                <?php
                                                $author_link = get_the_author_link(  );
                                                $author = get_the_author(  );
                                                ?>
                                                <li>By <a href="<?php echo esc_url($author_link); ?>"><?php echo esc_html( $author ); ?></a></li>
                                                <li><?php echo get_the_date(  ); ?></li>
                                                <li><?php echo get_comments_number(); ?> <?php echo esc_html__('Comments', 'construct'); ?></li>
                                            </ul>
                                            <h2 class="title"><?php echo the_title(  ); ?></h2>
                                            <div class="desc section-space--bottom--30">
                                                <p><?php echo the_content(  ); ?></p>

                                            </div>
                                            <ul class="tags">
                                                <li><i class="fa fa-tags"></i></li>
                                                <?php
                                                $tags = get_the_tags();
                                                if(is_array($tags)){
                                                    foreach($tags as $tag){
                                                        $tag_name = $tag->name;
                                                        $tag_link = get_term_link($tag);
                                                        ?>
                                                        <li><a href="#">Consulting</a></li>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                
                            </div>

                            <?php
                            if ( !post_password_required() && (comments_open() || get_comments_number()) ) {
                                comments_template();
                            }
                            ?>

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
        <!--Blog section end-->
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