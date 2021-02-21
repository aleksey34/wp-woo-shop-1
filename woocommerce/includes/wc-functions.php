<?php
if(!defined("ABSPATH")){
	exit;
}

//
//remove_action("woocommerce_before_main_content" , 'woocommerce_breadcrumb' , 20);
//
//add_action("woocommerce_before_main_content" , 'woocommerce_breadcrumb' , 20);


//sidebar
add_action("woocommerce_sidebar" , "est_woocommerce_sidebar_add_only_active" , 20);
function est_woocommerce_sidebar_add_only_active(){

if(!is_product()){
	woocommerce_get_sidebar();
	}
}

//add modal window for quick review one product
add_action("wp_footer" , "estore_modal_window_product_review" , 50);
function estore_modal_window_product_review(){
	?>
	<div class="modal video-modal fade" id="modal-product" tabindex="-1" role="dialog" aria-labelledby="modal-product">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section class="modal-body-section">
<!--					modal-body need here  ---ajax estore-quick-product -->
				</section>
			</div>
		</div>
	</div>
<?php
}


// classes for shortcodes
    add_filter("post_class" , function ($classes){
        if(wc_get_loop_prop("is_shortcode")){
	        $classes[]= "products-shortcode-item";
        }

        return $classes;
    });



















