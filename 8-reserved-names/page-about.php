<?php
/*
Template Name: Page

https://codex.wordpress.org/Pages

*/
?>
<?php get_header(); ?>
<section class="col-md-12">
	<div class="col-md-12">
		<h3>About us</h3>
		<p>We are a special group</p>
	</div>
<?php
if ( have_posts() ) :
	// Start the loop.
	while ( have_posts() ) : the_post();
	?>
	<article <?php post_class("col-md-12"); ?>>
		<h1><?php the_title(); ?></h1>
		<?php if (has_post_thumbnail()) { ?>
			<?php the_post_thumbnail(); ?>
		<?php } ?>
		<?php the_content();?>
	</article>
	<?php
	// End the loop.
	endwhile;
endif;
?>
</section>