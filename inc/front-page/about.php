<?php
// Set Panel ID
$panel_id = 'teamkawaii_panel_about';

// Set prefix
$prefix = 'teamkawaii';

/* -------------------------------------
 *About				   
 -------------------------------------*/

$wp_customize->add_panel( $panel_id,
    array(
        'priority'          => 100,
        'capability'        => 'edit_theme_options',
		'theme_supports'		=> '',
        'title'             => esc_html__( 'About', 'teamkawaii' ),
        'description'       => esc_html__( 'This is a test.', 'teamkawaii' )
    )
);

/* -------------------------------------
 *General
 -------------------------------------*/
$wp_customize->add_section( $prefix.'_about_general' ,
    array(
        'title'       => esc_html__( 'General', 'teamkawaii' ),
        'panel' 	  => $panel_id
    )
);


// Title
$wp_customize->add_setting( $prefix .'_about_general_title',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'About', 'teamkawaii' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_about_general_title',
    array(
        'label'         => esc_html__( 'Title', 'teamkawaii' ),
        'description'   => esc_html__( 'Insert your title here', 'teamkawaii'),
        'section'       => $prefix . '_about_general',
        'priority'      => 2
    )
);


// Entry
$wp_customize->add_setting( $prefix .'_about_general_entry',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Drone Photo Focus is  eu tellus placerat dolor maximus volutpat in sed quam. Suspendisse cursus sit amet dolor a elementum. In a magna in justo ullamcorper porttitor. Integer vulputate scelerisque ligula, sit amet tempus leo congue ut. Sed iaculis, ante ut pulvinar euismod, ipsum urna placerat urna, non euismod eros nulla non diam. In quis massa nibh.', 'teamkawaii' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_about_general_entry',
    array(
        'label'         => esc_html__( 'Entry', 'teamkawaii' ),
        'description'   => esc_html__( 'The content added in this field will show below title.', 'teamkawaii'),
        'section'       => $prefix . '_about_general',
        'priority'      => 3,
        'type'          => 'textarea'
    )
);


