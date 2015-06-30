<?php

/*
 * add_theme_support
 *
 * See: https://codex.wordpress.org/Function_Reference/add_theme_support
 */
function mytheme_setup() {

	//Post thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// Menus
	add_theme_support( 'menus' );
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'twentyfifteen' ) ) );

	// HTML5 core markup for search form, comment form, and comments
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Post formats
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

}
add_action( 'after_setup_theme', 'mytheme_setup' );

/*
 * wp_enqueue_scripts
 *
 * See: https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 */
function mytheme_init_scripts()
{
	
	//wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
	// wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );

	//wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_script("jquery");
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), '1.0.0', true);
	// wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'mytheme_init_scripts' );


/*
 * register_sidebar
 *
 * See: https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mytheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Widget Area' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );


