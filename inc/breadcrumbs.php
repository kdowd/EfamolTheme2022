<?php

function get_breadcrumb($cpt = '<a href="/products">Products</a>')
{
	$str = '<div class="breadcrumb-wrap">';

	$str .= '<a href="' . home_url() . '" rel="nofollow">Home</a>';

	$str .= " / $cpt";
	if (is_single()) {
		$str .= ' / ' . get_the_title();
	}

	$str .= '</div>';

	echo $str;
}
