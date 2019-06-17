<?php
/**
 * The single template for blog articles.
 */

// Set the global post object for this template.
the_post();

get_header();

?>

<main>
<div class = "container-single-post">  
	<div class="grid-y grid-padding-x">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-9"> <?php //the latest blog-post?>
				<div class="grid-x grid-padding-x small-up-2">
					<div class= "first-post">
                        <?php       
                            the_title( '<h1>', '</h1>' );
                            the_post_thumbnail();    
                            the_content();
                        ?>	
					</div>
				</div>
			</div>
			<div class="cell medium-3"> <?php //sidebar?>
				<aside class="cell medium-2 accent-bg"> 
					<?php get_sidebar("blogs"); ?>
				</aside>     
            </div> 
        </div> 
    </div>    
</div>
    <div class = "navigation">
        <div class = "previous-post">
            <?php previous_post_link();?> 
        </div>
        <div class="cell medium-2">
            <div class = "next-post">
                <?php next_post_link(); ?>
            </div>  
        </div>	
    </div>
                
<?php get_footer();?>



