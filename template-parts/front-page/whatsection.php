<?php
/*
 * This is the template for the what we do section on the index page
 *
 * @package Team_Kawaii
 */
 ?>
 <?php
 $what_title = get_theme_mod( 'teamkawaii_what_general_title', esc_html__( 'What We Do', 'teamkawaii') );
 $what_entry = get_theme_mod( 'teamkawaii_what_general_entry', esc_html__( 'This is what we do', 'teamkawaii' ) );
 $what_image = get_theme_mod( 'teamkawaii_what_general_image', esc_url( get_template_directory_uri() . '/images/pillars.jpg' ) );
 
 $what_style = 'background-image: url('. esc_url( $what_image ) .');';
 ?>
<div id="parallax" style="<?php echo $what_style; ?>">
	<div id="what" class="what front-section">
		<h2 class="what">What We Do</h2>
		<p class="front-sec">Lorem Ipsum here I suppose</p>
	</div>
</div>


