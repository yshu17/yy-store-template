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

/**
 * Remove default WooCommerce func and hooks.
 */
remove_action( 'woocommerce_sidebar','woocommerce_get_sidebar' , 10 );
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb' , 20 );

/**
 *  Reconnecting hooks. All changes must be duplicated in wp-function-remove.php
 *  1. Переподключили хук , поставили его на 7 приоретет
 *  2. Переключили хук с одного события на другое и задали проретет 70
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 ); //1
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 ); //2
