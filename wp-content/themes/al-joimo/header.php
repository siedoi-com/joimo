<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joimo_Kombucha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<?php
function is_product_page() {
    return strpos($_SERVER['REQUEST_URI'], '/product/') !== false;
}
if (is_product_page()) {
    echo '<style>ul > li { border-radius: 50px !important; }</style>';
}
/*
if (strpos($_SERVER['REQUEST_URI'], '/product/') !== false) {
    wp_add_inline_style('your-theme-style', 'ul > li { border-radius: 50px; }');
}
*/
?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site site-header-v2 container-fluid fixed-top">  <!-- Begin #page -->
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'joimo-kombucha' ); ?></a>
	<header id="masthead" class="site-header row">
		<div class="site-branding col-md-3 col-4">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-md-6 col-4">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="dashicons dashicons-menu-alt"></span> <?php esc_html_e( 'Menu', 'joimo-kombucha' ); ?></button>

			<div id="mobile-serach-menu-1" class="widget-area">
				<?php dynamic_sidebar( 'mobile-search-menu-1' ); ?>
			</div>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<div calss="mobile_search_bar_panel"></div><ul id="%1$s" class="%2$s nav-menu" role="menu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation  fgl --> 
		
		<nav id="shop-support" class="s-support-navigation col-md-3 col-4">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'shopper-support',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
</div> <!-- Ends #page -->
