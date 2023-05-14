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
        //var_dump('Yes, we are logged in!');
        $current_user = wp_get_current_user();
        //var_dump($current_user);
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