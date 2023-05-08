<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function yy_store_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	//add_theme_support( 'wc-product-gallery-zoom' );
	//add_theme_support( 'wc-product-gallery-lightbox' );
	//add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'yy_store_woocommerce_setup' );



/**
 * Change several of the breadcrumb defaults
 * настройки для хлебных крошек
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'yy_store_woocommerce_breadcrumbs' );
function yy_store_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#707; ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb mb-3" itemprop="breadcrumb" aria-label="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Shop', 'breadcrumb', 'woocommerce' ),
        );
}
add_filter( 'woocommerce_breadcrumb_home_url', 'yy_store_breadrumb_home_url' );
function yy_store_breadrumb_home_url() {
    return wc_get_page_permalink( 'shop' );
}

/**
 * Change main wrapper and add bootstrap 5 container
 * добаляем контейнер в начало перед мэйном и сам мэйн
 * Закрывающие теги контейнеров
 */

add_action( 'woocommerce_before_main_content', 'yy_store_woocommerce_wrapper_before', 10 );
function yy_store_woocommerce_wrapper_before() {
	?>
		<main id="primary" class="site-main">
			<div class="container-md">
	<?php
}

add_action( 'woocommerce_after_main_content', 'yy_store_woocommerce_wrapper_after', 10 );

function yy_store_woocommerce_wrapper_after() {
	?>
			</div> <!-- <div class="container-md">-->
		</main><!-- #main -->
	<?php
}

/**
 *  Added wrappers for main content
 *  Вставляем Секцию для товара и после  хлебные крошки с контейнером
 *  закрывающие теги для них
 */
add_action( 'woocommerce_before_single_product', 'yy_store_woocommerce_product_start', 5 );
function yy_store_woocommerce_product_start() {
	?>
		<section class="product">
			<?php woocommerce_breadcrumb(); ?>
			<div class="container-fluid d-flex">
	<?php
}
add_action( 'woocommerce_after_single_product', 'yy_store_woocommerce_product_end', 5 );
function yy_store_woocommerce_product_end() {
	?>
			</div> <!-- <section class="product">-->
		</section><!-- <div class="container-fluid d-flex"> -->
	<?php
}

/**
 *  Added wrappers for "entry-summary" col wrapper for images
 *  Начало главного врапера для продукта
 *  Начало Колонки для картинки и конец
 */
add_action( 'woocommerce_before_single_product_summary', 'yy_store_woocommerce_product_image_start', 5 );
function yy_store_woocommerce_product_image_start() {
	?>
		<div class="row row-gap-3">
			<div class="col-lg-6 p-0">		
	<?php
}
add_action( 'woocommerce_before_single_product_summary', 'yy_store_woocommerce_product_image_end', 25 );
function yy_store_woocommerce_product_image_end() {
	?>
		</div> <!-- <div class="col-lg-6 p-0">-->
	<?php
}

/**
 *  Added wrappers for "entry-summary" product content
 * Начало колноки для описания товара
 * Конец колонки товара и закрывающий тег для всего товара
 */
add_action( 'woocommerce_before_single_product_summary', 'yy_store_woocommerce_product_conent_start', 30 );
function yy_store_woocommerce_product_conent_start() {
	?>
		 <div class="col-lg-6 p-0 ps-3">		
	<?php
}
add_action( 'woocommerce_after_single_product_summary', 'yy_store_woocommerce_product_conent_end', 5 );
function yy_store_woocommerce_product_conent_end() {
	?>
			</div> <!--  <div class="col-lg-6 p-0 ps-3">-->
		</div> <!-- <div class="row row-gap-3">-->
	<?php
}

add_action( 'woocommerce_before_add_to_cart_quantity', 'yy_store_woocommerce_quantity_and_button_div_start', 5 );
function yy_store_woocommerce_quantity_and_button_div_start() {
	?>
		<div class="d-flex flex-wrap align-items-center gap-2 my-sm-5 button-group">		
	<?php
}
add_action( 'woocommerce_after_add_to_cart_button', 'yy_store_woocommerce_quantity_and_button_div_end', 5 );
function yy_store_woocommerce_quantity_and_button_div_end() {
	?>	
		</div> <!-- <div class="d-flex flex-wrap align-items-center gap-2 my-sm-5 button-group"> -->
	<?php
}

/**
 *  Reconnecting hooks. All changes must be duplicated in wp-function-remove.php
 *  1. Переподключили хук , поставили его на 7 приоретет
 *  2. Переключили хук с одного события на другое и задали проретет 70
 */
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 7 );      	//1
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 70 ); 	//2