<?php
/**
 * The template for displaying the header
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      Maitake 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#444444">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="245" height="160" loading="eager">
		</a>
		<?php
		wp_nav_menu( array(
			'container'       => 'nav',
			'container_class' => 'global-nav',
			'theme_location' => 'primary'
		) ); ?>
	</header>
			<main>