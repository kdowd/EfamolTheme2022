<?php get_header(); ?>

<?php get_template_part('./templates/content', 'page'); ?>

<?php get_template_part('./templates/content', 'popular-products'); ?>

<h2 class="heading" style="text-align:center;">Our Values</h2>
<section class="section section-our-values">

    <div>
        <div style="
            background-image: url(<?= wp_get_attachment_url(56, 'full') ?>);
          ">
            <div class="inlay">
                <?= wp_get_attachment_image(60, 'full', true, ['class' => 'smaller-icon']) ?>
                <h2>QUALITY</h2>
            </div>
        </div>
        <div class="content">
            <?= wp_get_attachment_image(60, 'full', true) ?>
            <h2>QUALITY</h2>
            <p>
                Efamol's unique Essential Fatty Acid food supplement formulas
                contain oils carefully extracted from their natural sources,
                ensuring the oil stays in the same form and retains its natural
                characteristics. All our oils are thoroughly tested to ensure they
                are free from harmful pollutants.
            </p>
        </div>
    </div>

    <div>
        <div style="
            background-image: url(<?= wp_get_attachment_url(57, 'full') ?>);
          ">
            <div class="inlay">
                <?= wp_get_attachment_image(62, 'thumbnail', true, ['class' => 'smaller-icon']) ?>
                <h2>EFFICACY</h2>
            </div>
        </div>


        <div class="content">
            <?= wp_get_attachment_image(62, 'full', true) ?>
            <h2>EFFICACY</h2>
            <p>
                For over 40 years Efamol has led the international field in the
                scientific research and development of Essential Fatty Acid (EFA)
                food supplements resulting in extensive published research on our
                products.
            </p>
        </div>
    </div>
    <div>
        <div style="
            background-image: url(<?= wp_get_attachment_url(55, 'full') ?>);
          ">
            <div class="inlay">
                <?= wp_get_attachment_image(61, 'thumbnail', true, ['class' => 'smaller-icon']) ?>
                <h2>ETHICAL</h2>
            </div>
        </div>
        <div class="content">
            <?= wp_get_attachment_image(61, 'full', true) ?>
            <h2>ETHICAL</h2>
            <p>
                At Efamol, quality and purity are key values. The Efamol fish oil
                used in all products is of superior standard and is harvested from
                sustainable stocks.
            </p>
        </div>
    </div>
</section>
<?php get_template_part('./templates/content', 'blog'); ?>
 

<?php get_template_part('./templates/content', 'instagram'); ?>

<?php get_footer(); ?>
