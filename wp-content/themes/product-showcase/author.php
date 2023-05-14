<?php get_header(); ?>

<?php the_archive_title(); ?>

<ul class="products-listing">
<?php  ?>
	<div class="author-bio"><?php echo the_author_meta('user_description'); ?></div>
<?php ?>	
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/product', 'secondary'); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php endif; ?>

</ul>

<?php get_footer(); ?>