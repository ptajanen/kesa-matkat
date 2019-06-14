<?php

add_action( 'after_setup_theme', 'startertheme_setup_theme');

// Register Custom post type
function st_register_blog_cpt()
{
    register_post_type('blog',
                       array(
                           'labels'      => array(
                               'name'          => __('Blogs'),
                               'singular_name' => __('Blogs'),
                           ),
                           'public'      => true,
                           'has_archive' => true,
                           'rewrite'     => array( 'slug' => 'blogit' ), 
                           'supports'    => array('title', 'editor' , 'excerpt', 'thumbnail'),
                           'taxonomies'  => array( 'category', 'post_tag' )
                           
                       )
    );

}
add_action('init', 'st_register_blog_cpt');

// Register Custom Post Type