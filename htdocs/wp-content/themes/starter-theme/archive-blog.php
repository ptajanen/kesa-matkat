<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<div id="container-blog">
		<div id="content" >
			<?php the_post(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<p><?php the_excerpt(); ?></p>
			

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
			
			<h2>Kuukausittaiset arkistot:</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
						
			<h3>Kategoriat:</h3>
			<ul>
				<?php wp_list_categories( array( 'title_li' => '' )); ?>
			</ul>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer(); ?>

<?php
/**
 * custom-post-type-blogit --> functions phpssä (wp4 tehtävä)

blogiarkisto archive- custom post type slug --> archive-blogs.php

--> looppi jolla tulostetaan artikkelit (käytä the excert-funkiota ei contenttia!) Foundation

--> single-blogit.php yksittäisen artikkelin sivu!*\
 */