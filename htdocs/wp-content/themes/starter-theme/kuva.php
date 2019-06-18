$user_info = get_queried_object();
$user_id = $user_info->ID;
$user_slug = 'user_' . $user_id;
  <?php 
    $image = get_field('tyontekijan_kuva', $user_slug );
    if( !empty($image) ): ?>
        <img class = "user_img" src="
        <?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php 
    endif;