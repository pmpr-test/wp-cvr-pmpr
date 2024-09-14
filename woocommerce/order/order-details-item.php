<?php
/**
 * Order Item Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-item.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
	return;
}

$qty               = $item->get_quantity();
$is_visible        = $product && $product->is_visible();
$product_permalink = apply_filters('woocommerce_order_item_permalink', $is_visible ? $product->get_permalink($item) : '', $item, $order);
$refunded_qty      = $order->get_qty_refunded_for_item($item_id);

if ($refunded_qty) {
	$qty_display = '<del>' . esc_html($qty) . '</del> <ins>' . esc_html($qty - ($refunded_qty * -1)) . '</ins>';
} else {
	$qty_display = esc_html($qty);
}

ob_start();
do_action('woocommerce_order_item_meta_start', $item_id, $item, $order, false);

wc_display_item_meta($item);

do_action('woocommerce_order_item_meta_end', $item_id, $item, $order, false);
$after = ob_get_clean();

wc_get_template(
	'order-details-item.php',
	[
		'item'       => $item,
		'name'       => apply_filters('woocommerce_order_item_name', $item->get_name()),
		'after'      => $after,
		'order'      => $order,
		'total'      => $order->get_formatted_line_subtotal($item),
		'item_id'    => $item_id,
		'quantity'   => apply_filters('woocommerce_order_item_quantity_html', sprintf('%s <span class="text-muted">|</span> %s', sprintf(__('%s Number', PR__CVR__PMPR), $qty_display), WC()->cart->get_product_price($product)), $item),
		'product'    => $product,
		'permalink'  => $product_permalink,
		'item_class' => apply_filters('woocommerce_order_item_class', 'woocommerce-table__line-item order_item', $item, $order),
	]
);
?>

<?php
if ($show_purchase_note && $purchase_note) : ?>

    <li class="woocommerce-table__product-purchase-note product-purchase-note list-group-item bg-transparent border-gray-200 px-0 py-3">
		<?php echo wpautop(do_shortcode(wp_kses_post($purchase_note))) ?>
    </li>

<?php
endif; ?>

