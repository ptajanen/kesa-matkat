<?php
/**
 * The main functions file loading all source files.
 *
 * This files should only contain include statements!
 */

// Define the theme version. Bump the version up to update client-side caches.
define( 'ST_THEME_VERSION', '0.0.0' );

include_once get_template_directory() . '/src/assets.php';

function add_theme_scripts(){
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);
    wp_enqueue_style('starter-theme', get_theme_file_uri('/src/assets.php'));
}
//hooking to the front 
add_action('wp_enqueue_scripts', 'add_theme_scripts');
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
function wporg_custom_post_type(){
    register_post_type(
        'wporg_events',
        array(
            'events'      => array(
                'name'          => __('events'),
                'singular_name' => __('events'),
            ),
            'public'      => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'wporg_custom_post_type');

//add support for featured images
add_action('after_setup_theme', 'summertheme_setup_theme');
function summertheme_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
