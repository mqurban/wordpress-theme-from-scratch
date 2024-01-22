<?php 
function firstheme_files() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-university-js', get_template_directory_uri().'/js/main.js');
  }

  add_action('wp_enqueue_scripts', 'firstheme_files');


function firstheme_features() {

  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-logo' );
  
  register_sidebar( array(
    'name'=> 'sidebar',));
  register_sidebar( array(
    'name'=> 'footer-sidebar',
  ));

// add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','firstheme_features');

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' ),
        'footer-menu' => __('Footer Menu'),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );


function postthumbnailfunction() {    // user defined function 
  add_theme_support( 'post-thumbnails' );   // wordpress function 
}

add_action( 'after_setup_theme', 'postthumbnailfunction' )  // call back
?>

