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
                           'supports'    => array('title', 'editor' , 'excerpt', 'content' ,'thumbnail'),
                           'taxonomies'  => array( 'category', 'post_tag' )
                           
                       )
    );

}
add_action('init', 'st_register_blog_cpt');

// Jotta kategoriat ja tagit näkyvät --> tämä funktio tuo esiin kaikki alla oleviin kategorioiin ja 
//tageihin liitetyt postaukset, post, blog, event jne

function tags_categories_support_query($wp_query) {
 if ($wp_query->get('tag')) {
   $wp_query->set('post_type', 'any');
 }
 if ($wp_query->get('category_name')) {
   $wp_query->set('post_type', 'any');
 }
}
add_action('pre_get_posts', 'tags_categories_support_query');

// ensure all tags and categories are included in queries


