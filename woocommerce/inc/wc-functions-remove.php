<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );


remove_action( 'woocommerce_sidebar','woocommerce_get_sidebar' , 10 );

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb' , 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );