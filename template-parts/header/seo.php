<?php 
    $page_description = get_field("kinder_seo_description");
    $page_description = ( $page_description && $page_description !=='') ? $page_description : get_the_excerpt();
?>
<meta name="description" content="<?php echo ($page_description) ?>"/>
<?php 
    $page_title = get_the_title();
    
    $url = get_the_permalink();
?>
        
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo $page_title ?>",
        "description": "<?php echo $page_description ?>",
        "url": "<?php echo $url?>",
        "mainEntity": {
            "@type": "CreativeWork",
            "name": "<?php echo $page_title ?>",
            "description": "<?php echo $page_description ?>",
            "text": "<?php the_content(); ?>"
        }
    }
</script>

<meta property="og:title" content="<?php echo $page_title ?>" />
<meta property="og:description" content="<?php echo $page_description ?>" />
<meta property="og:url" content="<?php echo $url ?>" />
<?php 
    $thumbnail = get_the_post_thumbnail_url();
    $favicon_url = get_site_icon_url();
?>
<meta property="og:image" content="<?php echo ($thumbnail && $thumbnail != "") ? $thumbnail : $favicon_url ?>" />


<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $page_title ?>">
<meta name="twitter:description" content="<?php echo $page_description ?>">
<meta name="twitter:url" content="<?php echo $url ?>">