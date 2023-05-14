//console.log( 'hi, the file loads' );

jQuery(document).ready(function ($) {

    $('.button-wide').on('click', function (e) {
        e.preventDefault();
        //console.log( 'clicked' ); // just to be sure
        let item_id = jQuery(this).attr('id') // we'll need this later
        //console.log(item_id);
        //AJAX Magic
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action: 'product_item_upvote', // PHP function
                item_id: item_id // we need to make this dynamic
            },
            success: function (msg) {
                console.log(msg);
            }
        });
    });
});