<?php
/**
 * Team Kawaii Theme Customizer.
 *
 * @package Team_Kawaii
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function team_kawaii_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	/* Front Page Image - Calls for the Image that goes on the Front Page in the Customize Panel */
	require_once get_template_directory() . '/inc/front-page/front-page-image.php';
	
	/* About Section - calls for the about section on the options panel */
	require_once get_template_directory() . '/inc/front-page/about.php';
	
	/* What We Do Section - calls for the about section on the options panel */
	require_once get_template_directory() . '/inc/front-page/what-we-do.php';
	
}
add_action( 'customize_register', 'team_kawaii_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function team_kawaii_customize_preview_js() {
	wp_enqueue_script( 'team_kawaii_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'team_kawaii_customize_preview_js' );
