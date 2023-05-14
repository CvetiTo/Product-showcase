<?php get_header(); ?>
Single
<?php if (have_posts()) : ?>
	<?php while (have_posts()) :  ?>
		<?php the_post(); ?>

		<?php get_template_part('template-parts/single', 'post'); ?>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>