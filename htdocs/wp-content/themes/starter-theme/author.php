<?php /* Template Name: user_page_templ.php -template for a single user page */
 get_header();
 
 ?>
 <div class="pianContainer">
<div class="content">
    <?php
        $curauth = get_queried_object();
        // var_dump($curauth);

        $acf_key = 'user_'.$curauth->ID;
        // var_dump($acf_key);
        

            $name = get_field( 'employee_name', $acf_key );
            $desc = get_field( 'employee_description', $acf_key );
            $mail = get_field( 'employee_email', $acf_key);
            $prof = get_field( 'employee_title', $acf_key);
            $img = get_field( 'image', $acf_key);
            // var_dump($img);
            
?>
    <h1>Tietoa työntekijöistämme </h1>

    <div class = tahti>
    <h3>Tämän sivun tähti on:</h3> <h2><?php echo $name;?>!</h2>  
</div>  
    <h3>Taustatietoa Tähti-Oppaastamme:</h3> <p><?php echo $desc; ?></p>
   
    <h3>    ja tässä hän on</h3>
        <?php if( !empty($img) ): ?>
        <img class = "user_img" src="
        <?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>" />
        <h3> Tehtävä:</h3> <h4><?php echo $prof; ?></h4>  
        <h3>E-mail osoite:</h3> <h4><?php echo $mail; ?></h4>  
    <?php
    endif;
    ?>
    
    <ul>
    <h3>Tähtioppaamme <?php echo $curauth->nickname; ?> on julkaissut seuraavat artikkelit:</h3>
        <!-- The Loop -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link:
             <?php the_title(); ?>">
                <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

        <?php endwhile; else: ?>
        <h3>Tähtioppaamme <?php echo $curauth->nickname; ?>
            ei ole vielä julkaissut yhtään artikkelia. <?php  ?></h3>

        <?php endif; ?>

        <!-- End Loop -->

    </ul>
</div>

</pianContainer>
<?php

 get_footer();