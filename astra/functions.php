<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '2.4.5' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to latest version.
 */
define( 'ASTRA_EXT_MIN_VER', '2.5.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';
/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

// BSF Analytics library.
require_once ASTRA_THEME_DIR . 'admin/bsf-analytics/class-bsf-analytics.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';


/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';


/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-filesystem.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';
remove_action('template_redirect', 'wp_old_slug_redirect');

// Узнаем что рубим
function wpschool_show_script_style_ids() {
    global $wp_scripts, $wp_styles;
    echo "\n" .'<!--'. "\n\n";
    echo 'SCRIPT IDs:'. "\n";
    foreach( $wp_scripts->queue as $handle ) echo $handle . "\n";
    echo "\n" .'STYLE IDs:'. "\n";
    foreach( $wp_styles->queue as $handle ) echo $handle . "\n";
    echo "\n" .'-->'. "\n\n";
}
add_action( 'wp_print_scripts', 'wpschool_show_script_style_ids' );

// function wpschool_disable_scripts_styles() {
//     wp_dequeue_style( 'contact-form-7' );
// 	wp_dequeue_style( 'astra-google-fonts' );
// 	wp_dequeue_style( 'wp-block-library' );
// 	wp_dequeue_style( 'dashicons' );
// 	wp_dequeue_style( 'astra-theme-css-inline' );
// 	wp_dequeue_style( 'elementor-icons' );
// 	wp_dequeue_style( 'elementor-common' );
// 	wp_dequeue_style( 'wc-block-vendors-style' );
// 	wp_dequeue_style( 'wc-block-style' );
// 	wp_dequeue_style( 'astra-contact-form-7' );
// 	wp_dequeue_style( 'menu-image' );
// 	// wp_dequeue_style( 'woocommerce-layout' );
// 	// wp_dequeue_style( 'woocommerce-smallscreen' );
// 	// wp_dequeue_style( 'woocommerce-general' );
// 	// wp_dequeue_style( 'woocommerce-general-inline' );
// 	wp_dequeue_style( 'rank-math' );
// 	// wp_dequeue_style( 'astra-addon-css' );
// 	wp_dequeue_style( 'astra-addon-css-inline' );
// 	wp_dequeue_style( 'elementor-animations' );
// 	wp_dequeue_style( 'elementor-frontend-legacy' );
// 	wp_dequeue_style( 'elementor-frontend' );
// 	// wp_dequeue_style( 'elementor-post-364445' );
// 	wp_dequeue_style( 'elementor-pro' );
// 	wp_dequeue_style( 'elementor-global' );
// 	// wp_dequeue_style( 'popup-maker-site' );
// 	// wp_dequeue_style( 'mgb-bearings-theme-css' );
// 	wp_dequeue_style( 'google-fonts-1' );
// 	wp_dequeue_script( 'astra-flexibility' );
// 	wp_dequeue_script( 'astra-theme-js' );
// 	// wp_dequeue_script( 'contact-form-7' );
// 	wp_dequeue_script( 'wc-add-to-cart' );
// 	wp_dequeue_script( 'zoom' );
// 	wp_dequeue_script( 'flexslider' );
// 	wp_dequeue_script( 'wc-cart-fragments' );
// 	wp_dequeue_script( 'rank-math' );
// 	wp_dequeue_script( 'astra-addon-js' );
// 	wp_dequeue_script( 'astra-single-product-ajax-cart' );
// 	wp_dequeue_script( 'elementor-common' );
// 	wp_dequeue_script( 'elementor-pro-app' );
// 	wp_dequeue_script( 'elementor-app-loader' );
// }
// add_action( 'wp_enqueue_scripts', 'wpschool_disable_scripts_styles', 99 );
