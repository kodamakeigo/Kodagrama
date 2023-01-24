<?php

/**
 * Maitake functions and definitions
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */

/**
 * Theme Setup
 *
 * @since 1.0.0
 * @link  https://developer.wordpress.org/reference/functions/add_theme_support/
 */
function theme_setup()
{
	// Add thumbnail.
	add_theme_support('post-thumbnails');

	// Add post-feed, comment-feed.
	add_theme_support('automatic-feed-links');

	// Add title element.
	add_theme_support('title-tag');

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	));

	/**
	 * Post Formats Support
	 * @see: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat'
	));

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Content Width Support
	 * @see: https://codex.wordpress.org/Content_Width
	 */
	if (!isset($content_width)) {
		$content_width = 780;
	}

	// Add editor style.
	add_editor_style();

	// Set thumbnail size.
	set_post_thumbnail_size(1200, 9999);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(array(
		'primary' => 'Primary Menu'
	));

	theme_remove_action_head();
}
/**
 * wp_head() remove
 *
 * @since 1.0.0
 */
function theme_remove_action_head()
{
	// Remove WordPress version information.
	remove_action('wp_head', 'wp_generator');

	// Remove wlwmanifest address.（ Windows Live Writer for WordPress ）
	remove_action('wp_head', 'wlwmanifest_link');

	// Remove EditURI address.
	remove_action('wp_head', 'rsd_link');

	// Remove Short Link
	remove_action('wp_head', 'wp_shortlink_wp_head');

	// Remove emoji DNS prefetch.
	add_filter('emoji_svg_url', '__return_false');

	// Remove emoji script and style remove.
	remove_action('wp_head',             'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles',     'print_emoji_styles');
	remove_action('admin_print_styles',  'print_emoji_styles');
}
add_action('after_setup_theme', 'theme_setup');

/**
 * scripts and styles add
 *
 * @since 1.0.0
 */
function theme_scripts()
{
	// $version = wp_get_theme()->get( 'Version' );
	$version = time();

	wp_deregister_script('jquery');
	wp_deregister_script('jquery-migrate');

	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(), $version);
	wp_enqueue_script('slider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', array('jquery'), $version);
	wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), $version);

	// Theme stylesheet.
	wp_enqueue_style('slider-style', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css', array(), $version);
	wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), $version);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

/**
 * hentry microformats.org remove.
 *
 * @since 1.0.0
 */
function theme_remove_hentry($classes)
{
	$classes = array_diff($classes, array('hentry'));
	return $classes;
}
add_filter('post_class', 'theme_remove_hentry');
