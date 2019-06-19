<?php
/**
 * The single template for blog articles.
 */

// Set the global post object for this template.
the_post();

get_header();

$tags = get_tags();

$pageLink = get_page_link();
?>

<div class = "container-blog">
	<div class="grid-y grid-padding-y">
		<div class="grid-x grid-padding-y" id="container-first-post">	
			<div class ="blog-description"><?php echo get_field("blogin_kuvaus" , "option"); ?></div>
			<div class="cell medium-9"> <?php //the latest blog-post?>
				<div class="grid-x grid-padding-x small-up-2">
					<div class= "first-post">
						<?php
							if (have_posts()) :
								the_post();?>
								<a href="<?php the_permalink(); ?>"> <?php the_title('<h3>', '</h3>' ); ?> </a>
								<?php the_post_thumbnail();    
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
			<h2 class="cards-title">Aiemmat blogipostaukset</h2>				
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
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>  
									<?php the_excerpt(); 
									?>
									</div> 
								</div>                            
							</div>                          
				<?php
						endwhile;
					endif; ?>   
					<?php echo paginate_links( $pageLink ); ?>				   
			   </div >  <!-- rid-x grid-padding... -->  
		</div>
	</div>
</div>		

<?php get_footer(); 


