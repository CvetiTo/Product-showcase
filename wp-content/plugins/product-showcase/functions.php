<?php

/**
 * This function preview the count of visitors in products
 *
 * @param integer $post_id
 * @return void
 */
function product_update_items_visit_count($post_id = 0)
{
    //if ( is_singular( 'item' ) ) {
    //    var_dump('yes, we are in the items page!'); die();
    //} else {
    //    var_dump('in else');
    //}
    //die();
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