<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 * @hooked estore_archive_wrapper_start - 40
 */
do_action( 'woocommerce_before_main_content' );

?>
<?php  if(!is_shop()) : ?>
<header class="woocommerce-products-header text-center" style="margin-bottom: 2rem;">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php  endif;  ?>
<?php


/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 20
 */
do_action( 'woocommerce_sidebar' );




if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked  est_archive_product_wrap_start 5
	 * @hooked woocommerce_output_all_notices - 10
	 * estore_count_order_wrap_open 15
	 *
	 * estore_count_wrap_open 17
	 * @hooked woocommerce_result_count - 20
	 * estory_count_wrap_close 25
	 *
	 * estore_order_wrap_open 27
	 * @hooked woocommerce_catalog_ordering - 30
	 * estore_order_wrap_close 33
	 *
	 * estore_count_order_wrap_close 35
	 * @hooked estore_out_subcategories     -40
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}


	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
     *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}


/**
 * Hook: woocommerce_after_main_content.
 *@hooked est_archive_product_wrap_end 5
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 *
 *
 *
 * @hooked estore_archive_wrapper_end - 40
 *
 */
do_action( 'woocommerce_after_main_content' );




get_footer( 'shop' );
