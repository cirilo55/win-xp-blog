<?php 

function wpdevs_config(){
    add_theme_support( 'post-thumbnails' ) ;
}
add_action( 'after_setup_theme', 'wpdevs_config', 0 );



?>