<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( ' col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles ', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked estore_product_loop_div_open - 5
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked estore_thumbnail_sale_wrap_div_open - 5
	 * @hooked woocommerce_show_product_loop_sale_flash - 10 // remove / add  3
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 * @hooked estore_thumbnail_sale_wrap_div_end - 30
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10 // move to woocommerce_after_shop_loop_item
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
     * estore_price_cart_block_div_open 7
     * 8woocommerce_template_loop_price 8
	 * @hooked woocommerce_template_loop_add_to_cart - 10
     * estore_price_cart_block_div_close 15
	 * @hooked estore_product_loop_div_close - 20
     *
     *
     * estore_price_cart_block_div_open 30
	 * woocommerce_template_loop_price 40
	 * @hooked woocommerce_template_loop_add_to_cart - 50
	 * estore_price_cart_block_div_close 60
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
