<?php

$wp_customize->add_setting( 'setting_id', array(
    'default'       => 'left',
) );

/**
 * text - default
 * checkbox
 * radio
 * select
 * dropdown-pages
 */
$wp_customize->add_control( 'setting_id', array(
    'label'         => __( 'Label' ),
    'section'       => 'section_id',
    'type'          => 'text',
) );

// advanced
/**
 * WP_Customize_Color_Control
 * WP_Customize_Upload_Control 
 * WP_Customize_Image_Control
 * WP_Customize_Header_Image_Control 
 * WP_Customize_Background_Image_Control
 */
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colors_primary', 
    array(
        'label'      => __( 'Primary' ),
        'section'    => 'colors',
    ) ) 
);