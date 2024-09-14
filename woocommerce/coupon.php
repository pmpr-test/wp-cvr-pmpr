<?php

defined( 'ABSPATH' ) || exit;

$page_name = is_cart() ? 'cart' : 'checkout';
?>

<div class="card border-gray-300 mb-6">
    <div class="card-body">
	    <?php do_action('woocommerce_before_coupon'); ?>
        <span><?php echo apply_filters("woocommerce_{$page_name}_coupon_message", esc_html__('Coupon', PR__CVR__PMPR)); ?></span>
        <div class="input-group mb-2">
            <input type="text" name="coupon_code" class="input-text form-control" id="coupon_code" value="" />
            <div class="input-group-append">
                <button type="submit" class="button btn btn-outline-primary" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', PR__CVR__PMPR ); ?>">
				    <?php esc_html_e( 'Apply coupon', PR__CVR__PMPR ); ?>
                </button>
            </div>
        </div>
        <p class="mb-0 font-13 text-muted"><?php esc_html_e('If you have a coupon code, please apply it above.', PR__CVR__PMPR); ?></p>
	    <?php do_action('woocommerce_after_coupon'); ?>
    </div>
</div>

