<?php

//Prevent direct access to the file

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

//Set ACF field values as WP-SCSS variables

add_filter( 'wp_scss_variables', 'fc_theme_set_wp_scss_variables' );