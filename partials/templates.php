<?php

function mat_customize_register_templates( $wp_customize ) {
    // Add Template Section
    $wp_customize->add_section( 'templates', array(
        'title'         => __( 'Templates', MAT_SLUG ),
        'priority'      => 30,
    ) );

    // Register all templates
    $templates = array(
        'accordions' => __( 'Accordions', MAT_SLUG ),
        'cards'      => __( 'Cards', MAT_SLUG ),
        'content'    => __( 'Content', MAT_SLUG ),
    );

    // Default Template
    $wp_customize->add_setting( 'template_default', array(
        'default'       => 'content',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_default', 
        array(
            'label'      => __( 'Default', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );

    // Front Page
    $wp_customize->add_setting( 'template_front_page', array(
        'default'       => 'cards',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_front_page', 
        array(
            'label'      => __( 'Front Page', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );

    // Blog
    $wp_customize->add_setting( 'template_blog', array(
        'default'       => 'cards',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_blog', 
        array(
            'label'      => __( 'Blog', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );

    // Page
    $wp_customize->add_setting( 'template_page', array(
        'default'       => 'content',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_page', 
        array(
            'label'      => __( 'Page', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );

    // Archive
    $wp_customize->add_setting( 'template_archive', array(
        'default'       => 'cards',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_archive', 
        array(
            'label'      => __( 'Archive', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );

    // Single
    $wp_customize->add_setting( 'template_single', array(
        'default'       => 'content',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_single', 
        array(
            'label'      => __( 'Single', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );

    // Comments
    $wp_customize->add_setting( 'template_comments', array(
        'default'       => 'cards',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_comments', 
        array(
            'label'      => __( 'Comments', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );

    // Search
    $wp_customize->add_setting( 'template_search', array(
        'default'       => 'content',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'template_search', 
        array(
            'label'      => __( 'Search', MAT_SLUG ),
            'section'    => 'templates',
            'type'       => 'select',
            'choices'    => $templates
        ) ) 
    );
}
add_action( 'customize_register', 'mat_customize_register_templates' );