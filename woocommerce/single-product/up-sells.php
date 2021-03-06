<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>
    <div class="w3l_related_products">


	<section class="up-sells upsells products container">

		<h3 class="up-sells-title"><?php esc_html_e( 'You may also like&hellip;', 'woocommerce' ); ?></h3>
        <ul id="upSellsCarousel" class="columns-<?php echo esc_attr(wc_get_loop_prop("columns"));  ?>">

		<?php // woocommerce_product_loop_start(); ?>

			<?php foreach ( $upsells as $upsell ) : ?>
            <li>
				<?php
					$post_object = get_post( $upsell->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>
            </li>
			<?php endforeach; ?>

		<?php // woocommerce_product_loop_end(); ?>
        </ul>
	</section>


    </div>


    <script type="text/javascript">
        jQuery(window).load(function() {
            jQuery("#upSellsCarousel").flexisel({
                visibleItems:5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems:2
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <style>
        .w3_hs_bottom.w3_hs_bottom_sub1 li.nbs-flexisel-item{
            float:none;
        }

    </style>
<?php endif;

wp_reset_postdata();
