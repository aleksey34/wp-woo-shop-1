<?php
/**
 * Cross-sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

defined( 'ABSPATH' ) || exit;

if ( $cross_sells ) : ?>

	<div class="col-sm-8  cross-sells list-unstyled">

		<h3 style="margin-bottom: 1rem;"><?php esc_html_e( 'You may be interested in&hellip;', 'woocommerce' ); ?></h3>

		<?php // woocommerce_product_loop_start(); ?>

<div class="list-unstyled row">
			<?php $count= 1; foreach ( $cross_sells as $cross_sell ) : ?>
<!--				<div style="">-->
            <?php
					$post_object = get_post( $cross_sell->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
				?>
<!--            </div>-->
           <?php if(0 === $count%3){ ?>

            <div style="min-width: 100%; height: 2rem;" class="col-sm-12"></div>


            <?php };   $count++; ?>
			<?php endforeach; ?>
</div>
		<?php  // woocommerce_product_loop_end(); ?>

	</div>
	<?php
endif;

wp_reset_postdata();
