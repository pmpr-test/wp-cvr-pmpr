<?php

defined( 'ABSPATH' ) || exit;


?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<h2 class="sr-only"><?php esc_html_e('Cart totals', PR__CVR__PMPR); ?></h2>

	<?php wc_get_template('total-card.php'); ?>

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>

