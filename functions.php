<?php
/**
 * Roshni functions and definitions
 */

if ( ! function_exists( 'roshni_setup' ) ) :
	function roshni_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-logo' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'roshni' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'roshni_setup' );

function roshni_scripts() {
	wp_enqueue_style( 'roshni-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'roshni_scripts' );
