<?php
/*
Template Name: Single

https://codex.wordpress.org/Posts
*/

get_header();
?>
 
<section id="content" role="main">
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
	<nav class="col-md-12">
		<div class="col-md-6"><?php previous_post_link('&laquo; %link') ?></div>
		<div class="col-md-6 text-right"><?php next_post_link('%link &raquo;') ?></div>
	</nav>
	<article <?php post_class('col-md-12'); ?>>
		<h1><a href='<?php the_permalink();?>'><?php the_title(); ?></a></h1>
		<?php if (has_post_thumbnail()) { ?>
			<?php the_post_thumbnail(); ?>
		<?php } ?>
		<?php the_content();?>
	</article>
 
	<?php comments_template(); ?>
 
<?php endwhile; endif; ?>
 
</section>
 
<?php get_footer(); ?>