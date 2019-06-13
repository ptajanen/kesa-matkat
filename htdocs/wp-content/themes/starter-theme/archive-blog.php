<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<div id="container-blog">
		<div id="content" class="grid-x grid-padding-x">
			
			<main class="cell medium-10">
				<div class="grid-container">
					<div class="grid-x grid-padding-x small-up-2 medium-up-3">
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
			</main>
			<aside class="cell medium-2 accent-bg">
				<?php get_sidebar("blogs"); ?>
			</aside>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer(); ?>

<?php



/**
 * custom-post-type-blogit --> functions phpssä (wp4 tehtävä)
 * 
 * 
 * 

blogiarkisto archive- custom post type slug --> archive-blogs.php

--> looppi jolla tulostetaan artikkelit (käytä the excert-funkiota ei contenttia!) Foundation

--> single-blogit.php yksittäisen artikkelin sivu!*\
 */