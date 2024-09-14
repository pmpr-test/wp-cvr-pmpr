<?php
/**
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.3
 */

defined('ABSPATH') || exit;

if (!wp_doing_ajax()) {
	do_action('woocommerce_review_order_before_payment');
}
if (WC()->cart->needs_payment()) : ?>
    <div id="payment" class="woocommerce-checkout-payment">
        <div class="card border-gray-300 mb-6">
            <div class="card-body">
                <h2 class="h5 font-weight-normal mb-4"><?php esc_html_e('Payment Method', PR__CVR__PMPR) ?></h2>
                <ul class="wc_payment_methods payment_methods methods list-group list-group-flush list-group-compact">
					<?php
					if (!empty($available_gateways)) {
						foreach ($available_gateways as $gateway) {
							wc_get_template('checkout/payment-method.php', ['gateway' => $gateway]);
						}
					} else {

						$notice = apply_filters('woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__('Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', PR__CVR__PMPR) : esc_html__('Please fill in your details above to see available payment methods.', PR__CVR__PMPR));
						?>
                        <li class="woocommerce-notice woocommerce-notice--info woocommerce-info list-group-item px-0 bg-transparent border-gray-200 px-0 py-4">
                            <div class="<?php get_wc_alert_class('warning', $notice, ['mb-0']); ?>">
								<?php echo $notice; ?>
                            </div>
                        </li>
						<?php
					}
					?>
                </ul>
            </div>
        </div>
    </div>
<?php
endif;
if (!wp_doing_ajax()) {
	do_action('woocommerce_review_order_after_payment');
}

