<?php
/* https://codex.wordpress.org/Creating_an_Error_404_Page */
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section class="col-md-12">
	<header class="col-md-12">
		<h1><?php _e( '404 - Not Found'); ?></h1>
	</header>
	<article class='col-md-12'>
		<h2><?php _e( 'Oops! Looks like we\'re having trouble finding your content.'); ?></h2>
		<p><?php _e( 'Maybe try a search?'); ?></p>
		<?php get_search_form(); ?>
	</article>
</section>

<?php get_footer(); ?>