<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

function materia_enqueue_script() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/framework/js/jquery-3.2.1.min.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'materia_enqueue_script' );

