<?php
/**
 * ONewswp Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ONewswp
 */

/**
 * Enqueue scripts and styles.
 */
/**
 * https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )
 */
function onewswp_styles() {
    wp_enqueue_style( 'onewswp', get_template_directory_uri() . '/oNews/css/style.css', ["onewswp-reboot"] );
    wp_enqueue_style( 'onewswp-reboot', get_template_directory_uri() . '/oNews/css/reboot.css' );
}
/**
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 * do_action( 'wp_enqueue_scripts' )
 */
add_action( 'wp_enqueue_scripts', 'onewswp_styles' );
