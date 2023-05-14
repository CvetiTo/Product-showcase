<?php get_header(); ?>

<ul class="products-listing">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/product', 'primary'); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php endif; ?>

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