<?php

function get_excerpt_filter($content)
{
    return "Whew !" . $content;
}
#add_filter('get_the_excerpt', 'get_excerpt_filter');

function excerpt_filter($content)
{
    return $content;
}
#add_filter('the_excerpt', 'excerpt_filter');

function new_excerpt_more($excerpt)
{
    $link = get_permalink();
    $title = the_title('', '', false);
    $ahref = '<a href="' . $link . '" title="' . $title . '">more...</a>';
    return str_replace('[...]', $ahref, $excerpt);
}
#add_filter('wp_trim_excerpt', 'new_excerpt_more');

function my_excerpt_length($length)
{
    return 80;
}
#add_filter('excerpt_length', 'my_excerpt_length');