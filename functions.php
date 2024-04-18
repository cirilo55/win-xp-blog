<?php 

function wpdevs_load_scripts(){
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );

function wpdevs_config(){
    add_theme_support( 'post-thumbnails' ) ;
}
add_action( 'after_setup_theme', 'wpdevs_config', 0 );



?>