<?php

$blog_background_img = wp_get_attachment_image_src(169, 'full', false); ?>
<h2 class="heading">Blog</h2>
<section class="section section-blog-summary">
    <div>
        <div style="background-image:url(<?= $blog_background_img[0] ?>)">
            <div></div>
        </div>

        <div>

            <div class="blog-summary">
                <p class="blog-heading">Look after your brain at every age</p>
                <p class="blog-summary-copy">Most people don't get enough omega 3 DHA from their diet alone1. DHA helps to ensure that your brain is functioning normally.</p>
                <div><a href="<?= get_the_permalink(
                	120
                ) ?>" target="_self" rel="noopener noreferrer" class="gb-button gb-button-shape-circular gb-button-size-medium force-white-shadow" style="color:#ffffff;background-color:#003b76">Read More</a></div>
            </div>

        </div>
    </div>

</section>