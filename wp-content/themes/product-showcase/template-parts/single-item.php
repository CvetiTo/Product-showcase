<div class="product-single">
    <main class="product-main">
        <div class="product-card">
            <div class="product-primary">
                <header class="product-header">
                    <h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="product-meta">
                    <p class="meta-date">Items visits: <?php echo get_post_meta(get_the_ID(), 'visits_counts', true); ?></p>
                        <a class="meta-shockcode"> Code: 650204112 </a>
                        <span class="meta-date"><?php echo get_the_date(); ?></span>
                    </div>
                    <div class="product-details product-details-table">
                        <span>Type</span><span><?php echo the_category(); ?></span>
                        <span>Brand</span><span>HAIER</span>
                        <span>Model</span><span>HW80-B14939-S</span>
                    </div>

                    <div class="product-details product-details-tags">
                        <div class="product-details-label">Tags</div>
                        <span>Laundry</span>
                        <span>Washing</span>
                    </div>
                </header>

                <div class="product-body">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </main>
    <aside class="product-secondary">
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
        <a id="<?php echo get_the_ID(); ?>" class="button button-wide" href="#">Upvote the item (<?php echo get_post_meta( get_the_ID(), 'upvote', true) ?>)</a>
    </aside>
</div>
