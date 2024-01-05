<?php
$queried_object = get_queried_object();
$category_id = "";

    // Check if we are on a single post page
    if (is_single()) {
        $categories = get_the_category($post->ID);
        if (!empty($categories)) {
            // Get the first category of the post
            $category_id = $categories[0]->term_id;
        }
    } elseif (is_archive()) { // Check if we are on an archive page
        $category_id = $queried_object->term_id;
    }
    $current = get_the_ID();


    // Get the child categories of the current category
    $child_categories = get_categories(array(
        'parent' => $category_id
    ));

    echo '<ul class="side_menu__list">';

    createSubcategories($child_categories);


    $args = array(
        'category__in' => array($category_id), // get posts in specific categories
        'posts_per_page' => -1, // get all posts
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',

    );
    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
        
        

        while ( $query->have_posts() ) {
            $query->the_post();
            $link = get_the_permalink();
            $title = get_the_title();
            ?>
                <li>
                    <a href="<?php echo $link; ?>" class="side_menu__link eliminate-link <?php if($current == $post->ID) { echo 'current'; } ?>">
                    <?php echo $title;?>
                    </a>
                </li>
            <?php
        }

        
    } else {
        // No posts found
    }

    echo '</ul>';
    /* Restore original Post Data */
    wp_reset_postdata();


    function createSubcategories($child_categories) {
            // Loop through each child category
        foreach ($child_categories as $child_category) {
            // Get the name of the child category
            $child_category_name = $child_category->name;
            $child_categore_id = $child_category->term_id;
            $child_category_link = get_category_link($child_category->term_id);
            ?>
                <li class="side_menu__item">
                <a href="<?php echo $child_category_link; ?>" class="side_menu__link eliminate-link bold"><?php echo $child_category_name; ?></a>
                    <ul class="side_menu__sublist">
                        <?php
                            // Get posts for child category
                            $child_category_posts = get_posts(array(
                                'category' => $child_categore_id,
                                'numberposts' => -1,
                                'post_status' => 'publish'
                            ));

                            // Loop through each post and create menu item
                            foreach ($child_category_posts as $post) {
                                setup_postdata($post);

                                // Get post title and URL
                                $post_title = get_the_title($post);
                                $post_url = get_permalink($post);

                                // Create menu item
                                echo '<li><a class="side_menu__link eliminate-link bold" href="' . $post_url . '">' . $post_title . '</a></li>';
                            }

                            wp_reset_postdata();
                        ?>
                    </ul>
                </li>
            <?php
        }
    }
?>