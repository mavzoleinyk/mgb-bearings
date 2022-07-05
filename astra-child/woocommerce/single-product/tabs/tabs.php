<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : //print_r($product_tabs); ?>

	<div class="custom__product-info">
		<p class="custom__product-info--title"><b>Внимание!</b> Ниже указана цена для физических лиц! <a href="/my-account/">Зарегистрируйтесь</a> как юридическое лицо, чтобы покупать по оптовым ценам.</p>
	</div>
	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<p style="margin-bottom: 0px!important;">В нашей компании Вы можете купить <?php echo get_the_title(); ?> оптом и в розницу, а так же другие комплектующим, представленные в нашем каталоге.</p>
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
				<p>Заказать <?php echo get_the_title(); ?> и другие комплектующие для промышленности Вы можете по номеру телефона <a href="tel:+79117111112">7 (911) 711-11-12</a> или обратившись к нам на почту <a href="mailto:zakaz@mgb-bearings.ru">zakaz@mgb-bearings.ru</a>. Высокое качество продукции, ГОСТ и ISO, индивидуальные условия и быстрые сроки поставок.</p>
			</div>
		<?php endforeach; ?>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>
	<div class="product__form">
		<?php echo do_shortcode('[contact-form-7 id="4" title="Форма в товаре"]'); ?>
	</div>
	<div class="comment">
	<?php// comments_template(); ?> 
	</div>
	<div class="product__info">
	<p style="font-size:1.625rem;">Наши преимущества</p>
	<div class="our__advantages">
		<div class="our__advantages-item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/products-all-icon.svg" alt="">
			<p>Широкий ассортимент</p>
		</div>
		<div class="our__advantages-item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/premium-quality-icon.svg" alt="">
			<p>Качественный товар</p>
		</div>
		<div class="our__advantages-item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/product-price-icon.svg" alt="">
			<p>Персональные скидки</p>
		</div>
		<div class="our__advantages-item">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/product-delivery-icon.svg" alt="">
			<p>Оперативная курьерская доставка</p>
		</div>
	</div>
	<p style="font-size:1.625rem;">Процесс производства</p>
	<div class="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/nTiJYf1IM8g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	</div>

<?php endif; ?>
