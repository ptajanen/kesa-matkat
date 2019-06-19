<?php
/* Template Name: Oppaiden listasivu */ 

$args = array(
    'orderby'       => 'name', 
    'order'         => 'ASC', 
    'number'        => null,
    'optioncount'   => false, 
    'exclude_admin' => true, 
    'show_fullname' => false,
    'hide_empty'    => false,
    'echo'          => true,
    'feed'          => [ ], 
    'feed_image'    => [ ],
    'feed_type'     => [ ],
    'style'         => 'list',
    'html'          => true,
    'exclude'       => [ ],
    'include'       => [ ] );

// Get users.
$user_query = new WP_User_Query( $args );
$users = $user_query->get_results();

get_header();
?>

<section class="main-container">

<h1><?php the_title(); ?></h1>

<?php if ( ! empty($users)) : ?>
<div class="grid-container">
    <div class="grid-x grid-padding-x small-up-2 medium-up-3">
    <?php foreach( $users as $user ) :
        $user_id = $user->ID;
        $acf_key = 'user_' . $user_id;
        $title = get_field( 'employee_title', $acf_key );
        $user_url = get_author_posts_url($user_id);  
    ?>
            <div class="cell">
            <div class="card">
                <!-- image here -->
                <div class="card-section">
                    <h4><?php esc_html_e( $title ); ?></h4>
                    <p>This row of cards is embedded in an X-Y Block Grid.</p>
                </div>
            </div>
            </div>
    <?php endforeach; ?>
    </div>
</div>
<?php else : ?>
<div class="grid-container">
  <div class="grid-x grid-padding-x">
    <div class="cell">
      <p>Oppaita ei löytynt!</p>
    </div>
  </div>
</div>
</section>
<?php endif; ?>

<?php
get_footer();