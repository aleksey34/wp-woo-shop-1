<?php

if(!defined("ABSPATH")){
	exit();
}

// подключаем AJAX обработчики, только когда в этом есть смысл
if( wp_doing_ajax() ){
	add_action('wp_ajax_search-ajax', 'ajax_search_handler');
	add_action('wp_ajax_nopriv_search-ajax', 'ajax_search_handler');
}



function ajax_search_handler(){


if( !wp_verify_nonce($_POST['nonce'] , 'estore_search_nonce') && !empty(trim($_POST['data']))  ){
	wp_die("Something is going wrong");
}

$query_args = [
 "post_type" => ['post' , 'page' , 'product'],
	"post_status"=> "publish" ,
	"s"=> htmlspecialchars(trim($_POST['s']))
];
$query_ajax = new WP_Query($query_args);


$json_data = [];

//$json_data['out'] = ob_start(PHP_OUTPUT_HANDLER_CLEANABLE);
ob_start(PHP_OUTPUT_HANDLER_CLEANABLE);

if($query_ajax->have_posts()){
echo "<ul class='list-unstyled'>";
	while ($query_ajax->have_posts()){
	$query_ajax->the_post();
    ?>
	<li><a href="<?php echo get_permalink();  ?>"><?php  echo get_the_title(); ?></a></li>
<?php
	}
echo "</ul>";
}else{
    echo "<ul class='list-unstyled'>";

    echo "<li>Ничего не найденно</li>";

    echo "</ul>";
}

$json_data['out'] = ob_get_clean();
//$json_data['out'] .= ob_get_clean();


wp_send_json($json_data); wp_die();


 //wp_send_json($data);
	// exit();
}

