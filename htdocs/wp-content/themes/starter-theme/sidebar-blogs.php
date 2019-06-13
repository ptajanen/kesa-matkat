<?php ?>
			
<h5>Kuukausittaiset arkistot:</h5>
<ul>
    <?php wp_get_archives('type=monthly'); ?>
</ul>
<ul class="<?= $list_class; ?>">
    <?php 
        if (have_posts()) :
            while (have_posts()) :
                the_post(); 
                ?>
                <li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></li>
        <?php
            endwhile;
        endif; ?>            
</ul>             
<h5>Kategoriat:</h5>
<ul>
    <?php wp_list_categories( array( 'title_li' => '' )); ?>
    <?php wp_list_( array( 'title_li' => '' )); ?>
</ul>
