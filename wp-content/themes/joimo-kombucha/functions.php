<?php

/**
 * Joimo Kombucha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Joimo_Kombucha
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('joimo_kombucha_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function joimo_kombucha_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Joimo Kombucha, use a find and replace
		 * to change 'joimo-kombucha' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('joimo-kombucha', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'joimo-kombucha'),
				'menu-2' => esc_html__('Shop Support', 'joimo-kombucha'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'joimo_kombucha_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_theme_support('woocommerce');
		add_theme_support("wc-product-gallery-zoom");
		add_theme_support("wc-product-gallery-lightbox");
		add_theme_support("wc-product-gallery-slider");
	}
endif;
add_action('after_setup_theme', 'joimo_kombucha_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function joimo_kombucha_content_width()
{
	$GLOBALS['content_width'] = apply_filters('joimo_kombucha_content_width', 640);
}
add_action('after_setup_theme', 'joimo_kombucha_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function joimo_kombucha_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Mobile Search Menu', 'joimo-kombucha'),
			'id'            => 'mobile-search-menu-1',
			'description'   => esc_html__('Use this widget to Mobile Search Menu.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);	
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'joimo-kombucha'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Menu 1', 'joimo-kombucha'),
			'id'            => 'footer-menu-1',
			'description'   => esc_html__('Use this widget to add a menu to column 1 in the footer.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Menu 2', 'joimo-kombucha'),
			'id'            => 'footer-menu-2',
			'description'   => esc_html__('Use this widget to add a menu to column 2 in the footer.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Menu 3', 'joimo-kombucha'),
			'id'            => 'footer-menu-3',
			'description'   => esc_html__('Use this widget to add a menu to column 3 in the footer.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Social & Subscribe', 'joimo-kombucha'),
			'id'            => 'footer-social-subscribe',
			'description'   => esc_html__('Use this widget to add the social and email signup in the 12th column in the footer.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget footer-widget social-signup %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer Social & Subscribe V2', 'joimo-kombucha'),
			'id'            => 'footer-social-subscribe-v2',
			'description'   => esc_html__('Use this widget to add the social and email signup in the 12th column in the footer.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget footer-widget social-signup %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);	    
	register_sidebar(
		array(
			'name'          => esc_html__('Contact Page Sidebar', 'joimo-kombucha'),
			'id'            => 'contact',
			'description'   => esc_html__('Use this widget to add content to the sidebar on the Contact page.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget contact-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title contact-sb-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Shop and Single Product Sidebar', 'joimo-kombucha'),
			'id'            => 'shop-sb',
			'description'   => esc_html__('Use this widget to add content to the sidebar on the Shop and Single Product pages.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget shop-sb-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title shop-sb-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Shop Product Filter', 'joimo-kombucha'),
			'id'            => 'shop-pro-filter',
			'description'   => esc_html__('Use this widget to add Product Filter on Shop pages.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget shop-sb-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title main-shop-sb-title">',
			'after_title'   => '</h3>',
		)
	);      
	register_sidebar(
		array(
			'name'          => esc_html__('About Tea Sidebar', 'joimo-kombucha'),
			'id'            => 'about-tea',
			'description'   => esc_html__('Use this widget to add content to the sidebar on the About Tea page. Use "about-tea" as the value for the "CustomSidebar" custom field.', 'joimo-kombucha'),
			'before_widget' => '<section id="%1$s" class="widget about-tea-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title about-tea-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init', 'joimo_kombucha_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function joimo_kombucha_scripts()
{
	wp_enqueue_style('joimo-kombucha-style', get_stylesheet_uri(), array(), '1.13.9');
	wp_style_add_data('joimo-kombucha-style', 'rtl', 'replace');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.5.2', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/all.css', false, '5.14.0', 'all');
	wp_enqueue_style('joimo-fonts', get_template_directory_uri() . '/css/joimo-fonts.css', false, '1.0', 'all');
	wp_enqueue_style('dashicons');
	if (is_front_page()) {
		wp_enqueue_style( 'styles-home-combucha', get_template_directory_uri() . '/css/home-styles-combucha.css', array());
	}

	wp_enqueue_script('joimo-kombucha-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('bootstrap-popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '1.16.1', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
	wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/js/all.js', array('jquery'), '5.14.0', true);
	wp_enqueue_script('header-color', get_template_directory_uri() . '/js/header-fixed-color.js', array('jquery'), '1.0', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'joimo_kombucha_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Replace the price range with "From $X.XX
 */
function wc_ninja_custom_variable_price($price, $product)
{
	// Main Price
	$prices = array($product->get_variation_price('min', true), $product->get_variation_price('max', true));
	$price = $prices[0] !== $prices[1] ? sprintf(__('From: %1$s', 'woocommerce'), wc_price($prices[0])) : wc_price($prices[0]);

	// Sale Price
	$prices = array($product->get_variation_regular_price('min', true), $product->get_variation_regular_price('max', true));
	sort($prices);
	$saleprice = $prices[0] !== $prices[1] ? sprintf(__('From: %1$s', 'woocommerce'), wc_price($prices[0])) : wc_price($prices[0]);

	if ($price !== $saleprice) {
		$price = '' . $saleprice . ' ' . $price . '';
	}

	return $price;
}
add_filter('woocommerce_variable_sale_price_html', 'wc_ninja_custom_variable_price', 10, 2);
add_filter('woocommerce_variable_price_html', 'wc_ninja_custom_variable_price', 10, 2);

/**
 * Create a custom field to single product page.
 */

/**
 * @snippet       Display Advanced Custom Fields @ Single Product - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=22015
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_action('woocommerce_before_variations_form', 'product_custom_text', 30);

function product_custom_text()
{
	if (get_field('custom_product_text')) {
		echo "<span class=\"custom-product-text\">" . get_field('custom_product_text') . "<span>";
	}
}


/* Remove Categories from Single Products */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


/**
 * Add custom field under product title on store page.
 */
add_action('woocommerce_after_shop_loop_item_title', 'custom_field_display_below_title', 2);
function custom_field_display_below_title()
{
	global $product;

	// Get the custom field value
	$custom_field = get_post_meta($product->get_id(), 'custom_product_text', true);

	// Display
	if (!empty($custom_field)) {
		echo $custom_field;
	}
}

// Remove the additional information tab
function woo_remove_product_tabs($tabs)
{
	unset($tabs['additional_information']);
	return $tabs;
}
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

add_filter('woocommerce_product_tabs', 'lose_description_tab', 11);

function lose_description_tab($tabs)
{

	unset($tabs['description']);
	return $tabs;
}

/*  Remove Add Cart Button  */
add_filter('wc_add_to_cart_message_html', '__return_null');

/* Rename "Related products" */

add_filter('gettext',  'wps_translate_words_array');
add_filter('ngettext',  'wps_translate_words_array');
function wps_translate_words_array($translated)
{
	$words = array(
		// 'word to translate' = > 'translation'
		'Related Products' => 'Related Products',
	);
	$translated = str_ireplace(array_keys($words),  $words,  $translated);
	return $translated;
}

/* Change Cart Totals test */
add_filter('gettext', 'change_cart_totals_text', 20, 3);
function change_cart_totals_text($translated, $text, $domain)
{
	if (is_cart() && $translated == 'Cart totals') {
		$translated = __('Totals', 'woocommerce');
	}
	return $translated;
}

/**
 * Trim zeros in price decimals
 **/
add_filter('woocommerce_price_trim_zeros', '__return_true');

/* Change apply coupon text */

add_filter('gettext', 'x_translate_text', 20, 3);
function x_translate_text($translated_text, $text, $domain)
{

	$translation = array(
		'Apply Coupon' => 'Apply'
	);

	if (isset($translation[$text])) {
		return $translation[$text];
	}

	return $translated_text;
}

/**
 * Remove related products output
 */
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * @snippet       WooCommerce Change Number of Related Products
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=17473
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.4
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

/* add_filter('woocommerce_output_related_products_args', 'bbloomer_change_number_related_products', 9999);

function bbloomer_change_number_related_products($args)
{
	$args['posts_per_page'] = 2; // # of related products
	$args['columns'] = 2; // # of columns per row
	return $args;
} */


/* --- Below code added by AL.. to show the shipping options in ascending order 
as per the prices ---- */
add_filter( 'woocommerce_package_rates' , 'businessbloomer_sort_shipping_methods', 10, 2 );
   
function businessbloomer_sort_shipping_methods( $rates, $package ) {
    
    if ( empty( $rates ) ) return;
   
    if ( ! is_array( $rates ) ) return;
    
    uasort( $rates, function ( $a, $b ) { 
        if ( $a == $b ) return 0;
        return ( $a->cost < $b->cost ) ? -1 : 1; 
    } );
    
    return $rates;
   
    // NOTE: BEFORE TESTING EMPTY YOUR CART
       
}

// CUSTOM STYLE CSS FILE
wp_enqueue_style( 'custom-style-v2', get_template_directory_uri() . '/css/custom-style-v2.css');

// ACF in JSON
function my_acf_json_save_point( $path ) {
    // Your json path
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

function my_acf_json_load_point( $paths ) {
    // Remove default path
    unset($paths[0]);

    // Add your acf json path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );