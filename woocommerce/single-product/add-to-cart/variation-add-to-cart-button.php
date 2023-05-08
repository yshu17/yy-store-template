<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action('woocommerce_before_add_to_cart_button'); ?>

	<?php
	/*
	 * Hook: woocommerce_before_add_to_cart_quantity
	 *
	 * Hooked: yy_store_woocommerce_quantity_and_button_div_start - 5
	 *
	 */
	do_action('woocommerce_before_add_to_cart_quantity');
	?>

	<div class="cart-wrapper">
		<button type="submit"
			class="btn btn-dark d-flex justify-content-center align-items-center gap-1 <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">
			<img class="svg me-2"
				src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons-svg/teenyicons_bag-outline_white.svg"
				alt="">
			<h4 class="m-0 p-0 d-inline-block">add to cart</h4>
		</button>
	</div>
	<div class="wish-wrapper">
		<input type="checkbox" class="btn-check" name="wish" id="wish" autocomplete="off">

		<label class="btn btn-light d-flex justify-content-center align-items-center gap-1" for="wish">
			<img class="svg heart-svg"
				src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons-svg/mdi_cards-heart-outline.svg"
				alt="">
			<h4 class="m-0 p-0 d-inline-block">add to wish</h4>
		</label>
	</div>
	<div class="quantity-wrapper">
		<?php
		woocommerce_quantity_input(
			array(
				'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
				'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
				'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(),
				// WPCS: CSRF ok, input var ok.
				'classes' => apply_filters('woocommerce_quantity_input_classes', array('form-control'), $product),
			)
		);

		do_action('woocommerce_after_add_to_cart_quantity');
		?>
	</div>

	<?php
	/*
	 * Hook: woocommerce_after_add_to_cart_button
	 *
	 * Hooked: yy_store_woocommerce_quantity_and_button_div_end - 5
	 *
	 */

	do_action('woocommerce_after_add_to_cart_button');
	?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>