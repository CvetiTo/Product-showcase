<li class="product-card">
    <div class="product-primary">
        <h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="product-meta">
            <a class="meta-shockcode"><?php echo the_category(); ?></a>
            <span class="meta-date"><?php echo get_the_date(); ?></span>
        </div>
        <div class="product-details product-details-table">
            <span>Type</span><span>Washing machine</span>
            <span>Brand</span><span><a><?php echo items_display_single_term(get_the_ID(), 'field'); ?></a></span>
            <span>Model</span><span>HW80-B14939-S</span>
        </div>
    </div>
    <div class="product-logo">
        <div class="product-logo-box">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {
                echo '<img src="wp-content\themes\product-showcase\assets\images\washing-machine.jpg" alt="property image">';
            }
            ?>
        </div>
    </div>
</li>