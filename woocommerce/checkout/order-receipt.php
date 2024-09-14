<?php
/**
 * Checkout Order Receipt Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/order-receipt.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.2.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!isset($order)) {

    return;
}

?>

<div class="container my-5">
        <div class="card mx-auto max-width-1">
            <div class="card-body">
                <table class="order_details table table-borderless my-0">
                    <?php foreach (get_wc_order_details($order) as $key => $item): ?>
                        <tr class="<?php echo $key ?>">
                            <th><?php echo esc_html($item['title']); ?></th>
                            <td><?php echo $item['value']; ?></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
            <div class="card-footer">
	            <?php do_action('woocommerce_receipt_' . $order->get_payment_method(), $order->get_id()); ?>
            </div>
        </div>
</div>
