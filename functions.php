<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

function materia_enqueue_script() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/framework/js/jquery-3.2.1.min.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'materia_enqueue_script' );

// render theme views
function render_materia_view( $view ) {
    include( get_template_directory() . '/framework/views/' . $view . '.php' );
}
// theme scripts and stylesheets
function mat_load_default_style() {
    wp_enqueue_style( 'materia-style', get_stylesheet_uri() );
    wp_enqueue_style( 'materia-style', get_template_directory_uri() . '/framework/css/materia.css' );
    wp_enqueue_script( 'materia-script', get_template_directory_uri() . '/framework/js/materia.js' );
}
add_action( 'wp_enqueue_scripts', 'mat_load_default_style' );
// customizer
// https://developer.wordpress.org/themes/customize-api/customizer-objects/
// panel->sections->controls->settings
function mat_register_customize_settings( $wp_customize ) {
    $wp_customize->add_panel( 'settings', array(
        'title' => __('Panel'),
        'description' => 'Description Panel',
        'priority' => 160
    ) );
    $wp_customize->add_section( $section_id, array(
        'title' => $menu->name,
        'panel' => 'settings'
    ) );
    $wp_customize->add_setting( 'setting_id', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ) );
}
add_action( 'customize_register', 'mat_register_customize_settings' );

