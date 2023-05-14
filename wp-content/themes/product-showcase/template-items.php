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
$items_query = new WP_Query($items_args);
?>
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_content();
	}
} else {
	'No post`s yet';
}
?>

<ul class="products-listing">
	<?php if ($items_query->have_posts()) : ?>

		<?php while ($items_query->have_posts()) : $items_query->the_post(); ?>

			<?php get_template_part('template-parts/product', 'secondary'); ?>

		<?php endwhile; ?>

		<?php $items_query->posts_nav_link(); ?>

	<?php endif; ?>
	<?php wp_reset_postdata(); ?>

</ul>

<?php get_footer(); ?>