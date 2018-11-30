<?php

// https://codex.wordpress.org/Class_Reference/WP_Customize_Color_Control

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
	$wp_customize, 
	'link_color', 
	array(
		'label'      => __( 'Header Color', 'mytheme' ),
		'section'    => 'your_section_id',
		'settings'   => 'your_setting_id',
	) ) 
);