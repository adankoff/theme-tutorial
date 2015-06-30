<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="container">
	<div class="row">
		
		<nav id="site-navigation" class="navbar navbar-default " role="navigation"> <!-- navbar-fixed-top -->
		  <div class="container-fluid"> <!-- container -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
		    </div>

			<?php
			wp_nav_menu( array(
				'menu' => '',
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'main-navbar-collapse',
				'menu_class' => 'nav navbar-nav',
				'menu_id' => 'main-navbar-menu',
				'echo' => true,
				'fallback_cb' => 'wp_page_menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'depth' => 1,
				'walker' => '',
				'theme_location' => ''
			) );
			?>

		  </div>
		</nav><!-- #site-navigation -->