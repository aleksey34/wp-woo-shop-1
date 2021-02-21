<?php



//add_filter('excerpt_more', function($more) {
//	return '';
//});


add_filter( 'excerpt_length', function(){
	return 60;
} );

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return ' <a href="'. get_permalink($post) . '">Читать дальше...</a>';
}