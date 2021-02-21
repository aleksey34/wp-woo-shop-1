<?php


if(!defined("ABSPATH")){
	exit();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;



function crb_attach_theme_meta(){


	Container::make( 'comment_meta', __( 'Comment Information' ) )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_comment_rating', __( 'Comment Rating' ) ),
		         Field::make( 'text', 'crb_comment_additional_info', __( 'Additional Comment Information' ) ),
	         ) );



}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_meta' );






add_action( 'carbon_fields_post_meta_container_saved', 'crb_after_save_event' );
function crb_after_save_event( $post_id ) {
	if ( get_post_type( $post_id ) !== 'crb_event' ) {
		return false;
	}

	$event_date = carbon_get_post_meta( $post_id, 'crb_event_date' );
	if ( $event_date ) {
		$timestamp = strtotime( $event_date );
		update_post_meta( $post_id, '_crb_event_timestamp', $timestamp );
	}
}
