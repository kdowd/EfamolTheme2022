<?php
$args = [
	'post_type' => 'blogs',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'orderby' => 'modified',
	'order' => 'DESC',
	'hide_empty' => true,
];

$query = new WP_Query($args);
?>


<section class="section">

    <div class="all-blogs">

        <?php if ($query->have_posts()): ?>
            <?php
            while ($query->have_posts()):
            	$query->the_post(); ?>


                <div class="item item-<?= get_the_id() ?>">
                    <?php if (has_post_thumbnail()): ?>
                        <a href=" <?php the_permalink(); ?>" target="_self" rel="noopener">
                            <?php echo get_the_post_thumbnail($post_id, 'blog-packshot', [
                            	'alt' => get_the_title($post_id),
                            ]); ?>

                        </a>
                    <?php endif; ?>

                    <div class="item-info" style="color:black">
                        <?php the_title("<span class='item-title'>", '</span>'); ?>


                        <?php if (strlen(get_the_excerpt()) > 160): ?>
                            <?= substr(get_the_excerpt(), 0, 160) . ' [...]' ?>
                        <?php else: ?>
                            <?php the_excerpt(); ?>
                        <?php endif; ?>

                        <a class="gb-button gb-button-shape-circular gb-button-size-medium" href="<?= the_permalink() ?>" target="_self">READ MORE</a>
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
</section>