<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php
if ( have_posts() ) :
	// Start the loop.
	while ( have_posts() ) : the_post();
	?>

	<h1><?php the_title(); ?></h1>
	<date><?php the_date();?></date>
	<?php the_category();?>
	<?php the_content();?>

	<?php
	// End the loop.
	endwhile;

	the_posts_pagination();

endif;
?>

<?php get_footer(); ?>