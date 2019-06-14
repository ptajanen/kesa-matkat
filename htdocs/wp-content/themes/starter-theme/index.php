<?php get_header(); ?>

<main>
    <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
                <?php the_post_thumbnail(); ?>        
                <h4><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?> </a></h4>  
                <?php the_excerpt(); ?>
                    <?php
            endwhile;
        endif; ?>          
</main>

<?php
get_footer();
