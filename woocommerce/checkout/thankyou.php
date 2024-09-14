<?php

defined( 'ABSPATH' ) || exit;
?>

<div class="container">
    <div class="woocommerce-order my-5">
		<?php if ($order) :?>
            <?php $isFailed = $order->has_status('failed'); ?>
            <?php do_action('woocommerce_before_thankyou', $order->get_id()); ?>
            <?php if ($isFailed) : ?>
                <div class="p-4 <?php get_wc_alert_class('warning');?>">
                    <h2 class="h5"><?php esc_html_e( 'Transaction failed', PR__CVR__PMPR ); ?></h2>
                    <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed">
                        <?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', PR__CVR__PMPR ); ?>
                    </p>
                    <hr class="my-4">

                    <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions text-left">
                        <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="btn btn-danger button pay"><?php esc_html_e( 'Pay', PR__CVR__PMPR ); ?></a>
                        <?php if (is_user_logged_in()) : ?>
                            <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="btn btn-gray-200 button pay"><?php esc_html_e( 'My account', PR__CVR__PMPR ); ?></a>
                        <?php endif; ?>
                    </p>
                </div>
            <?php else :?>

                <div class="<?php get_wc_alert_class('success');?>">
                    <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                        <?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', PR__CVR__PMPR), $order); ?>
                    </p>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-12 col-xl-8 mb-6 mb-xl-0">
	                <?php do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id()); ?>
	                <?php do_action('woocommerce_thankyou', $order->get_id()); ?>
                </div>
                <?php if (!$isFailed):?>
                    <div class="col-12 col-xl-4">
		
		                <?php
		                $extra = [];
		                if (is_user_logged_in()
			                && $order->get_billing_email()
			                && $order->get_user_id() === get_current_user_id() ) {
			
			                $extra['email'] = [
				                'title' => __('Email', PR__CVR__PMPR),
				                'value' => $order->get_billing_email(),
			                ];
		                }
		                $items = get_wc_order_details($order, $extra);
		                if ($order->get_customer_note()) {
		                 
			                $items['note'] = [
				                'title' => __('Note', PR__CVR__PMPR),
				                'value' => wp_kses_post(nl2br(wptexturize($order->get_customer_note()))),
			                ];
                        }
		                ?>

                        <div class="card border-gray-300 mb-6">
                            <div class="card-body">
                                <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details list-group list-group-compact list-group-flush">
                                    <?php foreach ($items as $key => $item): ?>
                                        <li class="list-group-item border-gray-200 px-0 py-2 d-flex justify-content-between woocommerce-order-overview__<?php echo $key?> <?php echo $key?>">
	                                        <?php echo esc_html($item['title']); ?>
                                            <strong><?php echo $item['value']; ?></strong>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
	                            <?php do_action('woocommerce_thankyou_after_overview_list', $order); ?>
                            </div>
                        </div>
<!--                        --><?php //if (is_user_logged_in() && $order->get_user_id() === get_current_user_id()): ?>
<!--                            <div class="card border-gray-300 mb-6">-->
<!--                                <div class="card-body">-->
<!--                                    --><?php //wc_get_template('order/order-details-customer.php', ['order' => $order]); ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //endif; ?>
                    </div>
                <?php endif;?>
            </div>
        <?php else : ?>
            <div class="<?php get_wc_alert_class('success');?>">
                <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                    <?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', PR__CVR__PMPR), null); ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>

