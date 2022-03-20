<!doctype html>
<html lang="en">

<head>
    <!--1234 kevin.dowd@gmail.com  -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no">

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="<?= CODE_BASE . '/favicon_32x32.png' ?>" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Spectral:wght@400;500;600&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>


<body id="override" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
     <?php
     $custom_logo_id = get_theme_mod('custom_logo');
     $logoImageArray = wp_get_attachment_image_src($custom_logo_id, 'full');
     ?> 
    <header class="site-header">
       <?php if (has_custom_logo()): ?>
        <a href="<?= home_url() ?>" style="padding:0; margin:0">
       <img class="site-logo" src="<?php echo esc_attr(
       	$logoImageArray[0]
       ); ?>" width="<?= $logoImageArray[1] ?>" height="<?= $logoImageArray[2] ?>" alt="efamol logo"></a>
        <?php endif; ?>

        <!-- <nav>

            <ul class="desktop-menu">


                <?php wp_nav_menu([
                	'theme_location' => 'menu-header',
                	'container' => false,
                	'fallback_cb' => false,
                	'items_wrap' => '%3$s',
                ]); ?>

            </ul>

            <div class="mobile-hamburger-menu">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="4rem" width="3rem" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"></path>
                </svg>
            </div>
        </nav> -->
        <div class="universal-menu">
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
 
        <!-- Menu -->
        <nav class="nav">
            <ul class="menu">
               <?php wp_nav_menu([
               	'theme_location' => 'menu-header',
               	'container' => false,
               	'fallback_cb' => false,
               	'items_wrap' => '%3$s',
               ]); ?>
            </ul>
        </nav>
</div>

    </header>
    <main class="site-content">