<?php
// Set Panel ID
$panel_id = 'teamkawaii_panel_what';

// Set prefix
$prefix = 'teamkawaii';

/* -------------------------------------
 * What We Do 
 -------------------------------------*/

$wp_customize->add_panel( $panel_id,
    array(
        'priority'          => 101,
        'capability'        => 'edit_theme_options',
		'theme_supports'	=> '',
        'title'             => esc_html__( 'What We Do', 'teamkawaii’' ),
        'description'       => esc_html__( 'This section allows you to describe what your company does.', 'teamkawaii' )
    )
);

/* -------------------------------------
 * General
 -------------------------------------*/
$wp_customize->add_section( $prefix . '_what_general' ,
    array(
        'title'       => esc_html__( 'General', 'teamkawaii’' ),
        'panel' 	  => $panel_id,
		'priority'	  => 1
    )
);

// Image
$wp_customize->add_setting(
    $prefix . '_what_general_image',
    array(
        'sanitize_callback' => 'esc_url_raw',
        'default'           => esc_url( get_template_directory_uri() . '/images/pillars.jpg’' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize, $prefix . '_what_general_image',
        array(
            'label'     => esc_html__( 'Image', 'teamkawaii' ),
            'section'   => $prefix .'_what_general',
            'settings'  => $prefix . '_what_general_image',
            'priority'  => 1
        )
    )
);

// Title
$wp_customize->add_setting( $prefix . '_what_general_title',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'What We Do', 'teamkawaii' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix . '_what_general_title',
    array(
        'label'         => esc_html__( 'Title', 'teamkawaii' ),
        'description'   => esc_html__( 'Insert your title here', 'teamkawaii'),
        'section'       => $prefix . '_what_general',
        'priority'      => 4
    )
);


// Entry
$wp_customize->add_setting( $prefix . '_what_general_entry',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Drone Photo Focus is  eu tellus placerat dolor maximus volutpat in sed quam. Suspendisse cursus sit amet dolor a elementum. In a magna in justo ullamcorper porttitor. Integer vulputate scelerisque ligula, sit amet tempus leo congue ut. Sed iaculis, ante ut pulvinar euismod, ipsum urna placerat urna, non euismod eros nulla non diam. In quis massa nibh.', 'teamkawaii' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( $prefix . '_what_general_entry',
    array(
        'label'         => esc_html__( 'Entry', 'teamkawaii' ),
        'description'   => esc_html__( 'The content added in this field will show below title.', 'teamkawaii'),
        'section'       => $prefix . '_what_general',
        'priority'      => 5,
        'type'          => 'textarea'
    )
);



