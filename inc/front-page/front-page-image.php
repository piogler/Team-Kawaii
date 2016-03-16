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

