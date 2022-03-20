

<?php get_header(); ?>
 
 
<?php
#get_breadcrumb('<a href="/blog">Blog</a>');
?>
<?php get_template_part('./templates/content', 'page'); ?>

    <div class="center-button-wrap">
        <a class="gb-button gb-button-shape-circular gb-button-size-medium" href="<?= the_permalink(
        	21
        ) ?>" target="_self">BACK TO BLOGS</a>
    </div>
 
 

<?php get_template_part('./templates/content', 'instagram'); ?>

<?php get_footer(); ?>
