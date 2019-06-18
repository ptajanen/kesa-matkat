<?php
//access the global query and get the post in it
global $wp_query;
$posts = $wp_query;

//incluede header.php
get_header();
?>
    <h1>Blogit tageittain</h1>
    <ul>
        <?php
        //Access the global query and get 
        global $wp_query;
        $posts = $wp_query->posts;            
                foreach( $posts as $post ) :  setup_postdata($post); ?> 
                <a href="<?php the_permalink(); ?>"><?php the_post_tag(); ?></a>
        <?php endforeach; ?>
    </ul>
<?php
get_footer();