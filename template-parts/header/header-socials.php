<?php 
    define('CUSTOM_ID', 'ckror_socials_top');

    $args = array(
        'post_type' => 'ckror_socials_top',
    );

    $the_query = new WP_Query( $args );

    ?>
    <div class="row__links justify-content-end">
    <?php
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $post_id = get_the_ID(); // get the current post id
                
                // Fetch all the custom fields for the post
                $custom_fields = get_post_custom($post_id);

                $fields = $custom_fields["ckror_top_socials"];
                $links = $custom_fields["ckror_top_social_link"];
                // Loop through the custom fields and display them
                if (isset($fields) && count($fields) > 0) {
                    for ($i = 0; $i < count($fields); $i++) {
                        $field = $fields[$i];
                        $link = $links[$i];
                        /**если поле пустое */
                        if (!isset($field)) {
                            continue;
                        }
                        ?>
                        <a href="<?php echo $link?>" target="_blank" title="<?php echo $field?>" class="eliminate-link"><i class="advantages-icon-<?php echo $field?>"></i></a>
                        <?php
                    }
                }
            }
        } else {
            // No posts found
        }
    ?> 
    </div><?php

    // Restore original Post Data
    wp_reset_postdata();
    ?>