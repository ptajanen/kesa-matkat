<?php /* Template Name: page_authors */ 

    get_header();
?>

<h4><?php the_title(); ?></h4>

                                     
                    <?php

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

                    // The Query
                    $user_query = new WP_User_Query( $args );
                    $users = $user_query->get_results();
                    
                    // User Loop
                    if ( ! empty( $users)) 
                    {  
                        
                        // <div class="grid-container">
                        //<div class="grid-x grid-padding-x small-up-2 medium-up-3">
                        
                            foreach ( $users as $user )
                            {

                echo '<div class="user">';
                $user_info = get_userdata($user->ID);
                
                echo get_user_meta($user->ID, 'employee_name', true) .'<br>';
                             
                

                if( !empty($img) ): ?>
        <img class = "user_img" src="
        <?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['alt']; ?>" />
        <?php
    endif;   
                //echo get_avatar( $user->ID, 128 );

                
            //     $user_link =
            //     '<a href="' . get_author_posts_url( $user->ID, $user->user_nicename ) .
            //      '" title="' . esc_attr( sprintf(__("Opi tuntemaan %s"), $user->employee_name) ) .
            //       '">'; // Create the link to their author page
            //       echo '</a>';

            //    echo $user_link;

                $user_link =
                '<a href="' . $user_link . ''.$user->first_name.' '.$user->last_name .
                ' ' . '-' . ' ' . get_user_meta($user->ID, 'title', true) .'</a>';

                 echo get_user_meta($user->ID, 'employee_title', true) .'<br>';
                 echo get_user_meta($user->ID, 'employee_email', true) .'<br>';

                echo '<a href="';
                echo $user_link;

                echo 'View Full Profile</a>
                </div>
                <!-- .user -->';
            }
        } else {
            echo 'No users found';
        }
                


get_footer();