<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<p style="font-size:1.625rem;"><?php echo esc_html( $heading ); ?></p>
			<div class="product__container-head">
				<div class="product__head-name"></div>
				<div class="product__head-name">Внутр. диаметр, мм</div>
				<div class="product__head-name">Внеш. диаметр, мм</div>
				<div class="product__head-name">Ширина, мм</div>
				<div class="product__head-name"></div>
			</div>
		<?php endif; ?>
		
		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );
					?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>
	<div class="custom__product-info"><p class="custom__product-info--title">Для получения точной информации о стоимости товаров, ассортименте и условиях поставки, пожалуйста, обратитесь к нашим менеджерам <a href="tel:88002004594" class="phone">8 (800) 200-45-94</a></p></div>
	<?php
endif;

wp_reset_postdata();
