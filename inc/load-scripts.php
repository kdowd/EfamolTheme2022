<?php

function efamol_scripts()
{
	wp_enqueue_style('efamol-main-style', CODE_BASE . '/css/main.css', [], CURRENT_VERSION);
	wp_enqueue_script('efamol-main-js', CODE_BASE . '/js/main.js', [], CURRENT_VERSION);
	wp_enqueue_script('efamol-axios-js', CODE_BASE . '/js/axios.js', [], CURRENT_VERSION);
	wp_enqueue_script('efamol-rest-js', CODE_BASE . '/js/resty.js', [], CURRENT_VERSION);
}

add_action('wp_enqueue_scripts', 'efamol_scripts');
