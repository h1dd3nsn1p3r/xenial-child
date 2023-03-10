<?php
/**
 * Functions definations for Xenial Child Theme.
 *
 * @since 1.0.0
 *
 * @package xenial_child
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'XENIAL_CHILD_THEME_VERSION' ) ) {
	define( 'XENIAL_CHILD_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
}


if ( ! function_exists( 'xenial_child_theme_enqueue_styles' ) ) {
	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 1.0.0
	 */
	function xenial_child_theme_enqueue_styles() {

		/**
        *
        * Load style.css in the root directory.
        */

		wp_enqueue_style(
			'xenial-child-style',
			get_stylesheet_directory_uri() . '/style.css',
			null,
			XENIAL_CHILD_THEME_VERSION,
			'all'
		);

        /**
        *
        * Load additional stylesheets.
        */

		//wp_enqueue_style(
		//	'xenial-child-public-style',
		//	get_stylesheet_directory_uri() . '/assets/build/css/main-public.css',
		//	null,
		//	XENIAL_CHILD_THEME_VERSION,
		//	'all'
		//);

        /**
        *
        * Load javascript files.
        */

		//wp_enqueue_script(
		//	'xenial-child-script',
		//	get_stylesheet_directory_uri() . '/assets/build/js/script.min.js',
		//	null,
		//	XENIAL_CHILD_THEME_VERSION,
		//	true
		//);
	}

	add_action( 'wp_enqueue_scripts', 'xenial_child_theme_enqueue_styles', 20 );
}


