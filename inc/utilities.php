<?php

function redirect_to_home()
{
    if (is_search() || is_404()) {
        wp_redirect(home_url());
        exit();
    }
}
add_action('template_redirect', 'redirect_to_home');



function aspen_viagra_2021_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (is_singular()) {
        $classes[] = 'kjd-singlular';
    }

    return $classes;
}

add_filter('body_class', 'aspen_viagra_2021_body_classes');
