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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 NM: Modified */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $messages ) {
	return;
}

$nm_shop_notice_single_class = ( count( $messages ) > 1 ) ? ' nm-shop-notice-multiple' : '';

?>

<ul class="nm-shop-notice woocommerce-error<?php echo $nm_shop_notice_single_class; ?>" role="alert">
    <?php foreach ( $messages as $message ) : ?>
    <li><span><i class="nm-font nm-font-close"></i><?php echo wp_kses_post( $message ); ?></span></li>
    <?php endforeach; ?>
</ul>