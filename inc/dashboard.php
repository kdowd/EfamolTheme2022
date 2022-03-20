<?php
add_action('wp_dashboard_setup', 'update_dash');

function update_dash()
{
    global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', 'Your Develeloper writes:', 'update_dash_hooked');
}

/**
 * @return string|null
 */
function update_dash_hooked()
{
    echo '<p>Problems? ...email me already<br /><a href="mailto:kevin.dowd@gmail.com">kevin.dowd@gmail.com</a><br />Mobile:<br />0226 821189<br />Details:<br />76, Nigel Road, Browns Bay</p>';
}
