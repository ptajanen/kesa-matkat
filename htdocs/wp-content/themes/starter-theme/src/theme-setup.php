<?php

add_action('after_setup_theme', 'startertheme_setup_theme');
function startertheme_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
