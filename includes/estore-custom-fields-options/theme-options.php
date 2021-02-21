<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {



//	Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
//	         ->add_fields( array(
//		         Field::make( 'text', 'crb_text', 'Text Field' ),
//	         ) );


//	$basic_options_container =
//		Container::make( 'theme_options', __( 'Basic Options' ) )
//		         ->set_icon("dashicons-carrot")
//		         ->add_fields( array(
//			         Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
//			         Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
//		         ) )





// Default options page
	$basic_options_container =
		Container::make( 'theme_options', __( 'Basic Options' ) )
										->set_icon("dashicons-carrot")


	                                    ->add_tab(esc_html__("Шапка" , 'estore') , array(

	                                    	Field::make("select" , "est_header_logic", __("Будет использован логин?" , "estore"))
			                                    ->add_options(array(
				                                    'yes' => 'Да , буду использовать логин',
				                                    'no' => 'Нет , буду использовать текст',
			                                    ))
	                                    ,

		                                    Field::make( 'image', 'est_header_logo', __( 'Лого' ) )
			                                    ->set_conditional_logic(array(
				                                    'relation' => 'AND',
				                                    array(
					                                    'field' => 'est_header_logic',
					                                    'value' => 'yes',
					                                    'compare' => '=',
				                                    )
			                                    ))
	                                           // ->set_width(30)
	                                    ,

		                                    Field::make( 'text', 'est_header_site_name', __( 'Name Of Site' ) )
			                                    ->set_conditional_logic(array(
				                                    'relation' => 'AND',
				                                    array(
					                                    'field' => 'est_header_logic',
					                                    'value' => 'no',
					                                    'compare' => '=',
				                                    )
			                                    ))
		                                  //  ->set_default_value('test 1')

		                                    //  ->set_width(70)
	                                    ,
											Field::make( 'text', 'est_header_site_desc', __( 'Description Of Site' ) )
												->set_conditional_logic(array(
													'relation' => 'AND',
													array(
														'field' => 'est_header_logic',
														'value' => 'no',
														'compare' => '=',
													)
												))
//		                                    ->set_default_value("test2")
//		                                    ->set_value("value 33333")
	                                    ,

	                                    ) )



										->add_tab( esc_html__( 'Подвал', "estore" ), array(
											Field::make( 'text', 'est_footer_copyright', __( 'Footer Copyright' ) )
										->set_default_value("&copy; 2019 Electronic Store. All rights reserved | Created by Aleksey"),
											Field::make( 'radio', 'est_footer_newsletters_show', __( 'Show Newsletters' ) )
												->add_options( array(
													'on' => __( 'Включить' ),
													'off' => __( 'Выключить' ),
												) )
												->set_width(50),
											Field::make( 'radio', 'est_footer_widget_show', __( 'Show Widgets' ) )
											     ->add_options( array(
												     'on' => __( 'Включить' ),
												     'off' => __( 'Выключить' ),
											     ) )
												->set_width(50),
											Field::make( 'text', 'crb_position', __( 'Position' ) ),
										) )
										->add_tab( __( 'Notification' ), array(
											Field::make( 'text', 'crb_email', __( 'Notification Email' ) ),
											Field::make( 'text', 'crb_phone', __( 'Phone Number' ) ),
										) );

										;




//	Container::make( 'theme_options', __( 'test data' ) )
//	         ->set_page_parent( $basic_options_container ) // reference to a top level container
//	         ->add_fields( array(
//			Field::make( 'text', 'crb_test_data1', __( 'test1' ) ),
//			Field::make( 'text', 'crb_test_data2', __( 'test2' ) ),
//
//			Field::make( 'header_scripts', 'crb_header_script_test1', __( 'Header Script' ) ),
//			Field::make( 'footer_scripts', 'crb_footer_script_test2', __( 'Footer Script' ) ),
//
//
//		) );




// Add second options page under 'Basic Options'


//
//	Container::make( 'theme_options', __( 'Social Links' ) )
//	         ->set_page_parent( $basic_options_container ) // reference to a top level container
//	         ->add_fields( array(
//			Field::make( 'text', 'crb_facebook_link', __( 'Facebook Link' ) ),
//			Field::make( 'text', 'crb_twitter_link', __( 'Twitter Link' ) ),
//		) );



// Add third options page under "Appearance"
//	Container::make( 'theme_options', __( 'Customize Background' ) )
//	         ->set_page_parent( 'themes.php' ) // identificator of the "Appearance" admin section
//	         ->add_fields( array(
//			Field::make( 'color', 'crb_background_color', __( 'Background Color' ) ),
//			Field::make( 'image', 'crb_background_image', __( 'Background Image' ) ),
//		) );







}




