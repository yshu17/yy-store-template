<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// Remove each style one by one
// add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
// function jk_dequeue_styles( $enqueue_styles ) {
// 	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
// 	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
// 	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
// 	return $enqueue_styles;
// }
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// remove_action( 'woocommerce_sidebar','woocommerce_get_sidebar' , 10 );

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb' , 20 );

remove_all_filters( 'woocommerce_after_single_product_summary' );