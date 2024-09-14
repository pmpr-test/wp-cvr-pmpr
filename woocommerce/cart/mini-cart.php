<?php

defined('ABSPATH') || exit;

$showScroll = count(WC()->cart->get_cart()) > 3;
do_action('woocommerce_before_mini_cart'); ?>

<?php
if (!WC()->cart->is_empty()) : ?>

    <div class="<?php
	echo esc_attr($showScroll ? 'position-relative h-100 w-100 overflow-hidden mini-cart-list-holder' : '') ?>">
        <ul class="woocommerce-mini-cart cart_list product_list_widget list-group list-group-flush dropdown-list <?php
		echo esc_attr($args['list_class']); ?><?php
		echo esc_attr($showScroll ? ' left-n15px position-absolute top-0 bottom-0 left-0' : '') ?>">
			<?php
			do_action('woocommerce_before_mini_cart_contents');

			foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
				$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
				$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

				if ($cart_item['quantity'] > 0 && $_product instanceof WC_Product && $_product->exists()
					&& apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {

					$product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
					$thumbnail         = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image('small', ['class' => 'rounded']), $cart_item, $cart_item_key);
					$product_price     = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
					$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink() : '', $cart_item, $cart_item_key);
					?>
                    <li class="woocommerce-mini-cart-item list-group-item px-0 py-2 position-relative <?php
					echo esc_attr(apply_filters('woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key)); ?>">
                        <div class="position-absolute bottom-0 right-0">
							<?php do_action('woocommerce_remove_item_link', [
								'key'        => $cart_item_key,
								'class'      => 'remove_from_cart_button btn outline-0 px-2',
								'product'    => $_product,
								'icon_size'  => '3xs',
								'icon_color' => 'danger',
                            ]);
							?>
                        </div>
                        <div class="d-flex">
							<?php
							if (empty($product_permalink)) : ?>
								<?php
								echo $thumbnail; ?>
							<?php
							else : ?>
                                <a href="<?php
								echo esc_url($product_permalink); ?>" class="card-link">
									<?php
									echo $thumbnail; ?>
                                </a>
							<?php
							endif; ?>
                            <div class="ml-3 d-flex justify-content-between flex-column">
                                <div class="font-15 font-weight-bold">
									<?php
									if (empty($product_permalink)) : ?>
										<?php
										echo $product_name; ?>
									<?php
									else : ?>
                                        <a href="<?php
										echo esc_url($product_permalink); ?>" class="card-link">
											<?php
											echo $product_name; ?>
                                        </a>
									<?php
									endif; ?>
                                </div>
								<?php
								do_action('woocommerce_render_attributes', [
									'row'                  => false,
									'type'                 => 'cart',
									'limit'                => 1,
									'product'              => $_product,
									'show_key'             => false,
									'has_card'             => false,
									'icon_size'            => 'sm',
									'icon_color'           => 'primary',
									'each_class'           => 'font-13',
									'value_class'          => 'text-primary',
									'text_container_class' => 'lh-sm my-auto',
								]);

								echo apply_filters(
									'woocommerce_widget_cart_item_quantity',
									'<span class="quantity font-13">' . sprintf('%s <span class="text-muted">|</span> %s', sprintf(__('%s Number', PR__CVR__PMPR), $cart_item['quantity']), $product_price) . '</span>'
									, $cart_item, $cart_item_key
								);
								?>
                            </div>
                        </div>
                    </li>
					<?php
				}
			}

			do_action('woocommerce_mini_cart_contents');
			?>
        </ul>
    </div>
	<?php
	do_action('woocommerce_widget_shopping_cart_before_buttons'); ?>

    <div class="woocommerce-mini-cart__buttons buttons border-gray-300 border-top mx-n3">
        <div class="d-flex justify-content-between mx-3 my-2">
            <div class="woocommerce-mini-cart__total total mr-3 d-flex flex-column justify-content-between">
                <span><?php
	                esc_html_e('Total Cart', PR__CVR__PMPR); ?></span>
				<?php
				echo WC()->cart->get_cart_subtotal(); ?>
				<?php
				do_action('woocommerce_widget_shopping_cart_total'); ?>
            </div>
			<?php
			do_action('woocommerce_widget_shopping_cart_buttons_html'); ?>
        </div>
		<?php
		do_action('woocommerce_widget_shopping_cart_buttons'); ?>
    </div>

	<?php
	do_action('woocommerce_widget_shopping_cart_after_buttons'); ?>

<?php
else : ?>

    <p class="woocommerce-mini-cart__empty-message text-center my-2"><?php
		esc_html_e('No products in the cart.', PR__CVR__PMPR); ?></p>

<?php
endif; ?>

<?php
do_action('woocommerce_after_mini_cart'); ?>

