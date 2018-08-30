<?php

class Woocommerce_Dropdown_Cart extends WP_Widget {

	public function __construct() {
		parent::__construct(
	 		'woocommerce-dropdown-cart', // Base ID
			'Woocommerce Dropdown Cart', // Name
			array( 'description' => __( 'Woocommerce Dropdown Cart', 'qode' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		global $post;
		extract( $args );
		print $before_widget;
		global $woocommerce;

        $cart_icon = qode_options()->getOptionValue('woo_dropdown_cart_icon');
        switch ($cart_icon) {
            case 'font-elegant':
                $cart_icon_class = "icon_bag_alt";
                break;
            case 'font-linear':
                $cart_icon_class = "lnr lnr-cart";
                break;
            default:
				$cart_icon_class = "fa fa-shopping-cart";
                break;
        }


		?>
		<div class="shopping_cart_outer">
		<div class="shopping_cart_inner">
		<div class="shopping_cart_header">
            <?php if ( version_compare( WOOCOMMERCE_VERSION, '2.5' ) >= 0 ) { ?>
                <a class="header_cart" href="<?php echo esc_url(wc_get_cart_url()); ?>"><i class="<?php echo esc_html($cart_icon_class); ?>"></i></a>
            <?php } else { ?>
                <a class="header_cart" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>"><i class="<?php echo esc_html($cart_icon_class); ?>"></i></a>
            <?php } ?>
			<div class="shopping_cart_dropdown">
			<div class="shopping_cart_dropdown_inner">
				<?php
					$cart_is_empty = sizeof( $woocommerce->cart->get_cart() ) <= 0;
					$list_class = array( 'woocommerce-mini-cart', 'cart_list', 'product_list_widget' );
				?>
					<ul class="<?php echo implode(' ', $list_class); ?>">

						<?php if ( !$cart_is_empty ) : ?>

							<?php foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) :

								$_product = $cart_item['data'];

								// Only display if allowed
								if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
									continue;
								}
								
								if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) {
									$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? wc_get_price_excluding_tax( $_product ) : wc_get_price_including_tax( $_product );
									$product_price = apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key );
								} else {
									// Get price
									$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();
									$product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
								}
								?>

								<li class="woocommerce-mini-cart-item mini_cart_item">
                                    <?php
                                    echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                        '<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                        __( 'Remove this item', 'qode' ),
                                        esc_attr( $cart_item['product_id'] ),
                                        esc_attr( $cart_item_key ),
                                        esc_attr( $_product->get_sku() )
                                    ), $cart_item_key );
                                    ?>
									<a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">

										<?php print $_product->get_image(); ?>

										<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>

									</a>

									<?php print wc_get_formatted_cart_item_data($cart_item); ?>

									<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
								</li>

							<?php endforeach; ?>

						<?php else : ?>

							<li><?php _e( 'No products in the cart.', 'qode' ); ?></li>

						<?php endif; ?>

					</ul>
				</div>
			<?php if ( sizeof( $woocommerce->cart->get_cart() ) <= 0 ) : ?>
			
			<?php endif; ?>

                <a href="<?php echo wc_get_cart_url(); ?>" class="qbutton small view-cart"><?php _e( 'Cart', 'qode' ); ?></a>

                    <span class="total"><?php _e( 'Total', 'qode' ); ?>:<span><?php print $woocommerce->cart->get_cart_subtotal(); ?></span></span>


			<?php if ( sizeof( $woocommerce->cart->get_cart() ) <= 0 ) : ?>
			
			<?php endif; ?>
	</div>
</div>
		</div>
		</div>
	<?php
		print $after_widget;
	}

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();

		return $instance;
	}

}

add_action('widgets_init', function () {
 register_widget( "Woocommerce_Dropdown_Cart" );
});

?>
<?php
// WooCommerce plugin changed hooks in 3.0 version and because of that we have this condition
if ( version_compare( WOOCOMMERCE_VERSION, '3.0' ) >= 0 ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
}
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<span class="header_cart_span"><?php print $woocommerce->cart->cart_contents_count; ?></span>
	<?php
		$fragments['span.header_cart_span'] = ob_get_clean();
		return $fragments;	
}
?>