<?php
/*
Template Name: Archives
*/

?>

<?php get_header(); ?>

<section class="col-md-12">
	<?php
	if ( have_posts() ) :
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>

		<article <?php post_class(); ?>>
			<h1><a href='<?php the_permalink();?>'><?php the_title(); ?></a></h1>
			<?php if (has_post_thumbnail()) { ?>
				<?php the_post_thumbnail(); ?>
			<?php } ?>
			<?php the_excerpt();?>
		</article>
		
		<?php
		// End the loop.
		endwhile;

		the_posts_pagination();
		
	endif;
	?>
</section>

<?php get_footer(); ?>