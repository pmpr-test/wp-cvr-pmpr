<?php

defined( 'ABSPATH' ) || exit;

$cart = WC()->cart;

$items = [];

$t_regular  = 0;
$t_discount = 0;
foreach ($cart->get_cart() as $key => $item) {
	
	$_product = apply_filters('woocommerce_cart_item_product', $item['data'], $item, $key);
	
	$qty      = (int)$item['quantity'];
	$sale     = (int)$_product->get_sale_price('');
	$price    = (int)$_product->get_price('');
	$regular  = (int)$_product->get_regular_price('');
	
	$t_regular  += $regular;
	if ($price !== $regular) {
		
		$t_discount += ($regular - $sale) * $qty;
	}
}

if ($t_regular) {
	
	$items['cart-regular'] = [
		'title' => __('Total Regular Price', PR__CVR__PMPR),
		'value' => "<del>" . wc_price($t_regular) . "</del>" ,
	];
}

if ($t_discount) {
	
	$items['cart-discount'] = [
		'title' => __('Total Discount', PR__CVR__PMPR),
		'value' => wc_price($t_discount),
	];
}

foreach ($cart->get_coupons() as $code => $coupon) {
	$key = sanitize_title($code);
	$items["coupon-{$key}"] = [
		'title' => wc_cart_totals_coupon_label($coupon, false),
		'value' => 'wc_cart_totals_coupon_html',
		'args' => [$coupon]
	];
}

$items['cart-subtotal'] = [
	'title' => __('Total Sale Price', PR__CVR__PMPR),
	'value' => 'wc_cart_totals_subtotal_html',
];

if ($cart->needs_shipping()) {
	
	if ($cart->show_shipping()) {
		
		$items['shipping-total'] = [
			'value' => 'wc_cart_totals_shipping_html',
		];
		
	} elseif ('yes' === get_option( 'woocommerce_enable_shipping_calc' )) {
		
		$items['shipping-calc'] = [
			'title' => __('Shipping', PR__CVR__PMPR),
			'value' => 'woocommerce_shipping_calculator',
		];
	}
}

foreach ($cart->get_fees() as $key => $fee) {
	$items["fee-{$key}"] = [
		'title' => $fee->name,
		'value' => 'wc_cart_totals_fee_html',
		'args'  => [$fee],
	];
}

if (wc_tax_enabled() && !$cart->display_prices_including_tax()) {
	
	$customer = WC()->customer;
	$taxable_address = $customer->get_taxable_address();
	$estimated_text  = '';
	if (WC()->customer->is_customer_outside_base() && !$customer->has_calculated_shipping()) {
		
		$estimated_text = sprintf(
			' <small>' . __('(estimated for %s)', PR__CVR__PMPR) . '</small>',
			WC()->countries->estimated_for_prefix($taxable_address[0]) . WC()->countries->countries[$taxable_address[0]]
		);
	}
	if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
		foreach ($cart->get_tax_totals() as $code => $tax) {
			
			$key = sanitize_title($code);
			$items["tax-rate-{$key}"] = [
				'title' => $tax->label . $estimated_text,
				'value' => wp_kses_post($tax->formatted_amount),
			];
		}
	} else {
		
		$items['tax-total'] = [
			'title' => WC()->countries->tax_or_vat() . $estimated_text,
			'value' => 'wc_cart_totals_taxes_total_html',
		];
	}
	
}

$items['order-total'] = [
	'title' => __('Total Cart', PR__CVR__PMPR),
	'value' => 'wc_cart_totals_order_total_html',
];

?>

<div class="card border-gray-300">
	<div class="card-body">
		<ul class="list-group list-group-flush">
			
			<?php
			
			$count = count($items);
			$index = 0;
			foreach ($items as $key => $item) {
				
				if ($key === 'order-total') {
					
					do_action('woocommerce_cart_totals_before_order_total');
				} else if ($key === 'shipping-total') {
					
					do_action('woocommerce_cart_totals_before_shipping');
				}
				
				$title       = isset($item['title']) ? $item['title'] : '';
				$value       = $item['value'];
				$class       = "d-flex justify-content-between {$key}";
				$title_class = "font-14";
				if ($index == $count - 1) {
					
					$class       .= ' pb-3 pt-2 border-0 font-weight-bold font-19';
					$title_class = '';
				} else if ($index == $count - 2) {
					
					$class .= ' pb-2 font-17 border-gray-300 text-gray-700';
				} else {
					
					$class .= ' pb-2 font-17 border-0 text-gray-700';
				}
				if ($key == 'cart-discount' || substr($key, 0, 7) === 'coupon-') {
					
					$class .= ' text-danger';
				}
				?>
				
				<li class="<?php get_wc_total_card_list_item_class($class); ?>">
					<?php if ($title): ?>
						<div class="my-auto <?php echo $title_class ?>">
							<?php echo esc_html($title) ?>
						</div>
					<?php endif ?>
					<div data-title="<?php echo esc_attr($title)?>">
						<?php
						if (is_callable($value)) {
							
							$args = isset($item['args']) ? $item['args'] : [];
							call_user_func($value, ...$args);
						} else {
							
							echo $value;
						}
						?>
					</div>
				</li>
				
				<?php
				if ($key === 'order-total') {
					
					do_action('woocommerce_cart_totals_after_order_total');
				} elseif ($key === 'shipping-total') {
					
					do_action('woocommerce_cart_totals_after_shipping');
				}
				$index++;
			}
			?>
		</ul>
		<div class="wc-proceed-to-checkout">
			<?php
			if (is_cart()) {
				
				do_action( 'woocommerce_proceed_to_checkout' );
			} elseif (is_checkout()) {
			 
				$orderButtonText = __('Place order', PR__CVR__PMPR);
			?>
			<noscript>
                <?php printf( esc_html__( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', PR__CVR__PMPR ), '<em>', '</em>' ); ?>
			
				<br/><button type="submit" class="btn btn-danger button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e( 'Update totals', PR__CVR__PMPR ); ?>"><?php esc_html_e( 'Update totals', PR__CVR__PMPR ); ?></button>
			</noscript>
			
			<?php do_action( 'woocommerce_review_order_before_submit' ); ?>
			
			<?php echo apply_filters('woocommerce_order_button_html', '<button type="submit" form="checkout" class="btn btn-block font-weight-bold btn-danger button alt" name="woocommerce_checkout_place_order" id="place_order" data-value="' . esc_attr($orderButtonText) . '">' . esc_html($orderButtonText) . '</button>'); ?>
			
			<?php do_action( 'woocommerce_review_order_after_submit' ); ?>
			
			<?php
			}
			?>
		</div>
	</div>
</div>

