<?php get_header(); ?>
<div style="height:80px"></div>
 
<?php get_breadcrumb('<a href="/product">Products</a>'); ?>
 
<?php get_template_part('./templates/content', 'page'); ?>

<div class="other-content"> 
<div class="info-tabs">
	<?php if (get_field('tab-description')): ?>
		<div class="tab tab-closed ">
			<input type="checkbox" id="chck2">
			<label class="tab-label" for="chck2">Description</label>
			<div class="tab-content">
				<?php the_field('tab-description'); ?>
			</div>
		</div>
	<?php endif; ?>
	<?php if (get_field('tab-ingredients')): ?>
		<div class="tab tab-closed">
			<input type="checkbox" id="chck1">
			<label class="tab-label" for="chck1">Ingredients

			</label>
			<div class="tab-content">
				<?php the_field('tab-ingredients'); ?>
			</div>
		</div>
	<?php endif; ?>
</div>

  <div class="comments-wrap">
	<?php if (comments_open() || get_comments_number()) {
 	comments_template();
 } ?>
</div>  

</div>







	 

<style>
	.wp-block-columns {
		width: fit-content;
		margin: auto;
	}
</style>
<?php get_template_part('./templates/content', 'wellness'); ?>


<?php get_footer(); ?>
