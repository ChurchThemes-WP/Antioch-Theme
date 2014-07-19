<?php
/*
===================================================================================================
WARNING! DO NOT EDIT THIS FILE OR ANY TEMPLATE FILES IN THIS THEME!

To make it easy to update your theme, you should not edit this file. Instead, you should create a
Child Theme first. This will ensure your template changes are not lost when updating the theme.

You can learn more about creating Child Themes here: http://codex.wordpress.org/Child_Themes

You have been warned! :)
===================================================================================================
*/

if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) && 'functions.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die( '<h1>Access Denied</h1>' );
}

/*---------------------------------------------------------------------------------------*/
/* Start ChurchThemes Functions - Please DO NOT edit this section! :)                    */
/*---------------------------------------------------------------------------------------*/

// Define theme location for bundled plugins
if ( !defined( 'WP_THEME_URL' ) ) {
	define( 'WP_THEME_URL', get_template_directory_uri() );
}
if ( !defined( 'WP_THEME_DIR' ) ) {
	define( 'WP_THEME_DIR', get_template_directory() );
}

require_once( get_template_directory() . '/config.php' );
require_once( get_template_directory() . '/lib/bootstrap.php' );

/*---------------------------------------------------------------------------------------*/
/* End ChurchThemes Functions - Thank you for your cooperation! :)                       */
/*---------------------------------------------------------------------------------------*/