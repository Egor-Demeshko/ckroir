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


            <main>
                <ul class="archive__central-list">

                <?php 
                if ( have_posts() ) : 

                    while ( have_posts() ) : the_post(); 
                    ?>
                    <?php 
                        $post_title = get_the_title(); // Get the post title
                        $post_link = get_permalink(); // Get the post link
                    ?>
                    <li class="archive__central-list_item">
                        <a href="<?php echo $post_link; ?>" class="archive__central-list_item-link"><?php echo $post_title; ?></a>
                    </li>
                    <?php
                    endwhile; 
                else: 
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
                endif; 
                ?>  
                </ul>
            </main>
        </div>

    </div>
</div>

<?php
    get_footer();   
    wp_footer(); 
?>