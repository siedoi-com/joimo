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
	wp_enqueue_style('joimo-kombucha-style', get_stylesheet_uri(), array(), '2.13.9');
	wp_style_add_data('joimo-kombucha-style', 'rtl', 'replace');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.5.2', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/all.css', false, '5.14.0', 'all');
	wp_enqueue_style('joimo-fonts', get_template_directory_uri() . '/css/joimo-fonts.css', false, '1.0', 'all');
	wp_enqueue_style('dashicons');

	if (is_front_page() || is_page_template('page-shop.php')) {
		wp_enqueue_style( 'styles-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array());
		wp_enqueue_script('script-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array('jquery'), _S_VERSION, true);
		wp_enqueue_style( 'custom-style-v2', get_template_directory_uri() . '/css/custom-style-v2.css', 9.0);
		wp_enqueue_style( 'styles-home-combucha', get_template_directory_uri() . '/css/home-styles-combucha.css', array());
	}

    if (is_product()) {
        wp_enqueue_style( 'styles-product-combucha', get_template_directory_uri() . '/css/styles-combucha.css', array());
        wp_enqueue_style( 'styles-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array());
		wp_enqueue_script('script-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array('jquery'), _S_VERSION, true);
        wp_enqueue_script('page-product-kombucha', get_template_directory_uri() . '/js/kombucha-product.js', array(), _S_VERSION, true);
    }

    if (is_page_template('page-shop.php')) {
        wp_enqueue_script('gsap-core', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), null, true);
        wp_enqueue_script('gsap-flip', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Flip.min.js', array('gsap-core'), null, true);
        wp_enqueue_script('shop-page', get_template_directory_uri() . '/js/shop-page.js', array('gsap-core', 'gsap-flip'), _S_VERSION, true);
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

add_action( 'woocommerce_single_product_summary', 'custom_action_after_single_product_title', 1 );
function custom_action_after_single_product_title() {
    global $product;

    $product_id = $product->get_id(); // The product ID

    // Your custom field "Book author"
    $pro_label = get_post_meta($product_id, "custom_product_label", true);

	if($pro_label){
			// Displaying your custom field under the title
			echo '<p class="pro-label">' . $pro_label . '</p>';
	}

}

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

add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );

function bbloomer_display_quantity_plus() {
   echo '<button type="button" class="plus" ><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.07602 7.34133H5.18853V11.4539C5.18853 11.7425 5.30108 12.0136 5.504 12.2149C5.70409 12.4149 5.98148 12.53 6.26455 12.53C6.85741 12.53 7.34057 12.047 7.34057 11.4539V7.34133H11.4531C11.7413 7.34133 12.0124 7.22878 12.2153 7.025C12.4188 6.82123 12.5297 6.5508 12.5291 6.26524C12.5291 5.67216 12.0465 5.18915 11.4531 5.18915H7.34057V1.07657C7.34057 0.788523 7.22802 0.517457 7.02453 0.314318C6.82103 0.111819 6.55217 0.000478967 6.2691 0.000478967C6.26625 -0.000159656 6.26455 -0.000159656 6.26341 0.000478967C5.97693 0.000478967 5.70807 0.111819 5.50457 0.314318C5.30108 0.518096 5.18853 0.788523 5.18853 1.07657V5.18915H1.07602C0.482588 5.18915 0 5.67217 0 6.26524C0 6.55137 0.110842 6.82122 0.316609 7.02813C0.520104 7.22999 0.789535 7.34133 1.07602 7.34133Z" fill="#7C7C7C"/></svg></button>';
}

add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );

function bbloomer_display_quantity_minus() {
   echo '<button type="button" class="minus" ><svg width="13" height="3" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.07602 2.15218H11.4531C11.7413 2.15218 12.0124 2.03963 12.2153 1.83585C12.4188 1.63207 12.5297 1.36165 12.5291 1.07609C12.5291 0.483015 12.0465 0 11.4531 0H1.07602C0.482588 0 0 0.483015 0 1.07609C0 1.36222 0.110842 1.63207 0.316609 1.83898C0.520104 2.04084 0.789535 2.15218 1.07602 2.15218Z" fill="#7C7C7C"/></svg></button>';
}

// -------------
// 2. Trigger update quantity script

add_action( 'wp_footer', 'bbloomer_add_cart_quantity_plus_minus' );

function bbloomer_add_cart_quantity_plus_minus() {

   if ( ! is_product() && ! is_cart() ) return;

   wc_enqueue_js( "

      $('.woocommerce-cart form.cart, .woocommerce-cart form.woocommerce-cart-form').on( 'click', 'button.plus, button.minus', function() {

         var qty = $( this ).parent( '.quantity' ).find( '.qty' );
         var val = parseFloat(qty.val());
         var max = parseFloat(qty.attr( 'max' ));
         var min = parseFloat(qty.attr( 'min' ));
         var step = parseFloat(qty.attr( 'step' ));

         if ( $( this ).is( '.plus' ) ) {
            if ( max && ( max <= val ) ) {
               qty.val( max );
            } else {
               qty.val( val + step );
            }
         } else {
            if ( min && ( min >= val ) ) {
               qty.val( min );
            } else if ( val > 1 ) {
               qty.val( val - step );
            }
         }

      });


      $('.product-template-default.single-product form.cart,.product-template-default.single-product form.woocommerce-cart-form').on( 'click', 'button.plus, button.minus', function() {

		var qty = $( this ).closest('form').find( '.quantity' ).find( '.qty' );
		var val = parseFloat(qty.val());
		var max = parseFloat(qty.attr( 'max' ));
		var min = parseFloat(qty.attr( 'min' ));
		var step = parseFloat(qty.attr( 'step' ));

		if ( $( this ).is( '.plus' ) ) {
		   if ( max && ( max <= val ) ) {
			  qty.val( max );
		   } else {
			  qty.val( val + step );
		   }
		} else {
		   if ( min && ( min >= val ) ) {
			  qty.val( min );
		   } else if ( val > 1 ) {
			  qty.val( val - step );
		   }
		}

	 });

		$( '.single_variation_wrap' ).on( 'show_variation', function ( event, variation ) {
			var get_selected_price = $('.single_variation_wrap .woocommerce-variation-price .price').html();
			$('.single_add_to_cart_button .add_to_cart_inner_price').html(get_selected_price);

		} );



   " );
}

//Adding a Scroll Back-to-Top Button

add_action( 'wp_footer', 'al_add_scroll_back_to_top_button' );

function al_add_scroll_back_to_top_button() {

   wc_enqueue_js( "

   jQuery('.tax-product_cat .woocommerce-products-header .berocket_single_filter_widget .bapf_sfilter.bapf_ccolaps').find('.bapf_colaps_togl').trigger('click');

	$('body').on('click', '.explore-page-section .simplefilter li.active svg', function() {
		if($(this).attr('id') == 'all'){
		}else{
			$('.explore-page-section .simplefilter #all').trigger('click');
		}
	});

	if(jQuery('.tax-product_cat .woocommerce-products-header .bapf_sfa_mt_hide .berocket_aapf_widget_selected_area .bapf_sfa_taxonomy').length){
		jQuery('body').addClass('filter_option_is_selected');
	}else{
		jQuery('body').removeClass('filter_option_is_selected');
	}

   var offset = 100;
    var speed = 250;
    var duration = 500;
        $(window).scroll(function(){
            if ($(this).scrollTop() < offset) {
                      $('.topbutton') .fadeOut(duration);
            } else {
                      $('.topbutton') .fadeIn(duration);
            }
        });
     $('.topbutton').on('click', function(){
            $('html, body').animate({scrollTop:0}, speed);
            return false;
            });

			$('body').on('click', '.filter_mob_button', function() {
				$('body').toggleClass('active_filter');
			});
			$('body').on('click', '.filter_mob_close_button', function() {
				$('body').removeClass('active_filter');
			});

   " );
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

add_action('wp_enqueue_scripts', 'load_parent_style_v2', 150);
function load_parent_style_v2() {
    wp_enqueue_style( 'custom-style-v2', get_template_directory_uri() . '/css/custom-style-v2.css', 9.0);
}


// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
	$fields['billing']['billing_city']['label'] = 'City';
	$fields['billing']['billing_city']['required'] = true;
	return $fields;
}


function action_woocommerce_after_shop_loop_item(  ) {
	global $product;

	// Get the custom field value
	$custom_field_label = get_post_meta($product->get_id(), 'custom_product_label', true);

	// Display
	if (!empty($custom_field_label)) {
		echo "<span class=\"pro_label\">" . $custom_field_label . "<span>";
	}
};
// add the action
add_action( 'woocommerce_after_shop_loop_item', 'action_woocommerce_after_shop_loop_item', 10, 0 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

add_action( 'woocommerce_after_variations_form', 'add_quantity_field_after_variations_form', 10 );
function add_quantity_field_after_variations_form() {
    global $product;

    do_action( 'woocommerce_before_add_to_cart_quantity' );
    woocommerce_quantity_input(
        array(
            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
        )
    );
    do_action( 'woocommerce_after_add_to_cart_quantity' );
}


// Replace the default password change email
add_filter('password_change_email', 'change_password_mail_message', 10, 3);
function change_password_mail_message( $change_mail, $user, $userdata ) {
    add_filter( 'wp_mail_content_type', 'set_email_html_content_type' );
	$user_id = get_current_user_id();
	$userData = get_user_by('id', $user_id);
    $change_mail[ 'message' ] = '<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif">
				<tbody><tr style="margin:0;padding:0">
					<td align="center" valign="top" style="margin:0;padding:0">
						<table border="0" cellpadding="0" cellspacing="0" width="600px" id="m_5922297031243877281heading" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif;max-width:100%">
							<tbody><tr class="m_5922297031243877281heading-row" style="margin:0;padding:0">
								<td class="m_5922297031243877281heading-logo-wrapper" style="margin:0;padding:0;background-color:#ffffff">

										<img src="https://ci5.googleusercontent.com/proxy/gZ9QHiuU-iCqx0Rp92JcEDnNX2KSKmEmyE3UqLJM3p_JcY2-dGQO-OlNg4yt6Z9ebF_9nkNPbgtoBwicZJKnVs2slzF9Nx2ZB8voR0k90XM7GzFDdM5PrSTm6utuEsHJm28UeCsd4d5VQ41fAxQLdKz6gobi7DQr=s0-d-e1-ft#https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2021/04/Joimo_Logo_RGB_Horizontal_R-2.png" style="padding:0;max-width:100%;width:138px;margin:10px 0 10px 15px" class="CToWUd">

								</td>
								<td class="m_5922297031243877281heading-coll" align="right" style="margin:0;padding:0;background-color:#ffffff">
									<table border="0" cellpadding="0" cellspacing="0" width="auto" id="m_5922297031243877281nav-table" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif">
										<tbody><tr id="m_5922297031243877281menu" style="margin:0;padding:0">
											<td style="margin:0;padding:0;background-color:#ffffff"><a href="https://joimotea.com/about-us" style="margin:0;color:#221e1f;text-transform:uppercase;font-weight:400;font-size:16px;line-height:19px;text-decoration:none;padding:0 8px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/about-us&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw0uEHnsYznCH8vaGRX1kI4A">ABOUT</a></td>
											<td style="margin:0;padding:0;background-color:#ffffff"><a href="https://joimotea.com/explore-recipes-stories" style="margin:0;color:#221e1f;text-transform:uppercase;font-weight:400;font-size:16px;line-height:19px;text-decoration:none;padding:0 8px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/explore-recipes-stories&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw2TKwcRpQiqqI7Fx_WBK9CY">explore</a></td>
											<td style="margin:0;padding:0;background-color:#ffffff;padding-right:25px"><a href="https://joimotea.com/shop-tea" style="margin:0;color:#221e1f;text-transform:uppercase;font-weight:400;font-size:16px;line-height:19px;text-decoration:none;padding:0 8px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/shop-tea&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw3yuSg18SBPzgG_qoiVJq6L">SHOP</a></td>
										</tr>
									</tbody></table>
								</td>
							</tr>
						</tbody></table>
						<table border="0" cellpadding="0" cellspacing="0" width="600px" id="m_5922297031243877281template_container" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif;max-width:100%;background-color:#2a4934;color:#ededeb;font-size:18px;line-height:22px">
							<tbody><tr style="margin:0;padding:0">
								<td align="center" valign="top" style="margin:0;padding:0">

									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="m_5922297031243877281template_header" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif">
										<tbody><tr style="margin:0;padding:0">
											<td id="m_5922297031243877281header_wrapper" style="margin:0;text-align:center;padding:55px 100px 20px 100px">
												<h1 style="margin:0;padding:0;font-size:28px;line-height:38px;color:#ededeb">Change password!</h1>
											</td>
										</tr>
									</tbody></table>

								</td>
							</tr>
							<tr style="margin:0;padding:0">
								<td align="center" valign="top" style="margin:0;padding:0">

									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="m_5922297031243877281template_body" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif">
										<tbody><tr style="margin:0;padding:0">
											<td valign="top" id="m_5922297031243877281body_content" style="margin:0;padding:0">

												<table border="0" cellpadding="20" cellspacing="0" width="100%" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif">
													<tbody><tr style="margin:0;padding:0">
														<td valign="top" style="margin:0;padding:0">
															<div id="m_5922297031243877281body_content_inner" style="margin:0;font-size:16px;line-height:20px;color:#ededeb;padding:0 100px 40px 100px">


																<p>
																	Hi ' . $userData->display_name. ', This notice confirms that your password was changed on Joimo Tea.
																</p>
																<p>
																If you did not change your password, please contact the Site Administrator at <a style="color: #fff;" href="mailto:rinna.lee@joimotea.com">rinna.lee@joimotea.com</a> This email has been sent to ' . $userData->user_email . 'Regards, All at Joimo Tea https://staging-joimoteacom.kinsta.cloud' . '</p>
															</div>
														</td>
													</tr>
												</tbody></table>

											</td>
										</tr>
										<tr style="margin:0;padding:0">
											<td style="margin:0;padding:0">
												<img src="https://ci5.googleusercontent.com/proxy/RjUZbTySyEq6XvkGCQZTXXlQGE1BD0PrqtpNeZTR410P9oGqOkbFIvy1JTsh7utih8fiC8X1UmtZMN4Y1fOhndVpsKCCUFfOgAFmPQbZIgoGpLGjZ6N8SrHWGGzuQtTDs6Ek=s0-d-e1-ft#https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2022/05/DSC_4221.jpg" width="100%" style="margin:0;padding:0;max-width:100%" class="CToWUd">
											</td>
										</tr>
									</tbody></table>

								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				<tr style="margin:0;padding:0">
					<td align="center" valign="top" style="margin:0;padding:0">

						<table border="0" cellpadding="10" cellspacing="0" width="600px" id="m_5922297031243877281template_footer" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif">
							<tbody><tr style="margin:0;padding:0">
								<td valign="top" style="margin:0;padding:0">
									<table border="0" cellpadding="10" cellspacing="0" width="100%" id="m_5922297031243877281footer" style="margin:0;padding:0;font-family:Arial,Helvetica,sans-serif;background-color:#a7988f">
										<tbody><tr style="margin:0;padding:0">
											<td class="m_5922297031243877281footer-first-col" style="margin:0;padding:45px 10px 35px 100px">
												<div style="margin:0;padding:0;margin-top:25px">
													<a href="https://joimotea.com/about-us/" style="margin:0;padding:0;font-weight:700;margin-bottom:10px;font-size:16px;line-height:11px;text-decoration:none;display:block;color:#ededeb" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/about-us/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw0BX8Rg3j32Cj23nhbLmbXB">About</a>
													<div style="margin:0;padding:0">
														<a href="https://joimotea.com/about-us/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/about-us/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw0BX8Rg3j32Cj23nhbLmbXB">Our Story</a>
														<a href="https://joimotea.com/about-tea/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/about-tea/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw1G3BmZIOmvtzlBumyz1L65">Our Tea</a>
													</div>
												</div>
												<div style="margin:0;padding:0;margin-top:25px">
													<a href="https://joimotea.com/shop-tea" style="margin:0;padding:0;font-weight:700;margin-bottom:10px;font-size:16px;line-height:11px;text-decoration:none;display:block;color:#ededeb" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/shop-tea&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw3yuSg18SBPzgG_qoiVJq6L">Shop</a>
													<div style="margin:0;padding:0">
														<a href="https://joimotea.com/shop-tea/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/shop-tea/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw3MFZ5F-_LxyawjyCRjc6cy">Tea</a>
														<a href="https://joimotea.com/shop-home-and-teaware/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/shop-home-and-teaware/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw1pbzsdIgVMPMDtK7xNkFCK">Home and Teaware</a>
														<a href="https://joimotea.com/product/gift-certificate/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/product/gift-certificate/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw1P1zxIkmoyoGbWm9hQUttA">E-Gift Card</a>
													</div>
												</div>
											</td>
											<td class="m_5922297031243877281footer-second-col" style="margin:0;padding:45px 100px 35px 10px">
												<div style="margin:0;padding:0;margin-top:25px">
													<a href="https://joimotea.com/contact-us/" style="margin:0;padding:0;font-weight:700;margin-bottom:10px;font-size:16px;line-height:11px;text-decoration:none;display:block;color:#ededeb" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/contact-us/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw1SGtPthimTNl5-_3eJY1l1">Support</a>
													<div style="margin:0;padding:0">
														<a href="https://joimotea.com/contact-us/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/contact-us/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw1SGtPthimTNl5-_3eJY1l1">Contact</a>
														<a href="https://joimotea.com/shipping-returns/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/shipping-returns/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw36eYmxLSCl14nJewYp6UOF">Shipping &amp; Returns</a>
														<a href="https://joimotea.com/faq/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/faq/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw2XamrALAigVh4-l5Nyiir-">FAQ</a>
														<a href="https://joimotea.com/wholesale/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/wholesale/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw3oMZ_Iy90O0L1zscgl-1vQ">Wholesale</a>
														<a href="https://joimotea.com/privacy-policy/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/privacy-policy/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw2xJyw6QiObgy4xW5zZHSfa">Privacy Policy</a>
														<a href="https://joimotea.com/terms-of-use/" style="margin:0;padding:0;margin-top:8px;display:block;color:#ededeb;font-weight:400;font-size:14px;line-height:11px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://joimotea.com/terms-of-use/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw1w7dtbtYgID__bujt4akcy">Terms of Use</a>
													</div>
												</div>
												<div style="margin:0;padding:0;margin-top:25px">
													<a href="https://www.facebook.com/joimocompany" style="margin:0;padding:0;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/joimocompany&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw3a5ybOOY1zARKKmZRxpwFO">
														<img src="https://ci5.googleusercontent.com/proxy/8P1_8Ogmx_DlxE-bxTvcfy2co-OFtre-Jkb5sgS_mzJSDn5OKkFc_FXMrr-A1D-8lhtJULuKNN05zSHJKoZPiKxpyRH_a5BoxQ-SFoLrg8smxMmBFxr0xKq7fsryQ8QdVup8=s0-d-e1-ft#https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2022/05/Facebook.png" width="24px" style="margin:0;padding:0;max-width:100%" class="CToWUd">
													</a>
													<a href="https://www.instagram.com/joimotea/" style="margin:0;padding:0;margin-left:20px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/joimotea/&amp;source=gmail&amp;ust=1652461808722000&amp;usg=AOvVaw3Qdmk01bRJREKJFt0xNlMW">
														<img src="https://ci4.googleusercontent.com/proxy/qqQX5PgWwGW2z2h0NJ-YbcLXnqHsMzdllMqPTon7CDQCjk_2QyW9vDhCgFdObKX-I2D1SgYGamdH1onZhZ6QeTKKeIbW3SynlPoGfgCaLi0qdYUoerpMPjh2BSKaQnfYZn4WBQ=s0-d-e1-ft#https://staging-joimoteacom.kinsta.cloud/wp-content/uploads/2022/05/Instagram.png" width="24px" style="margin:0;padding:0;max-width:100%" class="CToWUd">
													</a>
												</div>
											</td>
										</tr>
										<tr style="margin:0;padding:0">
											<td colspan="2" valign="middle" id="m_5922297031243877281credit" style="margin:0;color:#ededeb;padding:30px 100px 30px 100px;font-size:12px">
												<p style="margin:0;padding:0">Joimo © 2020 all rights reserved –<br style="margin:0;padding:0">
 Customer service: (213) 290-0143, <a href="mailto:hello@joimotea.com" target="_blank">hello@joimotea.com</a></p>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
						</tbody></table>

					</td>
				</tr>
			</tbody></table>';
    $change_mail[ 'subject' ] = 'Change password';

    return $change_mail;
}


// change name letter
function change_name($name) {
	return 'Joimo';
}

add_filter('wp_mail_from_name','change_name');

add_action('wp_head', 'get_current_product_category');

function get_current_product_category(){

        global $post;

       $terms = get_the_terms( $post->ID, 'product_cat' );

        $nterms = get_the_terms( $post->ID, 'product_tag'  );

        foreach ($terms  as $term  ) {                    

            $product_cat_id = $term->term_id;              

            $product_cat_name = $term->name;            

            break;

        }

       return $product_cat_name;

}

// Brewing AJAX Endpoint
add_action( 'rest_api_init', function() {
	register_rest_route( 'get', '/brewing/(?P<id>\d+)', [
		'method'   => 'GET',
		'callback' => 'get_brewing',
	] );
} );

function get_brewing($data ) {
	$brewing = $data['id'];

	$args = array(  
		'p' => $brewing,
		'post_type' => 'product',
		'posts_per_page' => 1, 
	);

	$loop = new WP_Query( $args ); 

	$loop->the_post();
	$brewingN = get_field('select_bewing', $post->ID);
	$brewingPageId = $brewingN->ID;
	$brewingRows = get_field('brewing_types', $brewingPageId);
	$loop->post->brewing = $brewingRows;

	$result = (object) array (
		'rows' => $loop->post->brewing,
		'product_link' => get_permalink( $post->ID )
	);

	wp_reset_postdata();

	return $result;
}

// Explore and recipes Endpoint
add_action( 'rest_api_init', function() {
	register_rest_route( 'get', '/recipes', [
		'method'   => WP_REST_Server::READABLE,
		'callback' => 'get_recipes',
	] );
} );

function get_recipes( ) {
	$recipe_cat = $_GET['cat'];
	$recipesArr = explode(',', $recipe_cat);

	$recipes = array();

	$args = array(
		'tag__in' => $recipesArr,
		'posts_per_page' => 9,
		'paged' => 1,
		'order' => 'DESC',
		'post_status' => 'publish',
	);

	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) {
		$loop->the_post(); 
		$post_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );

		$title_p_tag = "";

		$posttags = get_the_tags();
		if ($posttags)
		{
			$first=true;
			foreach($posttags as $tag) 
			{
				if($first)
				{                
					$title_p_tag = str_replace("#","",$tag->name); 
					$first=false;
				}
				else
				{                
					$title_p_tag = str_replace("#","",$tag->name);
				}

				// $title_p_tag_single = substr($title_p_tag, 0, -1);
			}
		}

		$recipe = (object) array (
			'id' => get_the_ID(),
			'link' => get_permalink(),
			'title' => get_the_title(),
			'img' => $post_image[0],
			'except' => get_the_excerpt(),
			'tag' => $title_p_tag
		);

		array_push($recipes, $recipe);
	} 

	$result = (object) array (
		'recipes' => $recipes
	);

	wp_reset_postdata();

	return $result;
}

// Theme options ACF
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}

/**
 * @snippet       Display Out of Stock Products via Shortcode - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 5
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
   
add_shortcode( 'out_of_stock_products', 'bbloomer_out_of_stock_products_shortcode' );
   
function bbloomer_out_of_stock_products_shortcode() {
 
   $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'meta_query' => array(
         array(
            'key' => '_stock_status',
            'value' => 'outofstock',
         )
      ),
      'fields' => 'ids',
   );
    
   $product_ids = get_posts( $args ); 
   $product_ids = implode( ",", $product_ids );
    
   return do_shortcode("[products ids='$product_ids']");
 
}

add_filter( 'pre_option_woocommerce_hide_out_of_stock_items', 'ql_hide_out_of_stock_exception' ); 
function ql_hide_out_of_stock_exception( $hide ) { 
   if ( is_page( 55 ) ) { 
     $hide = 'no'; 
   } 
   return $hide; 
}

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