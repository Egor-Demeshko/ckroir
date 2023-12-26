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
            echo '<h1>' . get_the_title() . '</h1>';
        ?>

        <div class="main_conrainer page">
            <aside class="side_menu">
                <nav>
                    <?php echo get_template_part('template-parts/components/side_menu', 'archive');?>
                </nav>
            </aside>


            <main>
                <?php the_content(); ?>
            </main>
        </div>

    </div>
</div>

<?php
    get_footer();   
    wp_footer(); 
?>