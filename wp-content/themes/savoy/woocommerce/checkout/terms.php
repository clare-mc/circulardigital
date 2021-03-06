<?php
/**
 * Checkout terms and conditions checkbox
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.1.1
 NM: Modified */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $nm_theme_options;

$terms_page_id = wc_get_page_id( 'terms' );

if ( $terms_page_id > 0 && apply_filters( 'woocommerce_checkout_show_terms', true ) ) :
    // Enable Visual Composer shortcodes
	if ( class_exists( 'WPBMap' ) && method_exists( 'WPBMap', 'addAllMappedShortcodes' ) ) {
        WPBMap::addAllMappedShortcodes();
    }

    $terms         = get_post( $terms_page_id );
    $terms_content = has_shortcode( $terms->post_content, 'woocommerce_checkout' ) ? '' : wc_format_content( $terms->post_content );
    
    $terms_container_class_attr = ( $nm_theme_options['checkout_tac_lightbox'] ) ? ' class="lightbox-enabled mfp-hide"' : '';
	
    if ( $terms_content ) {
		do_action( 'woocommerce_checkout_before_terms_and_conditions' );
		echo '<div id="nm-checkout-tac"' . $terms_container_class_attr . '><div class="woocommerce-terms-and-conditions" style="display: none; max-height: 200px; overflow: auto;">' . $terms_content . '</div></div>';
    }
	?>
	<p class="form-row terms wc-terms-and-conditions">
		<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
			<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); ?> id="terms" /> <span><?php printf( __( 'I&rsquo;ve read and accept the <a href="%s" target="_blank" class="woocommerce-terms-and-conditions-link">terms &amp; conditions</a>', 'woocommerce' ), esc_url( wc_get_page_permalink( 'terms' ) ) ); ?></span> <span class="required">*</span>
		</label>
		<input type="hidden" name="terms-field" value="1" />
	</p>
	<?php do_action( 'woocommerce_checkout_after_terms_and_conditions' ); ?>
<?php endif; ?>
