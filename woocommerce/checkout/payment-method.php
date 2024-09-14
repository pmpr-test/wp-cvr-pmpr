<?php
/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.0
 */

if (!defined('ABSPATH') || !isset($gateway) || !$gateway instanceof WC_Payment_Gateway) {
	exit;
}
?>
<li class="wc_payment_method payment_method_<?php echo esc_attr( $gateway->id ); ?> list-group-item bg-transparent border-gray-200 px-0 py-4">

    <div class="custom-control custom-radio">
        <input id="payment_method_<?php echo esc_attr( $gateway->id ); ?>"
               type="radio" class="input-radio custom-control-input" name="payment_method"
               value="<?php echo esc_attr( $gateway->id ); ?>"<?php checked( $gateway->chosen, true ); ?>
               data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>"/>

        <label for="payment_method_<?php echo esc_attr( $gateway->id ); ?>" class="custom-control-label custom-control-label-lg">
            <span class="mx-3"><?php echo $gateway->get_icon();?></span>
            <span class="h6 my-auto"><?php echo esc_html($gateway->get_title() ? $gateway->get_title() : $gateway->get_method_title()); ?></span>
        </label>
    </div>
	<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
		<div class="no-margin text-gray-800 font-14 payment_box payment_method_<?php echo esc_attr( $gateway->id ); ?>" <?php if ( ! $gateway->chosen ) : ?>style="display:none;"<?php endif; ?>>
            <div class="py-2 px-3 bg-gray-100 rounded mt-2 ">
	            <?php $gateway->payment_fields(); ?>
            </div>
		</div>
	<?php endif; ?>
</li>

