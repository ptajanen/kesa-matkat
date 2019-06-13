<?php /* Template Name: user_page_templ.php -template for a single user page */
 get_header();
 
 ?>

 <div id="content" class="narrowcolumn">
<?php
$curauth = get_queried_object();

$acf_key = 'user_'.$curauth -> ID;

get_field( 'employee_name', $acf_key);
get_field( 'employee_description',$acf_key );
get_field( 'image', $acf_key );

 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) :
get_userdata(intval($author));
?>
<h2>Tämän sivun tähti on <?php echo $curauth->$employee_name;
 // vaihda kenttä custom nimi-kenttään?>!</h2>

<p><?php echo $curauth->description; ?></p>

    <h3>Taustatietoa Tähti-Oppaastamme: <?php echo $employee_description; ?></h3>
    <h3>ja tässä hän on <?php echo $image; ?></h3>
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