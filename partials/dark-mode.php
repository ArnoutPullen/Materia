<?php

function mat_customize_register_dark_mode( $wp_customize ) {

    $wp_customize->add_section( 'dark_mode', array(
        'title'         => __( 'Dark Mode' ),
        'priority'      => 20,
    ) );

    $wp_customize->add_setting( 'dark_mode_active', array(
        'default'       => '',
    ) );
    $wp_customize->add_control( 'dark_mode_active', array(
        'label'         => __( 'On' ),
        'section'       => 'dark_mode',
        'type'          => 'checkbox'
    ) );

    $wp_customize->add_setting( 'dark_mode_background_color', array(
        'default'       => '#333333',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_mode_background_color', 
        array(
            'label'      => __( 'Background Color' ),
            'section'    => 'dark_mode',
        ) ) 
    );

    $wp_customize->add_setting( 'dark_mode_content_background_color', array(
        'default'       => '#232323',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_mode_content_background_color', 
        array(
            'label'      => __( 'Content Background Color' ),
            'section'    => 'dark_mode',
        ) ) 
    );

    $wp_customize->add_setting( 'dark_mode_text_color', array(
        'default'       => '#FFFFFF',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_mode_text_color', 
        array(
            'label'      => __( 'Text' ),
            'section'    => 'dark_mode',
        ) ) 
    );

    $wp_customize->add_setting( 'dark_mode_link_hover_color', array(
        'default'       => '#888888',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_mode_link_hover_color', 
        array(
            'label'      => __( 'Link Hover' ),
            'section'    => 'dark_mode',
        ) ) 
    );

}
add_action( 'customize_register', 'mat_customize_register_dark_mode' );

function mat_customize_css_dark_mode() {
    $darkmode = get_theme_mod( 'dark_mode_active' );
    if (!$darkmode) {
        return;
    }
    ?><style type="text/css">
        :root {
            --mat-background-color: <?php echo get_theme_mod( 'dark_mode_background_color', '#333333' ); ?>;
            --mat-content-background-color: <?php echo get_theme_mod( 'dark_mode_content_background_color', '#232323' ); ?>;

            --mat-heading-color: <?php echo get_theme_mod( 'dark_mode_text_color', '#FFFFFF' ); ?>;
            --mat-text-color: <?php echo get_theme_mod( 'dark_mode_text_color', '#FFFFFF' ); ?>;

            --mat-link-hover-color: <?php echo get_theme_mod( 'dark_mode_link_hover_color', '#888888' ); ?>;
        }
    </style><?php
}
add_action( 'wp_head', 'mat_customize_css_dark_mode');
