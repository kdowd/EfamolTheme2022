<section class="page-id-<?php echo get_the_ID(); ?>">

    <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>

    <?php else: ?>
        <p><?php echo 'Nothing found'; ?></p>
    <?php endif; ?>

</section>