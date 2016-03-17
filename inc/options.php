<?php

// Default options values
$tk_options = array(
	'footer_copyright' => '&copy; ' . date('Y') . ' ' . get_bloginfo('name'),
	'intro_text' => '',
	'featured_cat' => '',
	'layout_view' => 'fixed',
	'author_credits' => true
);

if ( is_admin() ) : // Load only if we are viewing an admin page

function tk_register_settings() {
	// Register settings and call sanitation functions
	register_setting( 'tk_theme_options', 'tk_options', 'tk_validate_options' );
}

add_action( 'admin_init', 'tk_register_settings' );



// Page and Posts Layout
$tk_layouts = array(
	'left' => array(
		'value' => 'left',
		'label' => 'Left Sidebar'
	),
	'right' => array(
		'value' => 'right',
		'label' => 'Right Sidebar'
	),
	'full' => array(
		'value'	=> 'full',
		'label'	=> 'Full Width'
	)
);

function tk_theme_options() {
	// Add theme options page to the admin menu
	add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'tk_theme_options_page' );
}

add_action( 'admin_menu', 'tk_theme_options' );

// Function to generate options page
function tk_theme_options_page() {
	global $tk_options, $tk_categories, $tk_layouts;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

	<div class="wrap">

	<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>";
	// This shows the page's name and an icon if one has been provided ?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'tk_options', $tk_options ); ?>
	
	<?php settings_fields( 'tk_theme_options' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	<table class="form-table">

	<tr valign="top"><th scope="row"><label for="footer_copyright">Footer Copyright Notice</label></th>
	<td>
	<input id="footer_copyright" name="tk_options[footer_copyright]" type="text" value="<?php  esc_attr_e($settings['footer_copyright']); ?>" />
	</td>
	</tr>

	<tr valign="top"><th scope="row"><label for="about_text">About Us text</label></th>
	<td>
	<textarea id="about_text" name="tk_options[about_text]" rows="5" cols="30"><?php echo stripslashes($settings['about_text']); ?></textarea>
	</td>
	</tr>



	<tr valign="top"><th scope="row">Page and Post Layout</th>
	<td>
	<?php foreach( $tk_layouts as $layout ) : ?>
	<input type="radio" id="<?php echo $layout['value']; ?>" name="tk_options[page_layout]" value="<?php esc_attr_e( $layout['value'] ); ?>" <?php checked( $settings['page_layout'], $layout['value'] ); ?> />
	<label for="<?php echo $layout['value']; ?>"><?php echo $layout['label']; ?></label><br />
	<?php endforeach; ?>
	</td>
	</tr>

	<tr valign="top"><th scope="row">Blog Posts</th>
	<td>
	<input type="checkbox" id="blog_posts" name="tk_options[blog_posts]" value="1" <?php checked( true, $settings['blog_posts'] ); ?> />
	<label for="blog_posts">Show Blog Posts</label>
	</td>
	</tr>

	</table>

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

function tk_validate_options( $input ) {
	global $tk_options, $tk_categories, $tk_layouts;

	$settings = get_option( 'tk_options', $tk_options );
	
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	$input['footer_copyright'] = wp_filter_nohtml_kses( $input['footer_copyright'] );
	
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	$input['about_text'] = wp_filter_post_kses( $input['about_text'] );
	
	// We select the previous value of the field, to restore it in case an invalid entry has been given
	$prev = $settings['page_layout'];
	// We verify if the given value exists in the layouts array
	if ( !array_key_exists( $input['page_layout'], $tk_layouts ) )
		$input['page_layout'] = $prev;
	
	// If the checkbox has not been checked, we void it
	if ( ! isset( $input['blog_posts'] ) )
		$input['blog_posts'] = null;
	// We verify if the input is a boolean value
	$input['blog_posts'] = ( $input['blog_posts'] == 1 ? 1 : 0 );
	
	return $input;
}

endif;  // EndIf is_admin()