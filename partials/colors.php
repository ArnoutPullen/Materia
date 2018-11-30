<?php

function mat_customize_register_colors( $wp_customize ) {

    $wp_customize->add_section( 'colors', array(
        'title'         => __( 'Colors' ),
        'priority'      => 20,
    ) );

    $wp_customize->add_setting( 'colors_primary', array(
        'default'       => '#303F9F',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_primary', 
        array(
            'label'      => __( 'Primary' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_secondary', array(
        'default'       => '#0288D1',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_secondary', 
        array(
            'label'      => __( 'Secondary' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_tertiary', array(
        'default'       => '#F57C00',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_tertiary', 
        array(
            'label'      => __( 'Tertiary' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_background_color', array(
        'default'       => '#E8E8E8',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_background_color', 
        array(
            'label'      => __( 'Background Color' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_content_background_color', array(
        'default'       => '#FFFFFF',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_content_background_color', 
        array(
            'label'      => __( 'Content Background Color' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_headline', array(
        'default'       => '#000000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_headline', 
        array(
            'label'      => __( 'Headline' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_text', array(
        'default'       => '#000000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_text', 
        array(
            'label'      => __( 'Text' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_link', array(
        'default'       => '#303F9F',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_link', 
        array(
            'label'      => __( 'Link' ),
            'section'    => 'colors',
        ) ) 
    );

    $wp_customize->add_setting( 'colors_link_hover', array(
        'default'       => '#0288D1',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_link_hover', 
        array(
            'label'      => __( 'Link Hover' ),
            'section'    => 'colors',
        ) ) 
    );

}
add_action( 'customize_register', 'mat_customize_register_colors' );

function mat_customize_css_colors() {
    ?><style type="text/css">
        :root {
            --mat-primary: <?php echo get_theme_mod( 'colors_primary', '#303F9F' ); ?>;
            --mat-secondary: <?php echo get_theme_mod( 'colors_secondary', '#0288D1' ); ?>;
            --mat-tertiary: <?php echo get_theme_mod( 'colors_tertiary', '#F57C00' ); ?>;

            --mat-background-color: <?php echo get_theme_mod( 'colors_background_color', '#E8E8E8' ); ?>;
            --mat-content-background-color: <?php echo get_theme_mod( 'colors_content_background_color', '#FFFFFF' ); ?>;

            --mat-heading-color: <?php echo get_theme_mod( 'colors_headline', '#000000' ); ?>;
            --mat-text-color: <?php echo get_theme_mod( 'colors_text', '#000000' ); ?>;

            --mat-link-color: <?php echo get_theme_mod( 'colors_link', '#303F9F' ); ?>;
            --mat-link-hover-color: <?php echo get_theme_mod( 'colors_link_hover', '#0288D1' ); ?>;
        }
    </style><?php
}
add_action( 'wp_head', 'mat_customize_css_colors');
