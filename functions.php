<?php 
// Load Stylesheets
function yogatish_register_styles(){

    wp_enqueue_style('yogatish-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), $version, 'all');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
    
}

add_action('wp_enqueue_scripts', 'yogatish_register_styles');



?>


<?php 
// Load Javascript
function yogatish_register_scripts(){

   wp_enqueue_script('yogatish-jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js', array(),'3.5.1', true);
   wp_enqueue_script('yogatish-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(),'1.16.1', true);
   wp_enqueue_script('yogatish-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(),'4.5.3', true);
    
}

add_action('wp_enqueue_scripts', 'yogatish_register_scripts');




// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');


// Menus
register_nav_menus(

    array(
        'main' => 'Main Location',
        'mobile-menu' => 'Mobile Menu Location'
    )

);




// Custom Image Sizes
add_image_size('blog-big', 2880, 1500, true);
add_image_size('blog-large', 1200, 400, true);
add_image_size('blog-small', 300, 200, true);





/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'template-kontakt.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/main.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );


?>