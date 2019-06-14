<?php /* Template Name: user_page_templ.php -template for a single user page */
 get_header();
 
 ?>

<div id="content" class="narrowcolumn">
    <?php
        $curauth = get_queried_object();
        // var_dump($curauth);

        $acf_key = 'user_'.$curauth->ID;
        // var_dump($acf_key);
        

            $name = get_field( 'employee_name', $acf_key );
            $desc = get_field( 'employee_description', $acf_key );
            $img = get_field( 'image', $acf_key);
            var_dump($img);
            // http://localhost:8080/wp-content/uploads/2019/06/unelmien-mies-300x200.jpg"
            // http://localhost:8080/wp-content/uploads/2019/06/unelmien-mies.jpg

 ;
?>
    <h2>Tämän sivun tähti on <?php echo $name;?>!</h2>    
    <h3>Taustatietoa Tähti-Oppaastamme: <?php echo $desc; ?></h3>
   
    <p>    ja tässä hän on
        <?php if( !empty($img) ): ?>
        <img class = "user_img" src="
        <?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>" />
    <?php
    endif;
    ?></p>

    
    <ul>

        <!-- The Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3>Tähtioppaamme <?php echo $curauth->nickname; ?> on julkaissut seuraavat artikkelit:</h3>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link:
             <?php the_title(); ?>">
                <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

        <?php endwhile; else: ?>
        <p>Tähtioppaamme <?php echo $curauth->nickname; ?>
            ei ole vielä julkaissut yhtään artikkelia. <?php  ?></p>

        <?php endif; ?>

        <!-- End Loop -->

    </ul>
</div>
<?php
 get_footer();