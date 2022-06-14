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
    wp_enqueue_style( 'onewswp', get_template_directory_uri() . '/assets/css/style.css', ["onewswp-reboot"] );
    wp_enqueue_style( 'onewswp-reboot', get_template_directory_uri() . '/assets/css/reboot.css' );
}
/**
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 * do_action( 'wp_enqueue_scripts' )
 */
add_action( 'wp_enqueue_scripts', 'onewswp_styles' );

/**
 * Add menu navigation
 */
function onewsp_menus() {
    /**
     * https://developer.wordpress.org/reference/functions/add_theme_support/
     * add_theme_support( string $feature, mixed $args )
     */
    add_theme_support( 'menus' );
    /**
     * https://developer.wordpress.org/reference/functions/register_nav_menu/
     * register_nav_menu( string $location, string $description )
     */
    register_nav_menu( 'header-menu', 'Menu bas page' );

}
add_action( 'after_setup_theme', 'onewsp_menus' );
