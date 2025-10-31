<?php
function paintworld_enqueue_styles()
{
    wp_enqueue_style('paintworld-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'paintworld_enqueue_styles');
