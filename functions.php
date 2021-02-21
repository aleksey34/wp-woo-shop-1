<?php
/**
 * estore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package estore
 */


//add_action( 'after_setup_theme', 'crb_load' );
//function crb_load() {
//	require_once( 'vendor/autoload.php' );
//	\Carbon_Fields\Carbon_Fields::boot();
//}


/**
 *  carbon fields
 */
require_once get_template_directory() . '/includes/estore-custom-fields-options/carbon_fields_init.php';
require_once get_template_directory() . '/includes/estore-custom-fields-options/metabox.php';
require_once get_template_directory() . '/includes/estore-custom-fields-options/theme-options.php';


/**
 * helpers
 */
require_once get_template_directory() . '/includes/estore-helpers.php';



/**
 * theme settings
 */
require_once get_template_directory() . '/includes/estore-theme-settings.php';


/**
 * theme menu init
 */
require_once get_template_directory() . '/includes/estore-menu-init.php';



/**
 * handler for  search ajax and  quick view product ajax
 */
require_once get_template_directory() . '/includes/estore-search-ajax.php';
require_once get_template_directory() . '/includes/estore-quick_product_view-ajax.php';



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
require_once get_template_directory() . '/includes/estore-after-theme-settings.php';






/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require_once get_template_directory() . '/includes/estore-widgets-init.php';



/**
 * Enqueue scripts and styles.
 */
require_once get_template_directory() . '/includes/estore-style-scripts.php';




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Implement the EST Custom Footer.
 */
require get_template_directory() . '/includes/est-custom-footer.php';






/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';


/**
 * excerpt settings
 */
require get_template_directory() . '/includes/estore-excerpt.php';


/**
 * excerpt settings
 */
require get_template_directory() . '/includes/estore-breadcrumbs.php';


/**
 * pagination
 */
require get_template_directory() . '/includes/estore-pagination.php';




/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}




/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
}

if(class_exists("WooCommerce")){
	/**
	 * Customizer woocommerce wc-functions.php.
	 * Customizer woocommerce-functions-remove.php
	 * Customizer woocommerce-functions-cart.php
	 */
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-single.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-checkout.php';

}

