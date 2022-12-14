<?php

include_once get_template_directory() . '/lib/tgm.php';
include_once get_template_directory() . '/lib/breadcrumb.php';

function construct_scripts(){

    define('CONSTRUCT_ASSETS_VERSION', time());

    //Load CSS
    wp_enqueue_style( 'googleapis', '//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style( 'googleapis-two', '//fonts.googleapis.com/css?family=Poppins:300,400', array(), CONSTRUCT_ASSETS_VERSION );

    wp_enqueue_style('bootstrap', get_template_directory_uri(  ).'/assets/css/vendor/bootstrap.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style('font-awesome',get_template_directory_uri(  ).'/assets/css/vendor/font-awesome.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style('material', get_template_directory_uri(  ).'/assets/css/vendor/material-design-iconic-font.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style('ionicons', get_template_directory_uri(  ).'/assets/css/vendor/ionicons.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style('flaticon', get_template_directory_uri(  ).'/assets/css/vendor/flaticon.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style('swiper', get_template_directory_uri(  ).'/assets/css/plugins/swiper.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style('animate', get_template_directory_uri(  ).'/assets/css/plugins/animate.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style('lightgallery',get_template_directory_uri(  ).'/assets/css/plugins/lightgallery.min.css', array(), CONSTRUCT_ASSETS_VERSION );
    wp_enqueue_style( 'main', get_stylesheet_uri(  ), array(), CONSTRUCT_ASSETS_VERSION );
    

    //Load JS
    wp_enqueue_script( 'jquery', get_template_directory_uri(  ).'/assets/js/vendor/jquery-3.3.1.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri(  ).'/assets/js/vendor/bootstrap.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri(  ).'/assets/js/vendor/modernizr-2.8.3.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
   
    
    wp_enqueue_script( 'popper', get_template_directory_uri(  ).'/assets/js/vendor/popper.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'swiper', get_template_directory_uri(  ).'/assets/js/plugins/swiper.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'bootlightgallery', get_template_directory_uri(  ).'/assets/js/plugins/lightgallery.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'lg-video', get_template_directory_uri(  ).'/assets/js/plugins/lg-video.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri(  ).'/assets/js/plugins/waypoints.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'counterup', get_template_directory_uri(  ).'/assets/js/plugins/counterup.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'mailchimp', get_template_directory_uri(  ).'/assets/js/plugins/mailchimp-ajax-submit.min.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );
    wp_enqueue_script( 'main', get_template_directory_uri(  ).'/assets/js/main.js', array('jquery'), CONSTRUCT_ASSETS_VERSION, true );


}

add_action( 'wp_enqueue_scripts', 'construct_scripts' );



//Menu and others
function construct_setup() {
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support( 'post-thumbnails' );


   register_nav_menus( array(
       'primary-menu' => __('Primary menu', 'cpnstruct'),
       'footer_menu' => __('Footer menu','construct')
   ) );
}
add_action('after_setup_theme', 'construct_setup');



//Post views Count
   function count_post_visits() {
      if( is_single() ) {
         global $post;
         $views = get_post_meta( $post->ID, 'my_post_viewed', true );
         if( $views == '' ) {
            update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
         } else {
            $views_no = intval( $views );
            update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
         }
      }
   }
   add_action( 'wp_head', 'count_post_visits' );



   //Comment Form
   function construct_comment_fields($fields) {
    


    unset($fields['cookies']);
    unset($fields['url']);

    // bring comment textarea field at the end

    $comment_field_html = $fields['comment'];

    unset($fields['comment']);


    $fields['comment'] = $comment_field_html;
    


    $fields['author']  = '<div class="row row-10">
                              <div class="col-md-6 col-12 section-space--bottom--20"><input type="text" placeholder="Your Name" name="author">
                              </div>';
    $fields['email']   = '    <div class="col-md-6 col-12 section-space--bottom--20"><input type="email" placeholder="Your Email" name="email">
                              </div>';
    $fields['comment'] = '    <div class="col-12"><textarea placeholder="Your Message" name="comment"></textarea>
                              </div>
                        </div>';
 
    

    return $fields;
    
}
add_filter('comment_form_fields', 'construct_comment_fields');


function wpsites_change_comment_form_submit_label($arg) {
    $arg['label_submit'] = 'Send Comment';
    return $arg;
    }
add_filter('comment_form_defaults', 'wpsites_change_comment_form_submit_label');



// Attachments
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );





function construct_attachment( $attachments ) {
    $fields         = array(
        
    );

    $args = array(

        // title of the meta box (string)
        'label'         => 'Testimonials',

        // all post types to utilize (string|array)
        'post_type'     => array( 'page' ),

        // meta box position (string) (normal, side or advanced)
        'position'      => 'normal',

        // meta box priority (string) (high, default, low, core)
        'priority'      => 'high',

        // allowed file type(s) (array) (image|video|text|audio|application)
        'filetype'      => null,  // no filetype limit

        // include a note within the meta box (string)
        'note'          => 'Add testimonials here!',

        // by default new Attachments will be appended to the list
        // but you can have then prepend if you set this to false
        'append'        => true,

        // text for 'Attach' button in meta box (string)
        'button_text'   => __( 'Add testimonial', 'attachments' ),

        // text for modal 'Attach' button (string)
        'modal_text'    => __( 'Add testimonial', 'attachments' ),

        // which tab should be the default in the modal (string) (browse|upload)
        'router'        => 'browse',

        // whether Attachments should set 'Uploaded to' (if not already set)
        'post_parent'   => false,

        // fields array
        'fields'        => $fields,

    );

    $attachments->register( 'testimonial_contact_attachment', $args ); // unique instance name


    
}

add_action( 'attachments_register', 'construct_attachment' );



function construct_testimonial_location() {
    global $post;
    
    $selected_template = get_page_template_slug($post);
    if ( $selected_template == 'page-templates/contact.php' ) {
        return true;
    }
    elseif ( $selected_template == 'page-templates/service.php' ) {
      return true;
    }
    elseif ( $selected_template == 'page-templates/about.php' ) {
        return true;
    }
    //   elseif ( $selected_template == 'page-templates/projects.php' ) {
    //     return true;
    // }
    
    else {
        return false;
    }
}
add_filter('attachments_location_testimonial_contact_attachment', 'construct_testimonial_location');



function construct_projects( $attachments ) {
    $fields         = array(
        
    );

    $args = array(

        // title of the meta box (string)
        'label'         => 'Testimonials',

        // all post types to utilize (string|array)
        'post_type'     => array( 'page' ),

        // meta box position (string) (normal, side or advanced)
        'position'      => 'normal',

        // meta box priority (string) (high, default, low, core)
        'priority'      => 'high',

        // allowed file type(s) (array) (image|video|text|audio|application)
        'filetype'      => null,  // no filetype limit

        // include a note within the meta box (string)
        'note'          => 'Add testimonials here!',

        // by default new Attachments will be appended to the list
        // but you can have then prepend if you set this to false
        'append'        => true,

        // text for 'Attach' button in meta box (string)
        'button_text'   => __( 'Add testimonial', 'attachments' ),

        // text for modal 'Attach' button (string)
        'modal_text'    => __( 'Add testimonial', 'attachments' ),

        // which tab should be the default in the modal (string) (browse|upload)
        'router'        => 'browse',

        // whether Attachments should set 'Uploaded to' (if not already set)
        'post_parent'   => false,

        // fields array
        'fields'        => $fields,

    );

    $attachments->register( 'testimonial_project_attachment', $args ); // unique instance name


    
}

add_action( 'attachments_register', 'construct_projects' );

function construct_project_testimonial_location() {
    global $post;
    
    $selected_template = get_page_template_slug($post);
    
    if ( $selected_template == 'page-templates/projects.php' ) {
        return true;
    }
    
    else {
        return false;
    }
}
add_filter('attachments_location_testimonial_project_attachment', 'construct_project_testimonial_location');