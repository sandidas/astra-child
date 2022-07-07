<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 24.05.2019
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '24.05.2019' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// wordpress custom login logo
function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_site_url().'/wp-content/uploads/2019/06/Logo.png) !important; background-size:85px!important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');