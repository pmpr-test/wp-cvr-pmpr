<?php

if (!defined('ABSPATH')) {
	exit;
}

?>
<?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>
    <div id="order_review" class="woocommerce-checkout-review-order row mb-6 mt-2">
        <main class="col-12 col-xl-8 mb-6 mb-xl-0">
            <form id="checkout" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <?php do_action( 'woocommerce_checkout_order_review' ); ?>

                <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                
                <?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>
            </form>
            <?php
            get_wc_back_button(wc_get_cart_url(), __('Cart', PR__CVR__PMPR), [
                'class' => 'd-none d-xl-flex',
            ]);
            ?>
        </main>
        <aside class="col-12 col-xl-4 place-order">
            <?php do_action('woocommerce_before_checkout_aside'); ?>
            <?php wc_get_template('total-card.php'); ?>
        </aside>
    </div>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

