<?php
// Set Panel ID
$panel_id = 'teamkawaii_panel_front';

// Set prefix
$prefix = 'teamkawaii'; /* This is used just for simplicity */

/* -----------------------------------
 * Front Page Image
 ----------------------------------- */
$wp_customize->add_panel( /* This is to add a panel to the Options page */
	$panel_id, array(
		'priority'			=> 100,
		'capability'		=> 'edit_theme_options',
		'theme_supports'	=> '',
		'title'				=> esc_html__( 'Front Page Image', 'teamkawaii' ),
		'description'		=> esc_html__( ' This section allows for you to control the image, as well as the text, that goes on the front page.',
			'teamkawaii' )
	)
);

/* -----------------------------------
 * General Settings
 ----------------------------------- */
$wp_customize->add_section( $prefix . '_front_general', array(
		'title'		=> esc_html__( 'General Settings', 'teamkawaii' ),
		'panel'		=> $panel_id
	)
);

// Custom Background Image
$wp_customize->add_setting( $prefix . '_front_general_image', array(
		'sanitize_callback'	=> 'esc_url_raw',
		'default'			=> esc_url( get_template_directory_uri() . '/images/rome3.JPG' ),
		'transport'			=> 'postMessage'
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize, $prefix . '_front_general_image', array(
			'label'		=> esc_html__( 'Image', 'teamkawaii' ),
			'section'	=> $prefix . '_front_general',
			'settings'	=> $prefix . '_front_general_image',
			'priority'	=> 1
		)
	)
);

// Your Title
$wp_customize->add_setting( $prefix . '_front_general_title', array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'Drone Photo Focus', 'teamkawaii' ),
		'transport'			=> 'postMessage'
	)
);
$wp_customize->add_control( $prefix . '_front_general_title', array(
	'label'			=> esc_html__( 'Title', 'teamkawaii' ),
	'description'	=> esc_html__( 'Insert your title here', 'teamkawaii' ),
	'section'		=> $prefix . '_front_general',
	'priority'		=> 2
	)
);

// Entry Field
$wp_customize->add_setting( $prefix . '_front_general_entry', array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'Capturing from the Clouds', 'teamkawaii' ),
		'transport'			=> 'postMessage'
	)
);
$wp_customize->add_control( $prefix . '_front_general_title', array(
	'label'			=> esc_html__( 'Entry', 'teamkawaii' ),
	'description'	=> esc_html__( 'The content added to this field will show below the title', 'teamkawaii' ),
	'section'		=> $prefix . '_front_general',
	'priority'		=> 2
	)
);

// First button text
$wp_customize->add_setting( $prefix .'_gigantor_general_first_button_title', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Portfolio', 'teamkawaii' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_gigantor_general_first_button_title', array(
        'label'         => esc_html__( 'First button title', 'teamkawaii' ),
        'description'   => esc_html__( 'Add the text for first button.', 'teamkawaii'),
        'section'       => $prefix . '_gigantor_general',
        'priority'      => 6
    )
);

// First button URL
$wp_customize->add_setting( 'teamkawaii_gigantor_general_first_button_url', array(
        'sanitize_callback'  => 'esc_url_raw',
        'default'            => esc_url( '#' ),
        'transport'          => 'postMessage'
    )
);
$wp_customize->add_control( 'teamkawaii_gigantor_general_first_button_url', array(
        'label'          => esc_html__( 'First button URL', 'teamkawaii' ),
        'description'    => esc_html__( 'Add the URL for first button.', 'teamkawaii' ),
        'section'        => $prefix . '_gigantor_general',
        'settings'       => 'teamkawaii_gigantor_general_first_button_url',
        'priority'       => 7
    )
);

// Second button text
$wp_customize->add_setting( $prefix .'_gigantor_general_second_button_title', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Read More', 'teamkawaii' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_gigantor_general_second_button_title', array(
        'label'         => esc_html__( 'Second button title', 'teamkawaii' ),
        'description'   => esc_html__( 'Add the text for second button.', 'teamkawaii'),
        'section'       => $prefix . '_gigantor_general',
        'priority'      => 8
    )
);

// Second button URL
$wp_customize->add_setting( 'teamkawaii_gigantor_general_second_button_url', array(
        'sanitize_callback'  => 'esc_url_raw',
        'default'            => esc_url( '#' ),
        'transport'          => 'postMessage'
    )
);
$wp_customize->add_control( 'teamkawaii_gigantor_general_second_button_url', array(
        'label'          => esc_html__( 'Second button URL', 'teamkawaii' ),
        'description'    => esc_html__( 'Add the URL for second button.', 'teamkawaii' ),
        'section'        => $prefix . '_gigantor_general',
        'settings'       => 'teamkawaii_gigantor_general_second_button_url',
        'priority'       => 9
    )
);