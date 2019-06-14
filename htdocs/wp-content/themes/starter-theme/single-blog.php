
<?php get_header();?>
<main>
<?php
       if (have_posts()) :
              while (have_posts()) :
                                   the_post();
                     the_title( '<h1>', '</h1>' );
                     the_post_thumbnail();    
                     the_content();

              endwhile;
       endif;
?>

       <div>
              <div
       <?php previous_post_link();?> 
       <?php next_post_link(); ?>
</main>
<?php get_footer();?>



