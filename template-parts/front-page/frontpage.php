<?php
/**
 * This template is used for the front page.
 * It is used to display the Front Page Image section on the front page.
 *
 * @package Team_Kawaii
 */
?>
<?php
$title = get_theme_mod('teamkawaii_front_general_title', esc_html__ ('Drone Photo Focus', 'teamkawaii') );
$entry = get_theme_mod('teamkawaii_front_general_entry', esc_html__ ('Capturing from the Clouds', 'teamkawaii') );
$first_button = get_theme_mod('teamkawaii_front_general_first_button_title', esc_html__('Portfolio', 'teamkawaii') );
$second_button = get_theme_mod('teamkawaii_front_general_second_button_title', esc_html__('Read More', 'teamkawaii') );
$first_button_url = get_theme_mod('teamkawaii_front_general_first_button_url', esc_url('#') );
$second_button_url = get_theme_mod('teamkawaii_front_general_second_button_url', esc_url('#') );
?>

<div class="header-front">
	<h1 class="front-title">
		<?php echo esc_html($title); ?>
	</h1>
	<p class="front-entry">
		<?php echo esc_html($entry); ?>
	</p>
	<a href="<?php echo esc_url($first_button_url); ?>" title="<?php echo esc_attr($first_button); ?>" class="button-one">
		<?php echo esc_html($first_button); ?>
	</a>
	<a href="<?php echo esc_url($second_button_url); ?>" title="<?php echo esc_attr($second_button); ?>" class="button-two">
		<?php echo esc_html($second_button); ?>
	</a>
</div>