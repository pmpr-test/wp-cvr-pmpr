<?php

defined('ABSPATH') || exit;
?>
<div class="shop_table woocommerce-checkout-review-order-table">
    <div class="card border-gray-300 mb-0 mb-xl-2">
        <div class="card-body">
            <h2 class="h5 font-weight-normal mb-4"><?php esc_html_e('Order Details', PR__CVR__PMPR) ?></h2>
			<?php do_action('woocommerce_review_order_before_cart_contents'); ?>
            <ul class="list-group list-group-flush list-group-compact">
				<?php

				foreach (WC()->cart->get_cart() as $key => $item) {
					$_product = apply_filters('woocommerce_cart_item_product', $item['data'], $item, $key);

					if ($_product instanceof WC_Product && $_product->exists() && $item['quantity'] > 0
						&& apply_filters('woocommerce_checkout_cart_item_visible', true, $item, $key)) {

						$name     = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $item, $key);
						$price    = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $item, $key);
						$class    = apply_filters('woocommerce_cart_item_class', 'cart_item', $item, $key);
						$total    = apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $item['quantity']), $item, $key);
						$quantity = apply_filters('woocommerce_widget_cart_item_quantity', sprintf('%s <span class="text-muted">|</span> %s', sprintf(__('%s Number', PR__CVR__PMPR), $item['quantity']), $price), $item, $key);

						wc_get_template(
							'order-details-item.php',
							[
								'name'       => $name,
								'item'       => $item,
								'total'      => $total,
								'product'    => $_product,
								'quantity'   => $quantity,
								'item_class' => $class,
							]
						);
					}
				}
				?>
            </ul>
			<?php do_action('woocommerce_review_order_after_cart_contents'); ?>
        </div>
    </div>
</div>

