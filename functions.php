<?php

//Prevent direct access to the file

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

// Import further additional custom functions

require_once( trailingslashit( get_stylesheet_directory() ) . 'includes/style.php' );

// Get child theme version

function fc_theme_child_version() {
	$theme = wp_get_theme();
	if ( !$theme->exists() ) {
		return;
	}
	return $theme->get( 'Version' );
}

// Enqueue child theme admin scripts & styles

function fc_theme_child_enqueue_admin_scripts_styles() {
	wp_enqueue_style( 'fc_theme-admin-custom-style', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/admin-custom-style.css', array(), fc_theme_child_version(), 'all' );
	wp_enqueue_script( 'fc_theme-admin-custom-script', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/admin-custom-script.js', array(
		'jquery'
	), fc_theme_child_version(), true );
}
add_action( 'admin_enqueue_scripts', 'fc_theme_child_enqueue_admin_scripts_styles', 20 );

// Enqueue child theme scripts & styles

function fc_theme_child_enqueue_scripts_styles() {
	wp_enqueue_style( 'fc_theme-custom-webfonts', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/custom-webfonts.css', array(), fc_theme_child_version(), 'all' );
	wp_enqueue_style( 'fc_theme-custom-style', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/custom-style.css', array(), fc_theme_child_version(), 'all' );
	wp_enqueue_script( 'fc_theme-custom-script', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/custom-script.js', array(
		'jquery'
	), fc_theme_child_version(), true );
}
add_action( 'wp_enqueue_scripts', 'fc_theme_child_enqueue_scripts_styles', 20 );

?>