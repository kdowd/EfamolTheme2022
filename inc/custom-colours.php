<?php

$black = '#000000';
$dark_gray = '#28303D';
$gray = '#767676';
$green = '#D1E4DD';
$blue = '#D1DFE4';
$purple = '#D1D1E4';
$red = '#E4D1D1';
$orange = '#E4DAD1';
$yellow = '#EEEADD';
$white = '#FFFFFF';

$site_blue = '#003a77';
$star_gold = '#ffaa00';
$site_light_blue = '#2b978a';

add_theme_support('disable-custom-colors');

add_theme_support('editor-color-palette', [
	[
		'name' => esc_html__('Site Blue'),
		'slug' => 'site blue',
		'color' => $site_blue,
	],
	[
		'name' => esc_html__('Site Light Blue'),
		'slug' => 'site light blue',
		'color' => $site_light_blue,
	],

	[
		'name' => esc_html__('Black'),
		'slug' => 'black',
		'color' => $black,
	],
	[
		'name' => esc_html__('White'),
		'slug' => 'white',
		'color' => $white,
	],
	[
		'name' => esc_html__('Star Gold'),
		'slug' => 'star gold',
		'color' => $star_gold,
	],
	[
		'name' => esc_html__('Gray'),
		'slug' => 'gray',
		'color' => $gray,
	],
	[
		'name' => esc_html__('Dark Gray'),
		'slug' => 'dark gray',
		'color' => $dark_gray,
	],
]);
