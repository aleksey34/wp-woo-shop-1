<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<section class=" woocommerce-customer-details padding-top-2">

	<?php if ( $show_shipping ) : ?>

	<section class=" padding-top-2 woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
		<div class="  woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

	<?php endif; ?>
    <div class=" panel panel-primary">
        <h2 class="padding-2 panel-heading woocommerce-column__title"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h2>

        <address class="panel-body" >

            <?php //echo wp_kses_post( $order->get_formatted_billing_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
	        <?php
	        //            show all field by one
	        // echo wp_kses_post( $order->get_billing_address_1()  );
	        ?>
            <p>
                <strong>Страна:</strong> <?php   echo wp_kses_post( $order->get_billing_country()  );?>
            </p>
            <p>
                <strong>Город:</strong> <?php   echo wp_kses_post( $order->get_billing_city()  );?>
            </p>
            <p>
               <strong>Адрес:</strong> <?php echo sprintf("POSTCODE:%s   %s" ,  wp_kses_post($order->get_billing_postcode()) ,  wp_kses_post( $order->get_billing_address_1())  );?>
            </p>
            <p>
               <strong>Имя:</strong> <?php   echo wp_kses_post( $order->get_billing_first_name()  );?>
            </p>
            <p>
               <strong>Фамилия:</strong> <?php   echo wp_kses_post( $order->get_billing_last_name()  );?>
            </p>



            <?php if ( $order->get_billing_phone() ) : ?>
                <p class=" woocommerce-customer-details--phone"><strong>Телефон:</strong> <?php echo esc_html( $order->get_billing_phone() ); ?></p>
            <?php endif; ?>

            <?php if ( $order->get_billing_email() ) : ?>
                <p class=" woocommerce-customer-details--email"><strong>Электронная почта:</strong> <?php echo esc_html( $order->get_billing_email() ); ?></p>
            <?php endif; ?>

        </address>
    </div>
	<?php if ( $show_shipping ) : ?>

		</div><!-- /.col-1 -->



		<div class="panel panel-primary woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
			<h2 class="panel-heading padding-2 woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h2>
			<address class="panel-body">
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
			</address>
		</div><!-- /.col-2 -->

	</section><!-- /.col2-set -->

	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
