<?php

/**
 * This function preview the count of visitors in products
 *
 * @param integer $post_id
 * @return void
 */
function product_update_items_visit_count($post_id = 0)
{
    if (empty($post_id)) {
        return;
    }

    $visit_count = get_post_meta($post_id, 'visits_counts', true);

    if (!empty($visit_count)) {
        $visit_count = $visit_count + 1;
        update_post_meta($post_id, 'visits_counts', $visit_count);
    } else {
        update_post_meta($post_id, 'visits_counts', '1');
    }
}

/**
 * Display the current user name if the user is logged in
 *
 * @return void
 */
function product_showcase_display_username()
{
    $output = '';
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_display_name = $current_user->data->display_name;
        $user_url = $current_user->data->user_url;
        $output = 'Hey ' . strtoupper($user_display_name) . ', you are the BEST!!! ' . '<br>' .
            'My URL is: ' . $user_url;
    } else {
        $output = 'No, you are not logged in!';
    }
    return $output;
}
add_shortcode('display_username', 'product_showcase_display_username');

/**
 * Items enqueue
 */
function item_enqueue_scripts() {
	wp_enqueue_script( 'item-script', plugins_url( 'assets/scripts/scripts.js', __FILE__ ), array( 'jquery' ), 1.1 );
	wp_localize_script( 'item-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'item_enqueue_scripts' );

/**
 * Function take care of the upvote of the item
 *
 * @return void
 */
function product_item_upvote()
{
    $item_id = esc_attr($_POST['item_id']);
    $upvote_numbers = get_post_meta($item_id, 'upvote', true);

    if (empty($upvote_numbers)) {
        update_post_meta($item_id, 'upvote', 1);
    } else {
        $upvote_numbers = $upvote_numbers + 1;
        update_post_meta($item_id, 'upvote', $upvote_numbers);
    }
    wp_die();
}
add_action('wp_ajax_nopriv_product_item_upvote', 'product_item_upvote');
add_action('wp_ajax_product_item_upvote', 'product_item_upvote');