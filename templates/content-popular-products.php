<?php
$args = [
	'post_type' => 'products',
	'post__in' => [78, 80, 95],
	'post_status' => 'publish',

	'orderby' => 'title',
	'order' => 'DESC',
];
$query = new WP_Query($args);
?>


<section class="section section-all-products">
    <h2>BEST SELLERS</h2>
    <div class="popular-products">
        
        <?php if ($query->have_posts()): ?>
            <?php
            while ($query->have_posts()):
            	$query->the_post(); ?>


                <div class="item item-<?= get_the_id() ?>">
                    <a href=" <?php the_permalink(); ?>" target="_self" rel="noopener">
                        <?php echo get_the_post_thumbnail($post_id, 'product-packshot', [
                        	'alt' => get_the_title($post_id),
                        ]); ?>

                    </a>
                    <div class="item-info" style="color:black">

                        <?php the_title("<span class='item-title'>", '</span>'); ?>
                        <span class='item-type'><?php echo get_field('type'); ?></span>
                        <div class="item-stars">

                        <?php for ($i = 0; $i < 5; $i++): ?>
                             <img src='<?php echo get_field('stars'); ?>' />
                        <?php endfor; ?>
                             
                        </div>

                        <span class='item-description'>
                            <?php echo get_field('description'); ?></span>
                    </div>
                </div>



            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        <?php else: ?>
            <p><?php echo 'Nothing found'; ?></p>
        <?php endif; ?>
    </div>
    <div class="center-button-wrap">
        <a class="gb-button gb-button-shape-circular gb-button-size-medium" href="<?= the_permalink(
        	22
        ) ?>" target="_self">VIEW ALL</a>
    </div>
       
</section>