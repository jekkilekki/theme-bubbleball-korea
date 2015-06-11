<?php
/**
 * bubbleball-korea specific functions and definitions
 *
 * @package bubbleball-korea
 */

/**
 * Register Social Menu
 */
function bubbleball_register_menus() {
    register_nav_menu( 'social', __( 'Social Menu', 'bubbleball-korea' ) );
}
add_action( 'init', 'bubbleball_register_menus' );

/**
 * Load Custom Slider file.
 */
require get_stylesheet_directory() . '/inc/options-framework/bubbleball-functions.php';

/**
 * Enqueue Scripts and Styles
 */
function bubbleball_scripts() {
    wp_enqueue_script( 'bubbleball_youtube_lightbox', get_stylesheet_directory_uri() . '/js/videoLightning.js', array('jquery'), '20150611', true );
}
add_action( 'wp_enqueue_scripts', 'bubbleball_scripts' );