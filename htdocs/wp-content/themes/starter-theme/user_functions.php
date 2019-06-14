<?php
add_action('after_setup_theme', 'startertheme_setup_theme');
function startertheme_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ); // sivuston tyylit

add_action( 'admin_enqueue_scripts', 'add_theme_scripts' );   // Adminin tyylit

function add_theme_scripts () {
    wp_enqueue_style( 'startertheme-style', get_theme_file_uri('assets/css/app.css') );
}

