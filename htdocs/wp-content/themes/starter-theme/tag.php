<?php
//access the global query and get the post in it

global $wp_query;
//var_dump( $wp_query); die;

//incluede header.php
get_header();

$tags = get_tags();

?>
    <h1>Blogit kategorioittain</h1>
    <div class = "container-single-post">  
        <div class="grid-y grid-padding-x">
            <div class="grid-x grid-padding-x">
                <div class="cell medium-9"> <?php //the latest blog-post?>
                    <div class="grid-x grid-padding-x small-up-2">
                        <div class= "first-post">
                        <?php 
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post(); ?>
                            <div class="cell">
                                <div class="card">
                                    <?php the_post_thumbnail(); ?>        
                                    <div class="card-section">               
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>  
                                        <?php the_excerpt(); ?>
                                    </div> 
                                </div>                            
                            </div>                          
                <?php
                        endwhile;
                    endif; ?>          
                        </div>
                    </div>
                    <?php the_tags(); ?>     
                </div>
                <div class="cell medium-3"> <?php //sidebar?>
                    <aside class="cell medium-2 accent-bg"> 
                        <?php get_sidebar("blogs"); ?>
                    </aside>     
                </div> 
            </div> 
        </div>    
    </div>

<?php
get_footer();
