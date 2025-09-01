<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joimo_Kombucha
 */

if ( ! is_active_sidebar( 'shop-sb' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4 col-sm-12">
	<?php dynamic_sidebar( 'shop-sb' ); ?>
</aside><!-- #secondary -->
