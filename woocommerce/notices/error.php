<?php
/**
 * Show error messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/error.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if (!$notices) {
	return;
}

?>
<div class="woocommerce-error <?php get_wc_alert_class('error')?>">
    <?php if (count($notices) > 1): ?>
        <ul class="list-group-flush list-group-compact">
		    <?php foreach ($notices as $index => $notice) : ?>
                <li<?php echo wc_get_notice_data_attr($notice); ?> class="list-group-item border-0 bg-transparent px-0 py-2">
				    <?php echo wc_kses_notice($notice['notice']); ?>
                </li>
		    <?php endforeach; ?>
        </ul>
    <?php else: ?>
	    <?php echo wc_kses_notice($notices[0]['notice']); ?>
    <?php endif; ?>
	<?php get_wc_get_alert_close() ?>
</div>

