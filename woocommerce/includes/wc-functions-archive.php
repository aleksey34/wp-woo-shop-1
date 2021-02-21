<?php


if(!defined("ABSPATH")){
	exit;
}



add_action("woocommerce_before_main_content" , "estore_archive_wrapper_start" , 40);
function estore_archive_wrapper_start(){
?>
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
<?php

}



add_action( 'woocommerce_before_shop_loop' , "count_order_wrap_open" , 15 );
add_action( 'woocommerce_before_shop_loop' ,"estore_count_order_wrap_close"  , 35 );
function count_order_wrap_open(){
?>
<div class="w3ls_mobiles_grid_right_grid2">
<?php
}
function estore_count_order_wrap_close(){
?>
    <div class="clearfix"> </div>
    </div>
<?php
}
add_action( 'woocommerce_before_shop_loop' ,"estore_count_wrap_open"  , 17 );
add_action( 'woocommerce_before_shop_loop' ,"estory_count_wrap_close"  , 25 );
function estore_count_wrap_open(){
    ?>
	<div class="w3ls_mobiles_grid_right_grid2_left">
	<?php
}
function estory_count_wrap_close(){
?>
    </div>
<?php
}
add_action( 'woocommerce_before_shop_loop' ,"estore_order_wrap_open"  , 27 );
add_action( 'woocommerce_before_shop_loop' ,"estore_order_wrap_close"  , 33 );
function estore_order_wrap_open(){
?>
    <div class="w3ls_mobiles_grid_right_grid2_right">
<?php
}
function estore_order_wrap_close(){
    ?>
    </div>
<?php
}




add_action("woocommerce_before_shop_loop" , "est_archive_product_wrap_start" , 5);
function est_archive_product_wrap_start(){
?>
    <div class="col-md-8 w3ls_mobiles_grid_right">
    <?php
}

add_action("woocommerce_after_main_content" ,"est_archive_product_wrap_end" , 5 );
function est_archive_product_wrap_end(){
?>
    			<div class="clearfix"> </div>
					</div>
    <?php
}

add_action("woocommerce_after_main_content" , "estore_archive_wrapper_end" , 40);
function estore_archive_wrapper_end(){
?>
	<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<?php
}



// title
//    add_filter("woocommerce_show_page_title" , "est_remove_title_for_shop_only");
//function est_remove_title_for_shop_only($flag){
//    if(is_shop()){
//        return false;
//    }else return true;
//
//}
//  remive description for shop
//if(is_shop()) {
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
//	remove_action( 'woocommerce_archive_description' , 'woocommerce_taxonomy_archive_description' , 10);
//	remove_action( 'woocommerce_archive_description' , 'woocommerce_product_archive_description' , 10);

//}

// product loop

remove_filter("woocommerce_product_loop_start" , "woocommerce_maybe_show_product_subcategories");

add_action("woocommerce_before_shop_loop" , "estore_out_subcategories" , 40);
function estore_out_subcategories(){
    $cat_out = woocommerce_output_product_categories(
            [
                    'before'=>"<ul  class='w3ls_mobiles_grid_right_grid2' >",
                "after"=> '<div class="clearfix" ></div> </ul>',
                "product_id"=> is_product_category() ? get_queried_object_id() : ""
            ]
    );

    return $cat_out;
}


/**
 * remove count in subcategory in page archive shop
 */
add_filter( 'woocommerce_subcategory_count_html', '__return_empty_string');
//add_filter( 'woocommerce_subcategory_count_html', 'estore_del_count_in_subcategory', 10, 2 );
//function estore_del_count_in_subcategory( $html, $category ){
//
//	return "";
//}




add_filter("product_cat_class" , "estore_add_classes_product_cat");
function estore_add_classes_product_cat($classes){

    $classes[] = " col-md-6 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles ";
    return $classes;
}


add_filter('post_class' , "estore_add_products_classes" );
function  estore_add_products_classes($classes){
    if(is_shop()  || is_product_taxonomy() ){
	   // $classes[] =  " col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles ";
	   // $classes = str_replace("class=\"" ,'class="  col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles   ' , $classes);
	    //$classes = str_replace("Array()class=\"" ,'class="  col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles   ' , $classes);
	  //  get_pr($classes , false);
    }

return $classes;
}
add_filter('post_class' , "estore_add_products_classes_cross" );
function  estore_add_products_classes_cross($classes){
    if(is_cart() ){
        if(in_array("product" , $classes)){
            $classes[]= "col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles";
        }
	   // $classes[] =  " col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles ";
	   // $classes = str_replace("class=\"" ,'class="  col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles   ' , $classes);
	    //$classes = str_replace("Array()class=\"" ,'class="  col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles   ' , $classes);
	  //  get_pr($classes , false);
    }

return $classes;
}



