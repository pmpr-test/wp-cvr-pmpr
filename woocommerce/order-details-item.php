<?php

defined('ABSPATH') || exit;

if (!isset($product, $name, $quantity, $total)) {

    return;
}
$product = wc_get_product($product);
if (!$product instanceof WC_Product) {

    return;
}
?>
<li class="list-group-item bg-transparent border-gray-200 px-0 py-3<?php echo esc_attr(isset($item_class) ? " {$item_class}" : '') ?>">
    <div class="d-flex">
        <?php echo $product->get_image('small', ['class' => 'rounded']) ?>
        <div class="ml-5 d-flex justify-content-between w-100">
            <div class="d-flex flex-column justify-content-between">
                <?php if (isset($permalink)): ?>
                    <a href="<?php echo esc_url($permalink); ?>" class="text-decoration-none"><?php echo $name; ?></a>
                <?php else: ?>
                    <div class="font-17 product-name"><?php echo $name; ?></div>
                <?php endif; ?>

                <?php do_action('woocommerce_render_variation', ['product' => $product]); ?>
                <span class="quantity mt-auto text-gray-700 font-15">
                    <?php echo $quantity ?>
                </span>
            </div>
            <div class="product-total text-center d-flex flex-column justify-content-center">
                <small class="text-muted"><?php esc_html_e('Total Sale Price', PR__CVR__PMPR) ?></small>
                <?php echo $total; ?>
            </div>
        </div>
    </div>
    <?php
    if (isset($after) && is_single($after)) {

        echo $after;
    }

    if (!isset($item)) {

        $item = null;
    }
    do_action('woocommerce_after_order_details_item', $product, $item);
    ?>
</li>

