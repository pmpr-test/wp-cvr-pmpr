<?php
defined('ABSPATH') || exit;

?>
<div class="container">
	<?php
	wc_get_template('header.php');
	do_action('woocommerce_before_cart');
	?>
    <form class="woocommerce-cart-form" method="post" action="<?php echo esc_url(wc_get_cart_url()); ?>">
        <div class="row mb-6 mt-2 cart woocommerce-cart-form__contents">
            <main class="col-12 col-xl-8">
				<?php do_action('woocommerce_before_cart_table'); ?>
                <ul class="list-group list-group-flush">
					<?php do_action('woocommerce_before_cart_contents'); ?>
					<?php
					$count = count(WC()->cart->get_cart());
					foreach (WC()->cart->get_cart() as $key => $item) {

						$count--;
						$_product   = apply_filters('woocommerce_cart_item_product', $item['data'], $item, $key);
						$product_id = apply_filters('woocommerce_cart_item_product_id', $item['product_id'], $item, $key);
						if ($_product instanceof WC_Product && $_product->exists() && $item['quantity'] > 0
							&& apply_filters('woocommerce_cart_item_visible', true, $item, $key)) {

							$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink() : '', $item, $key);
							?>
                            <li class="list-group-item bg-transparent border-0 p-0 <?php echo esc_attr($count > 0 ? 'mb-6' : 'mb-xl-2') ?> <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $item, $key)); ?>">
                                <div class="card border-gray-300">
                                    <div class="card-body">
                                        <div class="d-flex flex-column flex-md-row">
                                            <div class="mr-md-5 d-flex flex-md-column justify-content-between justify-content-md-start">
												<?php
												$thumbnail = $_product->get_image('thumbnail', [
													'class' => 'product-thumbnail rounded mb-4',
												]);
												$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $thumbnail, $item, $key);

												if (!$product_permalink) {
													echo $thumbnail; // PHPCS: XSS ok.
												} else {
													printf('<a href="%s" class="card-link">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
												}
												?>
                                                <div class="w-30 w-md-100">
                                                    <div class="product-quantity mb-4"
                                                         data-title="<?php esc_attr_e('Quantity', PR__CVR__PMPR); ?>">
														<?php
														if ($_product->is_sold_individually()) {

															$product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $key);
														} else {
															$product_quantity = woocommerce_quantity_input(
																[
																	'max_value'    => $_product->get_max_purchase_quantity(),
																	'min_value'    => '0',
																	'input_name'   => "cart[{$key}][qty]",
																	'input_value'  => $item['quantity'],
																	'product_name' => $_product->get_name(),
																],
																$_product,
																false
															);
														}

														echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $key, $item); // PHPCS: XSS ok.
														?>
                                                    </div>
													<?php do_action('woocommerce_remove_item_link', [
														'key'     => $key,
														'title'   => __('Remove', PR__CVR__PMPR),
														'class'   => 'btn btn-danger btn-block',
														'product' => $_product,
													]); ?>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column w-100">
                                                <div class="product-name font-22 mb-3"
                                                     data-title="<?php esc_attr_e('Product', PR__CVR__PMPR); ?>">
													<?php
													echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $item, $key) . '&nbsp;');

													do_action('woocommerce_after_cart_item_name', $item, $key);

													// Meta data.
													echo wc_get_formatted_cart_item_data($item); // PHPCS: XSS ok.

													// Backorder notification.
													if ($_product->backorders_require_notification() && $_product->is_on_backorder($item['quantity'])) {
														echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', PR__CVR__PMPR) . '</p>', $product_id));
													}
													?>
                                                </div>
                                                <div class="row h-100">
                                                    <div class="col-12 col-lg-8 mb-2 mb-lg-0">
                                                        <div class="product-attributes"
                                                             data-title="<?php esc_attr_e('Attributes', PR__CVR__PMPR); ?>">
															<?php
															do_action('woocommerce_render_attributes', [
																'type'        => 'cart',
																'limit'       => 8,
																'product'     => $_product,
																'show_on'     => [
																	'xs' => 2,
																	'sm' => 4,
																	'md' => 6,
																],
																'show_key'    => false,
																'has_card'    => false,
																'icon_size'   => 'xs',
																'icon_color'  => 'gray-500',
																'each_class'  => 'col-12 col-sm-6 col-md-4 col-lg-6 py-1 font-14',
																'value_class' => 'text-gray-600',
															]);
															?>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4 d-flex flex-column justify-content-end">
                                                        <div class="product-price w-100"
                                                             data-title="<?php esc_attr_e('Price', PR__CVR__PMPR); ?>">
															<?php
															$qty     = (int)$item['quantity'];
															$sale    = (int)$_product->get_sale_price('');
															$price   = (int)$_product->get_price('');
															$prices  = [];
															$regular = (int)$_product->get_regular_price('');

															if ($price !== $regular) {

																$total                   = $regular * $qty;
																$prices['regular_price'] = [
																	'title' => __('Regular Price', PR__CVR__PMPR),
																	'value' => "<del>" . wc_price($total) . "</del>",
																];

																$discount           = ($regular - $sale) * $qty;
																$percentage         = pmpr_get_discount_percentage($_product);
																$prices['discount'] = [
																	'title' => sprintf("%s <small>(%s)</small>", __('Discount', PR__CVR__PMPR), $percentage),
																	'value' => wc_price($discount),
																];

																$prices['expire'] = [
																	'title' => __('Discount Expiration', PR__CVR__PMPR),
																	'value' => apply_filters('woocommerce_product_discount_expire_html', '', [
																		'product' => $_product,
																		'class'   => 'font-13',
																	]),
																];

																foreach ($prices as $k => $price) {
																	if (isset($price['value']) && $price['value']) {
																		?>
                                                                        <div data-key="<?php echo $k ?>"
                                                                             class="d-flex justify-content-between<?php echo(in_array($k, ['discount', 'expire']) ? ' text-danger' : '') ?>">
                                                                            <small class="my-auto"><?php echo $price['title'] ?></small>
                                                                            <span><?php echo $price['value'] ?></span>
                                                                        </div>
																		<?php
																	}
																}
																echo '<hr class="my-2 bg-gray-200">';
															}
															?>
                                                            <div class="text-right font-weight-bold font-18 lh-xs mt-4">
																<?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $qty), $item, $key) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
							<?php
						}
					}
					?>
					<?php do_action('woocommerce_after_cart_contents'); ?>
                </ul>
				<?php do_action('woocommerce_after_cart_table'); ?>
				<?php
				get_wc_back_button(get_permalink(wc_get_page_id('shop')), __('Shop', PR__CVR__PMPR), [
					'class' => 'd-none d-flex',
				]);
				?>
            </main>
            <aside class="col-12 col-xl-4 my-5 my-xl-0">

				<?php if (wc_coupons_enabled()) { ?>
                    <div class="coupon">

						<?php wc_get_template('coupon.php'); ?>
						<?php do_action('woocommerce_cart_coupon'); ?>
                    </div>
				<?php } ?>
                <div class="cart-collaterals">
					<?php
					/**
					 * Cart collaterals hook.
					 *
					 * @hooked woocommerce_cross_sell_display
					 * @hooked woocommerce_cart_totals - 10
					 */
					do_action('woocommerce_cart_collaterals');
					?>
                </div>
                <div class="mb-5">
                    <button type="submit" class="button btn btn-danger d-none" name="update_cart"
                            value="<?php esc_attr_e('Update cart', PR__CVR__PMPR); ?>"><?php esc_html_e('Update cart', PR__CVR__PMPR); ?></button>

					<?php do_action('woocommerce_cart_actions'); ?>

					<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                </div>
            </aside>
        </div>
    </form>
</div>

<?php do_action('woocommerce_after_cart'); ?>

