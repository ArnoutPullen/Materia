<?php
define('MAT_NAME', 'Material Design');
define('MAT_SLUG', 'mat');
define('MAT_THEME_DIR', plugin_dir_path(__FILE__));
define('MAT_THEME_URL', plugin_dir_url(__FILE__));

// Include shortcodes
foreach (glob( MAT_THEME_DIR . "includes/shortcodes/*.php") as $filename) {
    include $filename;
}

/**
 * Add theme support
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

/**
 * Remove filters
 * https://codex.wordpress.org/Function_Reference/remove_filter
 */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * Customizer Partials
 * https://codex.wordpress.org/Theme_Customization_API
 * https://developer.wordpress.org/themes/customize-api/customizer-objects/
 */
include( 'partials/colors.php' );
include( 'partials/sidenav.php' );
include( 'partials/dark-mode.php' );

/**
 * Include shortcodes
 */
include_once( 'includes/shortcodes/theme-shortcodes.php' );

function mat_get_view( $slug, $name = null ) {
    if ( isset( $name ) ) {
        get_template_part( 'template-parts/' . $slug );
    } else {
        get_template_part( 'template-parts/' . $slug, $name );
    }
}

// render theme views
function render_materia_view( $view ) {
    // get_template_part( 'template-parts' . $view );
    include( get_template_directory() . '/framework/views/' . $view . '.php' );
}
// theme scripts and stylesheets
function mat_load_default_style() {
    wp_enqueue_style( 'materia-style', get_stylesheet_uri() );
    wp_enqueue_style( 'materia-style', get_template_directory_uri() . '/assets/css/materia.css' );
    wp_enqueue_script( 'materia-script', get_template_directory_uri() . '/assets/js/materia.js' );
}
add_action( 'wp_enqueue_scripts', 'mat_load_default_style' );

function mat_admin_enqueue_scripts() {
    $darkmode = get_theme_mod( 'dark_mode_active', false );
    if ( $darkmode ) {
        wp_enqueue_style( 'mat_admin_css_dark_mode', get_template_directory_uri() . '/admin/css/dark-mode.css' );
    }
}
add_action( 'admin_enqueue_scripts', 'mat_admin_enqueue_scripts' );

function mat_admin_head() {
    $darkmode = get_theme_mod( 'dark_mode_active' );
    if ( !$darkmode ) {
        return;
    }
    ?><style type="text/css">
        :root {
            --mat-primary: <?php echo get_theme_mod( 'colors_primary', '#303F9F' ); ?>;
            --mat-secondary: <?php echo get_theme_mod( 'colors_secondary', '#0288D1' ); ?>;
            --mat-tertiary: <?php echo get_theme_mod( 'colors_tertiary', '#F57C00' ); ?>;

            --mat-background-color: <?php echo get_theme_mod( 'dark_mode_background_color', '#333333' ); ?>;
            --mat-content-background-color: <?php echo get_theme_mod( 'dark_mode_content_background_color', '#232323' ); ?>;

            --mat-heading-color: <?php echo get_theme_mod( 'dark_mode_text_color', '#FFFFFF' ); ?>;
            --mat-text-color: <?php echo get_theme_mod( 'dark_mode_text_color', '#FFFFFF' ); ?>;

            --mat-link-color: <?php echo get_theme_mod( 'colors_link' ); ?>;
            --mat-link-hover-color: <?php echo get_theme_mod( 'dark_mode_link_hover_color', '#888888' ); ?>;
        }
        body.mat-dark-mode :root {
            --test: black;
        }
    </style><?php
}
add_action( 'admin_head', 'mat_admin_head' );