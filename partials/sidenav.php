<?php

function mat_customize_register_sidenav( $wp_customize ) {

    $wp_customize->add_section( 'sidenav', array(
        'title'         => __( 'Navigation' ),
        'priority'      => 20,
    ) );

    $wp_customize->add_setting( 'sidenav_position', array(
        'default'       => 'left',
    ) );
    $wp_customize->add_control( 'sidenav_position', array(
        'label'         => __( 'Position' ),
        'section'       => 'sidenav',
        'type'          => 'select',
        'choices'       => array(
            'left' => __( 'Left' ),
            'right' => __( 'Right' ),
            'top' => __( 'Top' ),
            'bottom' => __( 'Bottom' ),
        ),
    ) );

    $wp_customize->add_setting( 'sidenav_layout', array(
        'default'       => 'block',
    ) );
    $wp_customize->add_control( 'sidenav_layout', array(
        'label'         => __( 'Layout' ),
        'section'       => 'sidenav',
        'type'          => 'select',
        'choices'       => array(
            'block' => __( 'Block' ),
            'list' => __( 'List' ),
        ),
    ) );

}
add_action( 'customize_register', 'mat_customize_register_sidenav' );
