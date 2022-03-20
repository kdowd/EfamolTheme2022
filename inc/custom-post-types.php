<?php

function add_products_type()
{
	$labels = [
		'name' => 'All Products',
		'singular_name' => 'New Product',
		'add_new' => 'Add New',
	];
	// https: //developer.wordpress.org/reference/functions/register_post_type/
	// https: //www.ibenic.com/custom-wordpress-rewrite-rule-combine-taxonomy-post-type/

	$args = [
		'labels' => $labels,
		'hierarchical' => true,
		'publicly_queryable' => true,
		'public' => true,
		'show_ui' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-buddicons-buddypress-logo',
		'rewrite' => [
			'slug' => 'products',
			'with_front' => false,
		],
		'show_in_rest' => true,
		'show_in_graphql' => true,
		'graphql_single_name' => 'kjd',
		'graphql_plural_name' => 'kjds',
		'menu_position' => 5,
		'show_in_nav_menus' => true,
		'capability_type' => 'post',
		'supports' => [
			'post-formats',
			'page-attributes',
			'title',
			'comments',
			'custom-fields',
			'editor',
			'thumbnail',
			'excerpt',
			'page-templates',
		],
	];

	register_post_type('products', $args);
}

add_action('init', 'add_products_type', 4);

function add_blogs_type()
{
	$labels = [
		'name' => 'Blogs',
		'singular_name' => 'New Blog',
		'add_new' => 'Add New',
	];
	// https: //developer.wordpress.org/reference/functions/register_post_type/
	// https: //www.ibenic.com/custom-wordpress-rewrite-rule-combine-taxonomy-post-type/
	$args = [
		'labels' => $labels,
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'menu_position' => 9,
		'show_in_nav_menus' => true,
		'capability_type' => 'post',
		'show_in_admin_bar' => true,
		'can_export' => true,
		// do we want archive.phd - no for now
		'has_archive' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,

		'menu_icon' => 'dashicons-id-alt',
		'rewrite' => [
			'slug' => 'blog',
			'with_front' => false,
		],

		'supports' => ['post', 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
	];

	register_post_type('blogs', $args);
}

add_action('init', 'add_blogs_type', 5);
