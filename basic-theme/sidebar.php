<aside class="col-md-3">
	
	<nav>
		<?php wp_nav_menu(); ?>
	</nav>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="sidebar-1" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	<?php endif; ?>

</aside>