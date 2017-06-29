<?php

add_theme_support( 'post-thumbnails' ); 

/**
 * Register menus.
 *
 */
function register_topnav_menu() {
	register_nav_menu( 'topnav-menu', __( 'TopNav Menu' ) );
}
add_action( 'init', 'register_topnav_menu' );

/**
 * Register sidebars.
 *
 * Registers all widget sidebars
 *
 */
function jasper_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'jasper' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'jasper' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'jasper' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'jasper' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'NavWidgets', 'jasper' ),
		'id' => 'sidebar-3',
		'description' => __( 'Add widgets to top nav', 'jasper' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="search-widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'jasper_widgets_init' );

?>