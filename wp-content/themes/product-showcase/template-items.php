<?php
/* Template Name: Display Items */
?>

<?php get_header(); ?>

<?php
$items_args = array(
	'post_type' 	 => 'item',
	'post_status' 	 => 'publish',
	'posts_per_page' => 4,
	'orderby'		=> 'date',
	'order'			=> 'DESC'
);
$items_query = new WP_Query( $items_args );
 ?>
 <?php
if(have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
 }
 ?>

<ul class="products-listing">
	<?php if ($items_query->have_posts()) : ?>

		<?php while ($items_query->have_posts()) : $items_query->the_post(); ?>

		<?php get_template_part( 'template-parts/product', 'secondary'); ?> ?>

		<?php endwhile; ?>

		<?php $items_query->posts_nav_link(); ?>

	<?php endif; ?>
	<?php wp_reset_postdata(); ?>

	<li class="product-card">
		<div class="product-primary">
			<h2 class="product-title"><a href="#">HAIER HW80-B14939-S2 8.0 kg, 1400 rot/min</a></h2>
			<div class="product-meta">
				<a class="meta-shockcode" href="#">Code: 650204112</a>
				<span class="meta-price">$179.99</span>
			</div>
			<div class="product-details product-details-table">
				<span>Type</span><span>Washing machine</span>
				<span>Brand</span><span>HAIER</span>
				<span>Model</span><span>HW80-B14939-S2</span>
			</div>
		</div>
		<div class="product-logo">
			<div class="product-logo-box">
				<img src="images/washing-machine.jpg" alt="">
			</div>
		</div>
	</li>
</ul>

<?php get_footer(); ?>