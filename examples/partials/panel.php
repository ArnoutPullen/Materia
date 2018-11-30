<?php

$wp_customize->add_panel('mypanel', array(
    'title'         => __('My awesome panel', 'domain'),
    'description'   => __("This is the description which doesn't want to show up :(", 'domain'),
    'capability'    => 'edit_theme_options',
    'priority'      => 2
));

$wp_customize->add_section('mysection', array(
    'title'    => __('My even more awesome section', 'domain'),
    'panel'    => 'mypanel',
    'description' => __('Section description which does show up', 'domain')
));

$wp_customize->add_setting('mysetting', array(
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
    ));

$wp_customize->add_control('mycontrol', array(
    'settings' => 'mysetting',
    'label'   => __('The most awesome control', 'domain'),
    'section' => 'mysection',
    'type'    => 'text'
));