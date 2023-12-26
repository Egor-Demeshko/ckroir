<?php
    get_header();
?>

<!-- МЕЛКИЙ СЛАЙДЕР -->
<div class="dark-background">
    <div class="container">
        <?php echo get_template_part('template-parts/components/slider', 'archive'); ?>
    </div>
</div>


<div class="main">
    <div class="container padding_on_left_right">
        <?php echo get_template_part('template-parts/components/breadcrumbs'); ?>

        <?php
            // Get the category object
            $category = get_queried_object();

            // Display the category name
            echo '<h1>' . $category->name . '</h1>';
        ?>

        <div class="main_conrainer">
            <aside class="side_menu">
                <nav>
                    <?php echo get_template_part('template-parts/components/side_menu', 'archive');?>
                </nav>
            </aside>


            <main class="single_feed">
                <style>
                    .single_feed figure.wp-block-gallery{
                        display: none;
                    }
                </style>
                <ul class="archive__central-list feed">
                    <?php 
                    // Start the WordPress loop
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                            // Get the post title and link
                            echo get_template_part('template-parts/blocks/gallery/archive-gallery', '', ["single" => true]);
                        endwhile;
                    else : 
                        echo 'No posts found';
                    endif; 
                    ?>
                    <?php the_content(); ?>
                </ul>

            </main>
        </div>

    </div>
</div>

<?php
    get_footer();   
    echo get_template_part('template-parts/blocks/gallery/gallery', 'full_window');
    wp_footer(); 
?>