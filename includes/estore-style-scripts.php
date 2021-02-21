<?php

if(!defined("ABSPATH")){
	exit();
}



/**
 * Enqueue scripts and styles.
 */

function estore_scripts() {

	wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'estore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	// custom scripts

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array("jquery"), null, true );
	wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array("jquery"), null, true );
	wp_enqueue_script( 'imagezoom', get_template_directory_uri() . '/assets/js/imagezoom.js', array("jquery"), null, true );
	wp_enqueue_script( 'jquery.countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array("jquery"), null, true );
	wp_enqueue_script( 'jquery.flexisel', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array("jquery"), null, true );
	wp_enqueue_script( 'jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array("jquery"), null, true );
	wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array("jquery"), null, true );
	wp_enqueue_script( 'jquery.wmuSlider', get_template_directory_uri() . '/assets/js/jquery.wmuSlider.js', array("jquery"), null, true );
	wp_enqueue_script( 'minicart', get_template_directory_uri() . '/assets/js/minicart.js', array("jquery"), null, true );

	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/assets/js/customizer.js', array("jquery"), null, true );


	wp_enqueue_script( 'estore_ajax_search', get_template_directory_uri() . '/assets/js/ajax_search.js', array("jquery"), null, true );

	$search_nonce = wp_create_nonce('estore_search_nonce' );
	$search_data = [
		"url"=>admin_url("admin-ajax.php"),
		"nonce"=> $search_nonce

	];
	wp_localize_script("estore_ajax_search" , 'searchData' , $search_data);


//	if(is_shop() || is_archive()) {
		wp_enqueue_script( 'estore_ajax_quick_view_product', get_template_directory_uri() . '/assets/js/ajax_quick_view_product.js', array( "jquery" ), null, true );
		$quick_view_product_nonce = wp_create_nonce( 'estore_quick_view_product_nonce' );
		$quick_view_product_data  = [
			"url"   => admin_url( "admin-ajax.php" ),
			"nonce" => $quick_view_product_nonce

		];
		wp_localize_script( "estore_ajax_quick_view_product", 'quickViewProductData', $quick_view_product_data );
//	}






	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/script.js', array("jquery"), null, true );

}
add_action( 'wp_enqueue_scripts', 'estore_scripts' );


function estore_styles() {


	wp_enqueue_style( 'font-roboto', "https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300i,400,400i,700&display=swap&subset=cyrillic" , [] , null , "all" );


	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri()."/assets/css/bootstrap.css" , [] , null , "all" );
	//wp_enqueue_style( 'bootstrap-style', get_template_directory_uri()."/assets/css/bootstrap.css" , ["woocommerce-general", "woocommerce-layout" , "woocommmerce-smallscreen"] , null , "all" );
	wp_enqueue_style( 'fasthover', get_template_directory_uri()."/assets/css/fasthover.css" , [] , null , "all" );
	wp_enqueue_style( 'flexslider', get_template_directory_uri()."/assets/css/flexslider.css" , [] , null , "all" );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri()."/assets/css/font-awesome.css" , [] , null , "all" );
	wp_enqueue_style( 'jquery.countdown', get_template_directory_uri()."/assets/css/jquery.countdown.css" , [] , null , "all" );
	wp_enqueue_style( 'popuo-box', get_template_directory_uri()."/assets/css/popuo-box.css" , [] , null , "all" );



	//wp_enqueue_style( 'estore-custom-style', get_template_directory_uri()."/assets/css/style.css" , [] , null , "all" );

	wp_enqueue_style( 'estore-style', get_stylesheet_uri() );


	// custom style



}
add_action( 'wp_enqueue_scripts', 'estore_styles' );

