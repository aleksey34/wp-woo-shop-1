<?php

if(!defined("ABSPATH")){
	exit;
}

// newsletter block
add_action("est_footer_parts" , "est_newsletters_footer" , 10);

function est_newsletters_footer(){

	get_template_part("template-parts/footer/newsletters");

}

// start container for footer
add_action("est_footer_parts" , "est_start_footer_container" , 15);

function est_start_footer_container(){

	echo "<div class='footer' >";

}


// footer block widgets
add_action("est_footer_parts" , "est_widgets_footer" , 20);

function est_widgets_footer(){

	get_template_part("template-parts/footer/widgets");
}


// footer copyright block
add_action("est_footer_parts" , "est_copyright_footer" , 30);

function est_copyright_footer(){

	get_template_part("template-parts/footer/copyright");
}

// end container for footer
add_action("est_footer_parts" , "est_end_footer_container" , 35);

function est_end_footer_container(){

	echo "</div>";
}




