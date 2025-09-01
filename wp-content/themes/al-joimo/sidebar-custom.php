<?php
/**
 * This is the template for a custom sidebar. The sidbar name is added through a custom field value.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joimo_Kombucha
 */
$custom_sidebar_name = get_post_meta($post->ID, 'CustomSidebar', true);

if ( is_active_sidebar( $custom_sidebar_name ) ) {

		echo '<aside id="secondary" class="widget-area col-md-4 col-sm-12">';
			dynamic_sidebar( $custom_sidebar_name );
		echo '</aside>';
}
else {

	echo '<aside id="secondary" class="widget-area col-md-4 col-sm-12">';
		dynamic_sidebar( 'sidebar-1' );
	echo '</aside>';
		
}
?>