<?php
//access the global query and get the post in it

global $wp_query;
//var_dump( $wp_query); die;

//incluede header.php
get_header();
?>
    <h1>Blogit kategorioittain</h1>
        <?php if ( have_posts() ) : ?>
            <ul>
                <?php while ( have_posts() ) : the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </li>
                <?php endwhile; ?>
            </ul>
        <?php 
        endif; // endif for The Loop


get_footer();
