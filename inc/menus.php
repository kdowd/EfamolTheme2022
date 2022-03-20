<?php

function efamol_menus()
{
	add_theme_support('customize-selective-refresh-widgets');

	register_nav_menus([
		'menu-header' => esc_html__('Primary'),
		'menu-footer' => esc_html__('Secondary'),
	]);
}

add_action('after_setup_theme', 'efamol_menus');

function special_nav_class($classes, $item)
{
	if (in_array('current-menu-item', $classes) && $item->ID == 2) {
		$classes[] = 'home-active';
	}
	if (in_array('current-menu-item', $classes) && $item->ID == 21) {
		$classes[] = 'blog-active';
	}

	if (in_array('current-menu-item', $classes) && $item->ID == 22) {
		$classes[] = 'products-active';
	}

	return $classes;
}
// not needed
#add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function cpt_menu_item_classes($classes, $item, $args)
{
	if (is_front_page() && $item->title == 'Home') {
		$classes[] = 'current-menu-item ';
	}
	if (is_singular('products') && $item->title == 'Products') {
		$classes[] = 'current-menu-item ';
	}

	if (is_singular('blogs') && $item->title == 'Blog') {
		// logger($item);
		$classes[] = 'current-menu-item';
	}

	return array_unique($classes);
}
add_filter('nav_menu_css_class', 'cpt_menu_item_classes', 10, 3);
