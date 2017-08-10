<?php
/**
 * singrish functions and definitions
 */

//====================================================================================
//init
//====================================================================================

	if ( ! isset( $content_width ) ) :
		$content_width = 1280;
	endif;

	$theme         = wp_get_theme();
	$theme_version = $theme->get( 'Version' );
	define( 'COMMON_PFIX', get_template_directory_uri() );

	function readScript() {
		wp_enqueue_style( 'style', COMMON_PFIX . "/style.css", array(), $theme_version );
	}
	add_action( 'wp_enqueue_scripts', 'readScript' );
	add_theme_support( 'menus' );

/*
  variable
*/

/*
  require
*/
require_once locate_template( '/functions/customizer.php' );
