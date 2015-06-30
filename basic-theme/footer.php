		
		<footer class="col-md-12">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div id="footer-1" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			<?php endif; ?>
		</footer>

	</div><!-- .row -->
</div><!-- .container -->

<?php wp_footer(); ?>

</body>
</html>