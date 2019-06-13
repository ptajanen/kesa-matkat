<?php the_post(); ?>
<?php get_header();?>
<main>
       <?php
       the_post_thumbnail();       
       the_title( '<h1>', '</h1>' );
       echo get_field ('start date');
       echo get_field ('end date');
       echo get_the_post_thumbnail();
       the_excerpt()?>
       <ul class="<?= $list_class; ?>">
</main>
<?php get_footer();?>



