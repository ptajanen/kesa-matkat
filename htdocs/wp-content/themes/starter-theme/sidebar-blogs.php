<?php
    $tags = get_tags();
?>
<div class ="sidebar">
    <h5>Arkisto</h5>
    <?php wp_get_archives('type=monthly'); ?>
    <ul  class="monthly">
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
<h5>Maanosat</h5>
    <ul class="categories">
        <?php wp_list_categories( array( 'title_li' => '' )); ?>    
    </ul>
<h5>Kategoriat</h5>
    <ul class="tags">    
        <?php  $html = '<div class="post_tags">';
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );                   
                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                $html .= "{$tag->name}</a>" . " ";
            }
            $html .= '</div>';
            echo $html;   
        ?> 
    </ul>
</div>



