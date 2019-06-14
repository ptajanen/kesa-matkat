<?php the_post(); ?>
<?php get_header();?>
<main>
        <?php
          echo get_the_post_thumbnail(); 
        the_title( '<h1>', '</h1>' );
        the_content()
        ?>

</main>
<?php get_footer();?>      
