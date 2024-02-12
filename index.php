<?php get_header();
if (!is_404()) {
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( 404 ); 
    exit();
}
?>
<?php printf('<h1>%s</h1>', "СТРАНИЦА ИНДЕКС")?>
<?php get_footer();?>