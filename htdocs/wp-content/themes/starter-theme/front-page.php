<?php


$image = get_field('herokuva');

if( !empty($image) ): ?>

	<img id="otsake" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>


<?php the_post(); ?>
<?php get_header();?>
<main>
       
        <?php
        the_title( '<h1>','</h1>');
        the_content();

    
        $args = [
            'post_type' => 'blogs', // TODO: Change to the post type slug of blogs
            'posts_per_page' => 4,
        ];
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ): ?>
        
         <ul class = "artikkelit">
       <?php while ( $the_query->have_posts() ) :
         $the_query->the_post();?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <span>Custom field from $post: <?php the_field('author'); ?></span> 
        </li>
    <?php endwhile; ?>
    </ul>
   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
   <?php  endif; ?>
       </div>




         



        



        

</main>
<?php get_footer();?>      





