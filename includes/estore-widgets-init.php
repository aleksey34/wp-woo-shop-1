<?php

if(!defined("ABSPATH")){
	exit();
}



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function estore_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'estore' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<div id="%1$s" class="widget w3ls_mobiles_grid_left_grid %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="w3ls_mobiles_grid_left_grid_sub">',
	) );





// widgets in footer

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Left', 'estore' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Center-1', 'estore' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<section id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Center-2', 'estore' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Right', 'estore' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//end widgets in footer


// widget for shop

	register_sidebar( array(
		'name'          => esc_html__( 'Shop Widgets', 'estore' ),
		'id'            => 'est_shop_widgets',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<div id="%1$s" class="widget w3ls_mobiles_grid_left_grid %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="w3ls_mobiles_grid_left_grid_sub">',
	) );


	// end widget for shop

}
add_action( 'widgets_init', 'estore_widgets_init' );



