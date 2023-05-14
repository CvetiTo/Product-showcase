<?php

/**
 * This function takes care the assets with enqueue
 *
 * @return void
 */
function product_assets()
{
    wp_enqueue_style(
        'product-showcase',
        get_stylesheet_directory_uri() . '/assets/css/master.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/master.css')
    );
}
add_action('wp_enqueue_scripts', 'product_assets');
