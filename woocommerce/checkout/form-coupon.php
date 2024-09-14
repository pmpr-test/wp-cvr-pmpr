<?php

defined('ABSPATH') || exit;

if (!wc_coupons_enabled()) {
	return;
}

?>
<div id="checkout_coupon">
<!--    TODO: checkout_coupon hide this form by js -->
<!--    <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display: block">-->
    <form class="woocommerce-form-coupon" method="post" style="display: block">
	    <?php wc_get_template('coupon.php'); ?>
    </form>
</div>
