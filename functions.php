<?php

if (!defined('CODE_BASE')) {
	define('CODE_BASE', get_template_directory_uri());
}

if (!defined('CURRENT_VERSION')) {
	define('CURRENT_VERSION', '1.0.0');
}

add_filter('jpeg_quality', function ($arg) {
	return 100;
});

// dev only
#add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
	show_admin_bar(false);
}

require __DIR__ . '/inc/slimline.php';
require __DIR__ . '/inc/basic-setup.php';
require __DIR__ . '/inc/custom-colours.php';
require __DIR__ . '/inc/load-scripts.php';
require __DIR__ . '/inc/menus.php';
require __DIR__ . '/inc/custom-post-types.php';
require __DIR__ . '/inc/images.php';
require __DIR__ . '/inc/dashboard.php';
require __DIR__ . '/inc/debug.php';
require __DIR__ . '/inc/logger.php';
require __DIR__ . '/inc/breadcrumbs.php';
require __DIR__ . '/inc/ratings.php';
require __DIR__ . '/inc/utilities.php';
