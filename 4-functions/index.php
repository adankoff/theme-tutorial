<?php get_header(); ?>

<?php get_sidebar(); ?>

<section class="col-md-9">
	<?php
	if ( have_posts() ) :
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>

		<article <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<date><?php the_date();?></date>
			<?php the_category();?>
			<?php the_content();?>
		</article>
		
		<?php
		// End the loop.
		endwhile;

		the_posts_pagination();

	endif;
	?>
</section>

<?php get_footer(); ?>