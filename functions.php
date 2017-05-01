<?php
function mat_enqueue_style() {
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'mat_enqueue_style' );

// function mat_enqueue_script() {
// 	wp_enqueue_script( 'my-js', 'filename.js', false );
// }
// add_action( 'wp_enqueue_scripts', 'mat_enqueue_script' );

/* Register Menu support */
function mat_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'mat_register_menu' );
/* Register Thumbnails support */
add_theme_support( 'post-thumbnails' ); 
?>