<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'yy_store_woocommerce_header_cart' ) ) {
			yy_store_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'yy_store_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function yy_store_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		yy_store_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'yy_store_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'yy_store_woocommerce_cart_link' ) ) {
    
	/*Cart Link.*/
	function yy_store_woocommerce_cart_link() {
        $item_count = WC()->cart->get_cart_contents_count(); // Получаем количество товаров в корзине
        if( !$item_count == '0' ){
            ?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-dark">
                    <?php echo esc_html( $item_count ); ?>
                <span class="visually-hidden"></span>
            <?php
        }
	}
}

if ( ! function_exists( 'yy_store_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function yy_store_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php yy_store_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

if ( ! function_exists( 'yy_store_woocommerce_minicart' ) ) {

	function yy_store_woocommerce_minicart() {
		
		$cart = WC()->cart;
		// Получаем массив товаров в корзине
		$cart_contents = $cart->get_cart_contents();

		if ( !$cart->is_empty() ) {

			?>
			<ul class="list-unstyled pe-3 bucket-product-list">
			<?php

			foreach ( $cart_contents as $cart_item_key => $cart_item ) {

				$product 		   	= $cart_item['data'];
				$product_id        	= $cart_item['product_id'];
				$product_name      	= $cart_item['data']->get_name();
				$product_sku       	= $cart_item['data']->get_sku();
				$product_image     	= wp_get_attachment_image_src( $cart_item['data']->get_image_id(), 'thumbnail' )[0];
				$product_price     	= wc_price( $cart_item['data']->get_price() * $cart_item['quantity'] );
				$product_quantity  	= $cart_item['quantity'];
				$product_attributes = $cart_item['variation'];
				
				?>
				<li class="d-flex justify-content-between mb-3 list-item product">
					<div class="d-flex gap-3 info-wrapper">
						<img class="product__img" src="<?= $product_image; ?>" alt="">
						<div class="product-details">
							<h4 class="fw-bolder product-details__name"><?=  $product_name; ?></h4>
							<h4 class="text-muted product-details__article">article: <?=  $product_sku;  ?></h4>
							<h4 class="text-muted product-details__color">color: <span class="text-dark fw-bolder"><?= $product_attributes['attribute_pa_color']; ?></span></h4>
							<h4 class="text-muted product-details__size ">size: <span class="text-dark fw-bolder text-uppercase"><?= $product_attributes['attribute_pa_size']; ?></span></h4>
						</div>
					</div>
					<div class="d-flex flex-column justify-content-between align-items-end quantity-wrapper">
						<h4 class="product-count m-0 p-2">Count: <span class="fw-bold"><?=  $product_quantity; ?></span></h4>
						<h4 class="product-cost fw-bold m-0 p-2"><?=  $product_price;  ?></h4>
					</div>
					<a href="<?= esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>" class="btn btn-link btn-sm text-danger remove-item position-absolute text-decoration-none">X</a>
				</li>
				<?php
			}
			
			?>
			</ul>
			<?php
			
			?>
			<div class="d-flex justify-content-between mb-3">
				<h3 class="m-0 p-0 fw-bolder">total</h3>
				<h3 class="m-0 p-0 fw-bolder"><?= $cart->get_cart_subtotal(); ?></h3>
			</div>

			<div class="cart-wrapper d-flex justify-content-center">
				<a href="<?= esc_url( wc_get_cart_url() ) ?>" class="btn btn-dark d-flex justify-content-center align-items-center gap-1">
					<img class="svg me-2" src="<?= esc_url( get_template_directory_uri() ) ?>/assets/images/icons-svg/teenyicons_bag-outline_white.svg" alt="">
					<h4 class="m-0 p-0 d-inline-block">go to cart</h4>
				</a>
			</div>
			<?php

		} else {

			?>
				<div class="cart-wrapper d-flex justify-content-center flex-column align-items-center">
					<h3 class="mb-3 "> Cart is empty</h3>
					<a href="<?= wc_get_page_permalink( 'shop' ); ?>" class="btn btn-dark d-flex justify-content-center align-items-center gap-1">
						<img class="svg me-2" src="<?= esc_url( get_template_directory_uri() ) ?>/assets/images/icons-svg/teenyicons_bag-outline_white.svg" alt="">
						<h4 class="m-0 p-0 d-inline-block">go to shop</h4>
					</a>
				</div>
			<?php

		}
	}
}