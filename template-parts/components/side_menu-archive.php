<?php
    // Get the current category ID
    $category_id = get_queried_object()->term_id;
    // Set up the query arguments
    $args = array(
        'cat' => $category_id,
        'posts_per_page' => -1, // get all posts
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
        
        echo '<ul class="side_menu__list">';

        while ( $query->have_posts() ) {
            $query->the_post();
            $link = get_the_permalink();
            $title = get_the_title();
            ?>
                <li><a href="<?php echo $link; ?>" class="side_menu__link eliminate-link current"><?php echo $title;?></a></li>
            <?php
        }

        echo '</ul>';
    } else {
        // No posts found
    }

    /* Restore original Post Data */
    wp_reset_postdata();
?>