<?php

if(!defined("ABSPATH")){
	exit;
}



add_action("woocommerce_before_single_product" , "estore_wrapper_product_start" , 5);

function estore_wrapper_product_start(){
	?>
	<div class="single" id="product-<?php the_ID(); ?>">
	<div class="container">
	<?php
}

add_action("woocommerce_after_single_product" , "estore_wrapper_product_end" , 30);

function estore_wrapper_product_end(){
	?>
	</div>
	</div>
	<?php
}



add_action("woocommerce_before_single_product_summary" , "estore_wrapper_product_img_start" , 5);
function estore_wrapper_product_img_start(){
	?>
	<div  <?php wc_product_class( 'col-md-4 single-left'); ?>>
	<?php
}

add_action("woocommerce_before_single_product_summary" , "estore_wrapper_product_img_end" , 25);
function estore_wrapper_product_img_end(){
	?>
	</div>

	<?php
}

add_action("woocommerce_before_single_product_summary" , "estore_wrapper_product_entry_start" , 30);
function estore_wrapper_product_entry_start(){
	?>
	<div class="col-md-8 single-right">
	<?php
}

add_action("woocommerce_after_single_product_summary" , "estore_wrapper_product_entry_end" , 5);
function estore_wrapper_product_entry_end(){
	?>
	</div>

	<?php
}

add_filter("woocommerce_short_description" , "estore_short_description" , 10);
function estore_short_description($content){

	$content =  '<div class="description">
					<p><span>'.esc_html__("Description" , "estore").' </span> '.$content.'</p>
				</div>';

	return $content;
}

/**
 *
 * remove heading in tabs
 */
add_filter("woocommerce_product_description_heading" ,'est_head_tabs_remove');
add_filter("woocommerce_product_additional_information_heading" ,'est_head_tabs_remove');

function est_head_tabs_remove($head){
    $head = false;
    return $head;
}

/**
 * resize gravatar  -- thumbnainl for  review  -- comment for WOO
 */
add_filter("woocommerce_review_gravatar_size" , "est_resize_gravatar_review");
function est_resize_gravatar_review($size){
$size = 80;
return $size;
}


add_filter("woocommerce_output_related_products_args" , function($args){
    $args["posts_per_page"] = 10;
    return $args;
});