// content loop
add_action("woocommerce_before_shop_loop_item" , "estore_product_loop_div_open" , 5);
function estore_product_loop_div_open(){
    ?>
<!--<div class="gile_ecommerce_tab_left mobiles_grid">-->
     <div class="agile_ecommerce_tab_left mobiles_grid" >
<?php
}
add_action("woocommerce_after_shop_loop_item" , "estore_product_loop_div_close" , 20);
function estore_product_loop_div_close(){
	?>
    </div>
<!--    </div>-->
    <div class="clearfix"></div>
	<?php
}


// end content loop

// remove  link product
remove_action("woocommerce_before_shop_loop_item" ,
    "woocommerce_template_loop_product_link_open"   ,
    10);
remove_action("woocommerce_after_shop_loop_item" ,
    "woocommerce_template_loop_product_link_close"   ,
    5);
// end remove link product

// wrap thumbnail and  sale block

  add_action("woocommerce_before_shop_loop_item_title" , "estore_thumbnail_sale_wrap_div_open" , '5');
 function estore_thumbnail_sale_wrap_div_open(){
     global  $product;
?>
<!--     mobiles_grid-->

     <div class="hs-wrapper hs-wrapper2 " style="background: url(<?php the_post_thumbnail_url(); ?>  )  center center no-repeat  ;background-size:  cover;" >
     <?php
 }
  add_action("woocommerce_before_shop_loop_item_title" , "estore_thumbnail_sale_wrap_div_close" , '30');
  function estore_thumbnail_sale_wrap_div_close(){


      global $product;
     // $product_item = wc_get_product(get_the_ID());
      $attachment_ids = $product->get_gallery_image_ids();

      if( isset($attachment_ids) && !empty($attachment_ids )) {
	foreach ( $attachment_ids as $attachment_id ) {
		echo wp_get_attachment_image( $attachment_id, 'shop_catalog' );
	}
}


?>

      <div class="w3_hs_bottom w3_hs_bottom_sub1">
          <ul>
              <li>
                  <a class="modal-product-link" href="#" data-product="<?php the_ID() ?>" data-toggle="modal" data-target="#modal-product"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
              </li>
          </ul>
      </div>

    </div>


<?php
  }

// end wrap thumbnail and sale block

// remove sale and add  again
    remove_action("woocommerce_before_shop_loop_item_title","woocommerce_show_product_loop_sale_flash" , "10");
    add_action( "woocommerce_before_shop_loop_item_title" ,  "woocommerce_show_product_loop_sale_flash" , "3");
// end  sale


    // product title

   remove_action("woocommerce_shop_loop_item_title" , "woocommerce_template_loop_product_title" , "10")  ;
   add_action("woocommerce_shop_loop_item_title" , "estore_template_loop_product_title" , "10")  ;
   function estore_template_loop_product_title(){
 echo '<h5 class=""><a href="'.get_the_permalink().'" >'.get_the_title().'</a></h5>';
   }
        // end product title

// wrap  price and cart btn
add_action("woocommerce_after_shop_loop_item" , "estore_price_cart_block_div_open" , 7);
function estore_price_cart_block_div_open(){
	?>
    <div class="simpleCart_shelfItem">
	<?php
}

//remove_action("woocommerce_shop_loop_item_title" , "woocommerce_template_loop_product_title" , "10");
//add_action("woocommerce_after_shop_loop_item" , 'woocommerce_template_loop_product_title' , 35);


//remove_action("" , "" , "");
//add_action();



remove_action("woocommerce_after_shop_loop_item_title" , 'woocommerce_template_loop_price' , '10');
add_action("woocommerce_after_shop_loop_item" , "woocommerce_template_loop_price" , 8);

//remove_action("woocommerce_after_shop_loop_item_title" , 'woocommerce_template_loop_add_to_cart' , 10);
//add_action("woocommerce_after_shop_loop_item" , 'woocommerce_template_loop_add_to_cart' , 10);


add_action("woocommerce_after_shop_loop_item" , "estore_price_cart_block_div_close" , 15);
   function estore_price_cart_block_div_close(){
       ?>
</div>
<?php
   }
// end wrap price and cart btn



