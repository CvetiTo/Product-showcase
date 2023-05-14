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

/**
 * This function search word in content of the site, and replace it 
 *
 * @param [type] $title
 * @return void
 */
function detect_word( $content ) {
    //var_dump( $content );
    $search = 'Welcome';
    if ( str_contains( $content, $search ) ) {
       $new_str = str_replace(  $search, '<span style="color:green">NEW-TEST-WORD</span>', $content);
    } else {
        $new_str = $content .= '<p style="color:red">Word doesn`t match!<p/>';
    }
    return $new_str;
}
add_filter( 'the_content', 'detect_word' );
