<?php
/*
 * This is the template for the about section on the index page
 *
 * @package Team_Kawaii
 */
 ?>
 <?php
 $general_title = get_theme_mod( 'basetheme_about_general_title', esc_html__( 'About', ‘teamkawaii’) );
 $general_entry = get_theme_mod( 'basetheme_about_general_entry', esc_html__( 'Drone Photo Focus is  eu tellus placerat dolor maximus volutpat in sed quam. Suspendisse cursus sit amet dolor a elementum. In a magna in justo ullamcorper porttitor. Integer vulputate scelerisque ligula, sit amet tempus leo congue ut. Sed iaculis, ante ut pulvinar euismod, ipsum urna placerat urna, non euismod eros nulla non diam. In quis massa nibh.', ‘teamkawaii’) );
 ?>
 <div id="about" class="front-section">
	<h2 class="about"><?php echo esc_html ( $general_title ) ?></h2>
	<p class="front"><?php echo esc_html ( $general_entry ) ?></p>
</div>


