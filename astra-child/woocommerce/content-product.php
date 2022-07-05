<?php

if (! defined( 'ABSPATH' ) ) {
    exit;
}

global $product;

?>
<li class="product__container">
	<div class="product__table table__panel">
		<div class="product__table-img"><a href="<?= $product->get_permalink(); ?>"><?php woocommerce_template_loop_product_thumbnail(); ?></a></div>
		<div class="product__table-column">
			<div class="product__table-title"><a href="<?= $product->get_permalink(); ?>"><?= $product->get_title(); ?></a></div>
			<!-- <div class="product__table-brand">Производитель: 
				<?php 
				// $subheadingvalues = get_the_terms( $product->id, 'pa_brands'); 
				// 	foreach ( $subheadingvalues as $subheadingvalue ) { 
				// 		echo $subheadingvalue->name; }
				?>
			</div> -->
		</div>
	</div>
	<div class="product__table table__info">
		<div class="product__table-info">
			<?php
				$attrs = $product->get_attribute("pa_vnutr-diametr-d-mm");
				if (!empty($attrs)) {
					echo '<div class="data__title"><span class="data__title-name">Внутр. диаметр d, мм:</span> <span>' . $attrs . '</span></div>';
			   	}
			?>
		</div>
	</div>
	<div class="product__table table__info">
		<div class="product__table-info">
			<?php
				$attrs = $product->get_attribute("pa_vnesh-diametr-d-mm");
				echo '<div class="data__title"><span class="data__title-name">Внеш. диаметр D, мм:</span> <span>' . $attrs . '</span></div>';
			?>
		</div>
	</div>
	<div class="product__table table__info">
		<div class="product__table-info">
			<?php
				$attrs = $product->get_attribute("pa_shirina-b-mm");
					echo '<div class="data__title"><span class="data__title-name">Ширина B, мм:</span> <span>' . $attrs . '</span></div>';
			?>
		</div>
	</div>
	<div class="product__table table__info">
		<div class="product__table-in-stock">
			<?php
				if (get_post_meta(get_the_ID(), '_stock_status', true) == 'outofstock') {
					echo '<div class="outofstock">Нет в наличии</div>';
				  } else {
					echo '<div class="stock">В наличии</div>';
				  }
			?>
		</div>
	</div>
	<div class="product__table table__info">
		<div class="product__table-price"><?php woocommerce_template_loop_price(); ?></div>
	</div>
	<div class="product__table table__info">
		<div class="product__table-more"><a href="<?= $product->get_permalink(); ?>">Подробнее</a></div>
	</div>
</li>