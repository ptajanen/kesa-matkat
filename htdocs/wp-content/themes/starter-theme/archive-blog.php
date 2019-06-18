<?php
/**
 * The single template for blog articles.
 */

// Set the global post object for this template.
the_post();

get_header();

?>


<div class = "container">
	<div class="grid-y grid-padding-x">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-9"> <?php //the latest blog-post?>
				<div class="grid-x grid-padding-x small-up-2">
					
				<?php echo get_field("blogin_kuvaus" , "option"); ?>
					<div class= "first-post">
						<?php
							if (have_posts()) :
								the_post();
								the_title( '<h1>', '</h1>' );
								the_post_thumbnail();    
								the_content();
							endif;											
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
		<div class="cell medium-12"> <?php //cards?>
			<div class="grid-x grid-padding-x small-up-3">
				<?php
					if (have_posts()) :
						while (have_posts()) :
								the_post(); 
				?>
							<div class="cell">
								<div class="card">
									<?php the_post_thumbnail(); 
									?>        
									<div class="card-section">               
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>  
								
									</div> 
								</div>                            
							</div>                          
				<?php
						endwhile;
					endif; 
				?>          
			</div >  <!-- rid-x grid-padding... -->  
		</div>			
	</div>
</div>		

<?php get_footer(); 


