<?php get_header(); ?>

<?php
/**
 * Template name: Elementor Template
 */
?>

<?php  
while(have_posts(  )){
    the_post(  );

    the_content(  );
}
?>
    
<?php
?>

<?php get_footer(); ?>