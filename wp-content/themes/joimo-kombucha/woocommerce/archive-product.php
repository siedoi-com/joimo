<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

wp_redirect(  get_permalink(53) );
exit;

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<!-- sdfsdfdfds -->
<header class="woocommerce-products-header">

	<span class="filter_mob_close_button">
		<svg class="filter_mob__close_icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M7.63259 8.81101L23.1889 24.3674" stroke="#2A4934" stroke-width="1.5" stroke-linecap="round"></path>
			<path d="M23.896 8.33962L8.33967 23.896" stroke="#2A4934" stroke-width="1.5" stroke-linecap="round"></path>
		</svg>
	</span>

	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>

	
</header>

<span class="filter_mob_button">
	
		<svg class="active_icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		<circle cx="10" cy="10" r="10" fill="#CDE08D"/>
		<path d="M5 9.81818L8.125 13L15 6" stroke="#2A4934" stroke-width="1.5" stroke-linecap="round"/>
		</svg>

		<svg class="filter_mob_icon" width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M22.9999 1L22.9999 23" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M13.8334 1L13.8334 23" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M4.66667 1L4.66667 23" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M1 4.66671H8.33333" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M10.1667 19.3333H17.5001" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M19.3333 12H26.6666" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		</svg>
</span>

<?php

if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
