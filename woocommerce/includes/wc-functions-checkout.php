<?php

if(!defined("ABSPATH")){
	exit();
}

add_filter("woocommerce_form_field_args" , "estore_checkout_custom_filds_args");


function estore_checkout_custom_filds_args ($fields){

	//$fields["class"] = [$fields['class'][0] , "margin-top-3"];
	$fields["label_class"] = ["form-group"];
	$fields["input_class"] = ["form-control"];

	return $fields;
}
add_filter("woocommerce_default_address_fields" , "estore_custom_each_fields_checkout");
//or better -- all-filds filter woocommerce_billing_filds
function estore_custom_each_fields_checkout($fields){

//get_pr($fields["address_2"]["placeholder"]) ;
$fields["address_2"]["placeholder"] ="Квартира , Дом , Нежилое помещение , Апартаменты" ;

//can change each fields  (class in tag p- wrapper)
	return $fields;
}


