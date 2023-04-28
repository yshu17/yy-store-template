<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'inc/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', function() {
	require get_template_directory() . '/inc/custom-fields-options/metabox.php';
	require get_template_directory() . '/inc/custom-fields-options/theme-options.php';
});

//Implement the Custom Header feature.

require get_template_directory() . '/inc/function-parts/theme-enque-style-scripts.php';

require get_template_directory() . '/inc/function-parts/theme-settings.php';

require get_template_directory() . '/inc/function-parts/theme-widgets.php';

require get_template_directory() . '/inc/function-parts/ajax.php';

require get_template_directory() . '/inc/function-parts/navigations.php';


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/woocommerce/woocommerce.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions.php';
	require get_template_directory() . '/woocommerce/inc/wc-functions-cart.php';
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */

// function yy_store_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'yy_store_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'yy_store_content_width', 0 );