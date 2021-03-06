<?php

get_header();

 if ( have_posts() ) : ?>

    <div class="grid-container">
        <div class="grid-x grid-padding-x small-up-2 medium-up-3">    
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="cell">
                <div class="card location-card">                    
                    <?php echo get_the_post_thumbnail( null, 'card-thumb', [ 'class' => 'location-card__thumb' ] ); ?>
                        <div class="card-section">
                            <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4></a>
                            <?php the_excerpt(); ?>
                            <p><a href="<?php the_permalink(); ?>">Lue lisää kohteesta</a></p>
                            <p><a href="<?php the_permalink(); ?>">Oppaasi tässä kohteessa</a></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        </div>
    </div>

<?php 

endif; // endif for The Loop

get_footer();