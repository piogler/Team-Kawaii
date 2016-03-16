<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Team_Kawaii
 */

?>
<?php
$front_general_image = get_theme_mod( 'teamkawaii_front_general_image', esc_url( get_template_directory_uri() . '/images/nightshot2.jpg' ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'team_kawaii' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
				
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
		</div><!-- .site-branding -->
		<div id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'team_kawaii' ); ?></button>
			<?php wp_nav_menu( array( 
				'theme_location' => 'primary',
				'menu_id' => 'primary-menu' 
			) );
			?>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->
	<?php if( is_front_page() && is_home() ) : ?>
		
		<div id="the-head" class="front-page-head" style="background: url('<?php if( is_front_page() && is_home() ): echo ( ( $front_general_image ) ? esc_url( $front_general_image ) : '' ); endif; ?>');">
			<?php
				get_template_part( 'template-parts/front-page/frontpage', 'frongpage' );
			?>
		</div>
	<?php endif; ?>
	<div id="content" class="content">
