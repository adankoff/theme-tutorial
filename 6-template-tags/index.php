<?php get_header(); ?>

<?php get_sidebar(); ?>

<section class="col-md-9">

<?php

// Template Tags
// https://codex.wordpress.org/Template_Tags

// Conditional Tags
// https://codex.wordpress.org/Conditional_Tags

if (is_home()) {
	?>
	<div class="col-md-12 alert">
		<p>Welcome to my homepage!</p>
	</div>
	<?php
}

if (is_archive()) {
	?>
	<div class="col-md-12">
		<h3><?php single_cat_title();?></h3>
		<p><?php category_description();?></p>
	</div>
	<?php
}

if (is_single()) {
	?>
	<div class="col-md-12">
		<p>You are reading a single post.</p>
	</div>
	<?php
}

if (is_single( '1' )) {
	?>
	<div class="col-md-12">
		<p>You are reading a single post with ID 1.</p>
	</div>
	<?php
}

if (is_page()) {
	?>
	<div class="col-md-12">
		<p>You are reading a page.</p>
	</div>
	<?php
}

if (is_category( '1' )) {
	?>
	<div class="col-md-12">
		<p>You are on the category archive for "uncategorized".</p>
	</div>
	<?php
}

?>

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