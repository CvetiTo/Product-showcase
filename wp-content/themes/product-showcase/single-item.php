<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) :  ?>
		<?php the_post(); ?>

		<?php get_template_part('template-parts/single', 'item'); ?>

	<?php endwhile; ?>

	<?php product_update_items_visit_count( get_the_ID() ); ?>

<?php endif; ?>

<?php get_footer(); ?>