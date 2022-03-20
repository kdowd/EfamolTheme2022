<?php

function efamol_setup()
{
	$GLOBALS['content_width'] = apply_filters('efamol_content_width', 1920);

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('align-wide');

	add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_filter('jpeg_quality', function ($arg) {
		return 82;
	});

	$defaults = [
		'height' => 10,
		'width' => 400,
		'flex-height' => true,
		'flex-width' => true,
		'unlink-homepage-logo' => false,
	];

	add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'efamol_setup');
