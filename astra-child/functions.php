<?php
/**
 * MGB-Bearings Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MGB-Bearings
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_MGB_BEARINGS_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'mgb-bearings-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_MGB_BEARINGS_VERSION, 'all' );
	if ( is_page_template( 'home-page.php' ) ) {
   
	wp_enqueue_style( 'mgb-bearings-theme-home-css', get_stylesheet_directory_uri() . '/assets/style.css', array('mgb-bearings-theme-css'), CHILD_THEME_MGB_BEARINGS_VERSION, 'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

add_filter('wp_get_attachment_image_attributes', 'change_attachement_image_attributes', 20, 2);

function change_attachement_image_attributes( $attr, $attachment ){
    // Get post parent
    $parent = get_post_field( 'post_parent', $attachment);

    // Get post type to check if it's product
    $type = get_post_field( 'post_type', $parent);
    if( $type != 'product' ){
        return $attr;
    }

    /// Get title
    $title = get_post_field( 'post_title', $parent);

    $attr['alt'] = $title;
    $attr['title'] = $title;

    return $attr;
}

// add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
// function woo_new_product_tab( $tabs ) {
	
// 	// Adds the new tab
	
// 	$tabs['test_tab'] = array(
// 		'title' 	=> __( 'Отзывы', 'woocommerce' ),
// 		'priority' 	=> 50,
// 		'callback' 	=> 'woo_new_product_tab_content'
// 	);

// 	return $tabs;

// }
// function woo_new_product_tab_content() {

// 	$args = array(
// 		'post_id' => get_queried_object_id(),
// 		'number'  => 50,
// 		'orderby' => 'comment_date',
// 		'order'   => 'DESC',
// 		'type'    => '', // только комментарии, без пингов и т.д...
// 	);
	
// 	if( $comments = get_comments( $args ) ){
// 		echo '<ul>';
// 		foreach( $comments as $comment ){
// 			$comm_link = get_comment_link( $comment->comment_ID ); // может быть тяжелый запрос ...
// 			$comm_short_txt = mb_substr( strip_tags( $comment->comment_content ), 0, 50 ) .'...';
	
// 			echo '<li>'. $comment->comment_author .': <a rel="nofollow" href="'. $comm_link .'">'. $comm_short_txt .'</a></li>';
// 		}
// 		echo '</ul>';
// 	}	
// }
// remove_action('template_redirect', 'wp_old_slug_redirect');


// add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
// function woo_reorder_tabs( $tabs ) {

// 	$tabs['reviews']['priority'] = 5;			// Reviews first
// 	$tabs['description']['priority'] = 10;			// Description second
// 	$tabs['additional_information']['priority'] = 15;	// Additional information third

// 	return $tabs;
// }

//fix for cookie error while login.
setcookie(TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN);
if ( SITECOOKIEPATH != COOKIEPATH ) 
setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);


function my_scripts_method() {
	if ( is_page_template( 'home-page.php' ) ) {
	wp_enqueue_script( 'custom-vendor-script', get_stylesheet_directory_uri() . '/assets/js/vendor-script.js', array('jquery') );
	}
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/assets/js/custom-script.js', array('jquery') );
	
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );



add_action( 'wp', 'astra_remove_header' );

function astra_remove_header() {
    remove_action( 'astra_masthead', 'astra_masthead_primary_template' );
}


add_action( 'astra_masthead', 'add_content_before_header' );
function add_content_before_header() { ?>
      <div class="ast-below-header-wrap">
		  <div class="ast-container">
			<div class="header__container">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="header__main-info">
					<div class="header__main-info--col header__main-info--one">
						<div class="header__main-info--tel">
							<a href="tel:88002004594">8 (800) <b>200-45-94</b></a>
						</div>
						<div class="header__main-info--tel">
							<a href="tel:88126794594">8 (812) <b>679-45-94</b></b></a>
						</div>
						<!-- <div class="header__main-info--map">
							<a href="/kontakty/">схема проезда</a>
						</div> -->
					</div>
					<div class="header__main-info--col header__main-info--two">
					  <a href="tel:7911-711-11-12">7 (911) <b>711-11-12</b></a>
						<a href="mailto:zakaz@mgb-bearings.ru">zakaz@mgb-bearings.ru</a>
						
						
					</div>
					<div class="header__main-info--col header__main-info--three">
						<div class="messenger__link">
							<a href="whatsapp://send?phone=+79117111112" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/whatsapp.svg"></a>
							<a href="viber://chat?number=%2B79117111112" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/viber.svg"></a>
							<a href="https://t.me/bearings178" target="_blank" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/telegram.svg"></a>
						</div>
						
					</div>
					<div class="header__main-info--col header__main-info--four">
					     <div class="header__callback">
								<a href="#" class="flex popmake-364426 popmake-osnovnaya-vsplyvayushhaya-forma">
									<img src="/wp-content/themes/astra-child/assets/image/tel-icon.svg" alt="">
									<span>Обратный звонок</span>
								</a>
							</div>
						
						
					</div>
				</div>
				<div class="mini__cart">
					<div class="mini__cart-info">
					<?php
						global $woocommerce; ?>
						<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini__cart--btn">
							<div class="mini__cart--counter">
								<div class="mini__cart--label">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/shopping-cart.svg" alt="">
									<div class="mini__cart--count">
										<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>
									</div>
								</div>
								<div class="mini__cart--total">
									<?php echo WC()->cart->get_cart_total(); ?>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		  </div>
	  </div>
<?php }


// Добавляем шорткод шапки для мобилы
add_shortcode('mob-menu-main', 'mob_menu_main');

function mob_menu_main(){ ?>
    <div class="ast-below-header-wrap">
		  <div class="ast-container">
			<div class="header__container">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="header__main-info">
					<div class="header__main-info--col header__main-info--one">
						<div class="header__main-info--tel">
							<a href="tel:88002004594">8 (800) <b>200-45-94</b></a>
						</div>
						<div class="header__main-info--tel">
							<a href="tel:88126794594">8 (812) <b>679-45-94</b></b></a>
						</div>
						<!-- <div class="header__main-info--map">
							<a href="/kontakty/">схема проезда</a>
						</div> -->
					</div>
					<div class="header__main-info--col header__main-info--two">
					  <a href="tel:7911-711-11-12">7 (911) <b>711-11-12</b></a>
						<a href="mailto:zakaz@mgb-bearings.ru">zakaz@mgb-bearings.ru</a>
						
						
					</div>
					<div class="header__main-info--col header__main-info--three">
						<div class="messenger__link">
							<a href="whatsapp://send?phone=+79117111112" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/whatsapp.svg"></a>
							<a href="viber://chat?number=%2B79117111112" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/viber.svg"></a>
							<a href="https://t.me/bearings178" target="_blank" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/telegram.svg"></a>
						</div>
						
					</div>
					<div class="header__main-info--col header__main-info--four">
					     <div class="header__callback">
								<a href="#" class="flex popmake-364426 popmake-osnovnaya-vsplyvayushhaya-forma">
									<img src="/wp-content/themes/astra-child/assets/image/tel-icon.svg" alt="">
									<span>Обратный звонок</span>
								</a>
							</div>
						
						
					</div>
				</div>
				<div class="mini__cart">
					<div class="mini__cart-info">
					<?php
						global $woocommerce; ?>
						<a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="mini__cart--btn">
							<div class="mini__cart--counter">
								<div class="mini__cart--label">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/shopping-cart.svg" alt="">
									<div class="mini__cart--count">
										<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>
									</div>
								</div>
								<div class="mini__cart--total">
									<?php echo WC()->cart->get_cart_total(); ?>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		  </div>
	  </div>
<?php }

add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
		<div class="mini__cart--counter">
			<div class="mini__cart--label">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/shopping-cart.svg" alt="">
				<div class="mini__cart--count">
					<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>
				</div>
			</div>
			<div class="mini__cart--total">
				<?php echo WC()->cart->get_cart_total(); ?>
			</div>
		</div>
    <?php
	$fragments['.mini__cart--counter'] = ob_get_clean();
    return $fragments;
}

function woocommerce_header_add_to_cart_fragment( $fragments ) { 
	ob_start(); 
	?>
	<a class="cart-contents" href="/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">  
	<span class="cart-ico"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/shopping-cart.svg" alt=""></span>  
	<span class="cart-txt">товаров: <strong><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></strong><br> 
	на сумму: <strong><?php echo WC()->cart->get_cart_total(); ?></strong></span>
	</a>
	<?php 
	$fragments['a.cart-contents'] = ob_get_clean(); 
	return $fragments;
}

//Вывод кратких данных из корзины
if ( ! function_exists( 'cart_link' ) ) {
	function cart_link() { 
		?><a class="cart-contents" href="/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
		<span class="cart-ico"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/shopping-cart.svg" alt=""></span>
		<span class="cart-txt"><span class="cart-txt-total"><?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span><span class="cart-txt-summ"><?php echo WC()->cart->get_cart_total(); ?></span></span>
		</a>
		<?php 
	}
}

// Если цена равна 0
// function my_price_replace($price, $product) {
// 	if ($price == 0)  return __( 'Цена по запросу' );
// 	return $price;
// }
// add_filter( 'woocommerce_get_price_html', 'my_price_replace', 1, 2 );

// Отключаем возможность покупки товара если цена 0
// function make_not_purchasable( $purchasable, $product ){
// 	if( $product->get_price() == 0 )
// 		$purchasable = false;
// 	return $purchasable;
// }
// add_filter( 'woocommerce_is_purchasable', 'make_not_purchasable', 10, 2 );


// Удаляем вкладку загрузки из личного кабинета

add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
function misha_remove_my_account_links( $menu_links ){
 
	unset( $menu_links['downloads'] ); // Disable Downloads Contributions
	unset( $menu_links['contributions'] );
 
	return $menu_links;
 
}

// Переименование кладки Заказы

add_filter ( 'woocommerce_account_menu_items', 'misha_rename_downloads' );
 
function misha_rename_downloads( $menu_links ){
	$menu_links['orders'] = 'Заказы';
	return $menu_links;
}

// Math Rank костыл с офф сайта плагина для решения обрыва description в товаре

add_filter( 'rank_math/frontend/description', function( $description ) {
    if ( is_singular( 'product' ) ) {
        global $post;
        $description = RankMath\Post::get_meta( 'description', $post->ID );
        if ( '' !== $description ) {
            return $description;
        }

        $value = RankMath\Helper::get_settings( 'titles.pt_product_description' );
        $product = wc_get_product( $post->ID );
        $value = str_replace( '%title%', $product->get_title(), $value );
        $value = str_replace( '%wc_shortdesc%', $product->get_short_description(), $value );
        return '' !== $value ? RankMath\Helper::replace_vars( $value, $product ) : '';
    }

    return $description;
});

remove_action( 'wp_head',   'wp_print_head_scripts',    9 );






	function switch_on_comments_automatically(){
		global $wpdb;
		$wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET comment_status = 'open'")); 
	}
//switch_on_comments_automatically();

add_filter('woocommerce_currency_symbol', 'misha_symbol_to_bukvi', 9999, 2);
 
function misha_symbol_to_bukvi( $valyuta_symbol, $valyuta_code ) {
	if( $valyuta_code === 'RUB' ) {
		return ' р.';
	}
	return $valyuta_symbol;
}




function loading_enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'loading_enable_svg_upload', 10, 1 );

add_filter( 'wp_nav_menu_items', 'loading_prefix_add_menu_item', 10, 2 );
/**
 * Add Menu Item to end of menu
 */

 function get_header_menu_info(){
	 ob_start();
	 ?>
              <div class="header__container header__container_mobile">
              <div class="header__main-info">
					<div class="header__main-info--col header__main-info--one">
						<div class="header__main-info--tel">
							<a href="tel:88002004594">8 (800) <b>200-45-94</b></a>
						</div>
						<div class="header__main-info--tel">
							<a href="tel:88126794594">8 (812) <b>679-45-94</b></b></a>
						</div>
						<!-- <div class="header__main-info--map">
							<a href="/kontakty/">схема проезда</a>
						</div> -->
					</div>
					<div class="header__main-info--col header__main-info--two">
					  <a href="tel:7911-711-11-12">7 (911) <b>711-11-12</b></a>
						<a href="mailto:zakaz@mgb-bearings.ru">zakaz@mgb-bearings.ru</a>
						
						
					</div>
					<div class="header__main-info--col header__main-info--three">
						<div class="messenger__link">
							<a href="whatsapp://send?phone=+79117111112" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/whatsapp.svg"></a>
							<a href="viber://chat?number=%2B79117111112" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/viber.svg"></a>
							<a href="https://t.me/bearings178" target="_blank" class="messenger__link-item"><img src="/wp-content/themes/astra-child/assets/image/telegram.svg"></a>
						</div>
						
					</div>
					<div class="header__main-info--col header__main-info--four">
					     <div class="header__callback">
								<a href="#" class="flex popmake-364426 popmake-osnovnaya-vsplyvayushhaya-forma">
									<img src="/wp-content/themes/astra-child/assets/image/tel-icon.svg" alt="">
									<span>Обратный звонок</span>
								</a>
							</div>
						
						
					</div>
				</div>
				</div>



    <?php
	 return ob_get_clean();
	 
 }
function loading_prefix_add_menu_item ( $items, $args ) {

	
   if( $args->menu_id =='menu-2-c228bf2'){
	   $menu_info = get_header_menu_info(); 
       $nitems =  '<li class="header_mobile_data">'.$menu_info.'</li>';
      } 
       return $nitems.$items;
}