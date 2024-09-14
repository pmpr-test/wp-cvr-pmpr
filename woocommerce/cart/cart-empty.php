<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

function empty_card_content()
{
    $cartImage = get_cover_setting('components_woocommerce_cart_image_id', false);
    if ($cartImage) {

        $cartImage = wp_get_attachment_image($cartImage, 'medium', false, [
            'class' => 'img-fluid mx-auto'
        ]);
    }
    ?>
    <div class="card border-gray-300">
        <div class="card-body text-center">
            <?php if ($cartImage): ?>
                <?php echo $cartImage; ?>
            <?php endif; ?>
            <p class="mb-2 font-20 cart-empty"><?php echo esc_html(apply_filters('wc_empty_cart_message', __('Your cart is empty!', PR__CVR__PMPR))); ?></p>
            <div class="return-to-shop">
                <p class="text-muted mb-0 font-15"><?php echo esc_html(apply_filters('wc_empty_cart_sub_message', __('You can go to blow page to see more products', PR__CVR__PMPR))); ?></p>
                <a class="card-link button wc-backward font-15"
                   href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">
                    <?php echo esc_html(apply_filters('woocommerce_return_to_shop_text', __('Shop Page', PR__CVR__PMPR))); ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

?>

<div class="container">
    <?php
    wc_get_template('header.php');
    do_action('woocommerce_cart_is_empty');
    if (wc_get_page_id('shop') > 0) : ?>
        <div class="mb-6 mt-2">
            <?php if (is_user_logged_in()): ?>
                <main>
                    <?php empty_card_content(); ?>
                </main>
            <?php else: ?>
                <div class="row">
                    <main class="col-12 col-lg-8 mb-5 mb-lg-0">
                        <?php empty_card_content(); ?>
                    </main>
                    <aside class="col-12 col-lg-4">
                        <div class="card border-gray-300">
                            <div class="card-body">

                            </div>
                        </div>
                    </aside>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

</div>

