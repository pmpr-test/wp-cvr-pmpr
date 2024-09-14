<?php
/**
 * Order details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.6.0
 */

defined( 'ABSPATH' ) || exit;

$order = wc_get_order( $order_id );

if ( ! $order ) {
	return;
}

$order_items           = $order->get_items( apply_filters( 'woocommerce_purchase_order_item_types', 'line_item' ) );
$show_purchase_note    = $order->has_status( apply_filters( 'woocommerce_purchase_note_order_statuses', array( 'completed', 'processing' ) ) );
$downloads             = $order->get_downloadable_items();
$show_downloads        = $order->has_downloadable_item() && $order->is_download_permitted();

if ( $show_downloads ) {
	wc_get_template(
		'order/order-downloads.php',
		array(
			'downloads'  => $downloads,
			'show_title' => true,
		)
	);
}
?>
<section class="woocommerce-order-details mb-6">
	<?php do_action( 'woocommerce_order_details_before_order_table', $order ); ?>

    <div class="card border-gray-300">
        <div class="card-body border-gray-300">
            <h2 class="woocommerce-order-details__title h4 mb-4"><?php esc_html_e( 'Order details', PR__CVR__PMPR ); ?></h2>
	        <?php do_action( 'woocommerce_order_details_before_order_table_items', $order ); ?>
            <ul class="woocommerce-table woocommerce-table--order-details shop_table order_details list-group list-group-flush list-group-compact">
	            <?php
	
	            foreach ( $order_items as $item_id => $item ) {
		            $product = $item->get_product();
		
		            wc_get_template(
			            'order/order-details-item.php',
			            array(
				            'item'               => $item,
				            'order'              => $order,
				            'product'            => $product,
				            'item_id'            => $item_id,
				            'purchase_note'      => $product ? $product->get_purchase_note() : '',
				            'show_purchase_note' => $show_purchase_note,
			            )
		            );
	            }
	
	            ?>
            </ul>
	        <?php do_action('woocommerce_order_details_after_order_table_items', $order); ?>
         
        </div>
    </div>
	<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>
</section>

<?php
/**
 * Action hook fired after the order details.
 *
 * @since 4.4.0
 * @param WC_Order $order Order data.
 */
do_action( 'woocommerce_after_order_details', $order );

