<?php

if(!defined("ABSPATH")){
	exit();
}


// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
//	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
//	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
//	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation




	return $enqueue_styles;
}





/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
remove_action( 'woocommerce_sidebar'  , "woocommerce_get_sidebar" , 10);


/**
 * remove tabs in single product
 */
//remove_all_actions("woocommerce_after_single_product_summary" );
remove_action( 'woocommerce_after_single_product_summary'  , "estore_wrapper_product_entry_end" , 5);
//remove_action( 'woocommerce_after_single_product_summary'  , "woocommerce_output_product_data_tabs" , 10);
//remove_action( 'woocommerce_after_single_product_summary'  , "woocommerce_upsell_display" , 15);
//remove_action( 'woocommerce_after_single_product_summary'  , "woocommerce_output_related_products" , 20);




