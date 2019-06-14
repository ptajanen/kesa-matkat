<?php
//access the global query and get the post in it
global $wp_query;
$posts = $wp_query;

//incluede header.php
get_header();
?>
    <h1>Blogit kategorioittain</h1>
    <?php if (!empty($post)) : ?>
        <ul>
            <?php foreach ($post as $post_obj) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink($post); ?>">
                        <?php the_title($post_obj); ?>
                    </a>
                </li>

                <!-- Display post content-->
            <?php endforeach; ?>
        </ul>
    <?php endif;
get_footer();
