<?php get_header(); ?>

<?php get_template_part('./templates/content', 'page'); ?>
<?php get_template_part('./templates/content', 'products'); ?>



<?php $blog_background_img = wp_get_attachment_image_src(54, 'full', false); ?>

<?php get_template_part('./templates/content', 'blog'); ?>
<?php get_footer(); ?>
