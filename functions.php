<?php
/**
 * Roomish functions and definitions
 *
 * @package Roomish
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function roomish_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 64,
		'width'       => 64,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'roomish_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function roomish_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'roomish_content_width', 1120 );
}
add_action( 'after_setup_theme', 'roomish_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function roomish_scripts() {
	// Enqueue Google Fonts
	wp_enqueue_style( 'roomish-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap', array(), null );

	// Enqueue main stylesheet (minified version for production)
	wp_enqueue_style( 'roomish-style', get_template_directory_uri() . '/assets/css/style.css', array( 'roomish-fonts' ), '1.0.0' );

	// Enqueue main script
	wp_enqueue_script( 'roomish-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

	// Localize script for AJAX
	wp_localize_script( 'roomish-script', 'roomish_ajax', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'nonce'    => wp_create_nonce( 'roomish_nonce' ),
	) );

	// Add comment reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'roomish_scripts' );

/**
 * Add custom body classes.
 */
function roomish_body_classes( $classes ) {
	// Add class for front page
	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	// Add class for no sidebar
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'roomish_body_classes' );

/**
 * Add custom excerpt length.
 */
function roomish_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'roomish_excerpt_length', 999 );

/**
 * Add custom excerpt more.
 */
function roomish_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'roomish_excerpt_more' );

/**
 * Add theme support for editor styles.
 */
function roomish_add_editor_styles() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'roomish_add_editor_styles' );

/**
 * Remove unnecessary WordPress features for landing page theme.
 */
function roomish_remove_wp_features() {
	// Remove WordPress version from head
	remove_action( 'wp_head', 'wp_generator' );
	
	// Remove RSD link
	remove_action( 'wp_head', 'rsd_link' );
	
	// Remove wlwmanifest link
	remove_action( 'wp_head', 'wlwmanifest_link' );
	
	// Remove shortlink
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
}
add_action( 'init', 'roomish_remove_wp_features' );

/**
 * Add security headers.
 */
function roomish_security_headers() {
	if ( ! is_admin() ) {
		header( 'X-Content-Type-Options: nosniff' );
		header( 'X-Frame-Options: SAMEORIGIN' );
		header( 'X-XSS-Protection: 1; mode=block' );
	}
}
add_action( 'send_headers', 'roomish_security_headers' );

/**
 * Remove unnecessary WordPress scripts and styles.
 */
function roomish_remove_wp_scripts() {
	// Remove WordPress emoji scripts and styles
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove block editor styles
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );
	
	// Remove WordPress embed script
	wp_deregister_script( 'wp-embed' );
	
	// Remove jQuery migrate
	wp_deregister_script( 'jquery-migrate' );
	
	// Remove specific scripts by handle
	wp_dequeue_script( 'subscription-view' );
}
add_action( 'wp_enqueue_scripts', 'roomish_remove_wp_scripts', 100 );

/**
 * Remove WordPress emoji from TinyMCE editor.
 */
function roomish_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
add_filter( 'tiny_mce_plugins', 'roomish_disable_emojis_tinymce' );

/**
 * Remove WordPress emoji from DNS prefetch.
 */
function roomish_remove_emoji_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'roomish_remove_emoji_dns_prefetch', 10, 2 );
