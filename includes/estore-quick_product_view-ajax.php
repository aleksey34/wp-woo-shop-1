<?php

if(!defined("ABSPATH")){
	exit();
}

// подключаем AJAX обработчики, только когда в этом есть смысл
if( wp_doing_ajax() ){
	add_action('wp_ajax_ajax_quick_view_product', 'ajax_quick_product_view_handler');
	add_action('wp_ajax_nopriv_ajax_quick_view_product', 'ajax_quick_product_view_handler');
}



function ajax_quick_product_view_handler(){

	if( !wp_verify_nonce($_POST['nonce'] , 'estore_quick_view_product_nonce') && !empty($_POST['id'])  ){
	wp_die("Something is going wrong");
}

$product_id  = esc_attr($_POST["id"]);
$quick_product = wc_get_product($product_id);
//	echo get_the_title($product_id)->get_price(); exit();

    ob_start();
?>

	<div class="modal-body">
						<div class="col-md-5 modal_body_left">
                          <?php
                          // get_post_thumbnail_id(postId);--get attachment if here//
                          //    //wp_get_attachment_image_url(attachment_id , size)  ; other func for image  ?>
                            <?php echo $quick_product->get_image( "shop_single" , ["alt"=>"thumbnail", "class"=>"img-responsive"] , "" );  ?>
						</div>
						<div class="col-md-7 modal_body_right">


                            <h4><?php  echo $quick_product->get_title();  ?></h4>
                            <p><?php  echo $quick_product->get_description()  ?></p>



                            <div class="simpleCart_shelfItem   simpleCart_shelfItem">
                                <div class="modal_body_right_cart">
                                    <p>
                                        <?php  if( $quick_product->get_regular_price() !== $quick_product->get_price()): ?>
                                        <span><?php echo $quick_product->get_regular_price() ?> руб.</span>
                                        <?php    endif; ?>
                                        <?php  if(empty($quick_product->get_sale_price()))  : //&& $quick_product->get_price() === $quick_product->get_sale_price()): ?>
                                        <i class="item_price"><?php echo $quick_product->get_price();  ?> руб.</i>
                                        <?php  else: ?>
                                            <i class="item_price"><?php echo $quick_product->get_sale_price();  ?> руб.</i>
                                        <?php endif;  ?>
                                    </p>
                                </div>


                                <span>
                                    <?php  ?>
                                </span>

                                <a href="/shop/?add-to-cart=<?php echo $product_id ?>"
                                   data-quantity="1"
                                   class="w3ls-cart button product_type_simple add_to_cart_button ajax_add_to_cart"
                                   data-product_id="<?php  echo $product_id  ?>"
                                   data-product_sku="<?php  echo $quick_product->get_sku()   ?>"
                                   aria-label="Добавить &quot;<?php echo $quick_product->get_title()   ?>&quot; в корзину"
                                   rel="nofollow">
                                    В корзину
                                </a>



                            </div>

						</div>
						<div class="clearfix"> </div>
					</div>

<?php



    $data['product'] = ob_get_clean();


wp_send_json($data);

wp_die();

}



