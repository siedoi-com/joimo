<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joimo_Kombucha
 */

?>

	<footer id="colophon" class="site-footer container-fluid">
		
		<div class="site-map row">
			<section class="footer-col col-md-3 col-12"> <!-- First footer menu -->
			
				<?php
					if ( ! is_active_sidebar( 'footer-menu-1' ) ) {
						return;
					}
				?>

			<aside id="footer-menu-1" class="widget-area">
				<?php dynamic_sidebar( 'footer-menu-1' ); ?>
			</aside>

				
			</section><!-- Ends first footer menu -->
			
			<section class="footer-col col-md-3  col-12"> <!-- Second footer menu -->
			
				<?php
					if ( ! is_active_sidebar( 'footer-menu-2' ) ) {
						return;
					}
				?>

			<aside id="footer-menu-2" class="widget-area">
				<?php dynamic_sidebar( 'footer-menu-2' ); ?>
			</aside>
								
			</section><!-- Ends second footer menu -->
			
			<section class="footer-col col-md-3 col-12"> <!-- Third footer menu -->
				
				<?php
					if ( ! is_active_sidebar( 'footer-menu-3' ) ) {
						return;
					}
				?>

				<aside id="footer-menu-3" class="widget-area">
					<?php dynamic_sidebar( 'footer-menu-3' ); ?>
				</aside>
				
			</section><!-- Ends third footer menu -->
			
			
			<section class="footer-col col-md-3 col-12"> <!-- Last column -->
			
				<?php
					if ( ! is_active_sidebar( 'footer-social-subscribe' ) ) {
						return;
					}
				?>

				<aside id="social-subscribe" class="widget-area">
					<?php dynamic_sidebar( 'footer-social-subscribe' ); ?>
				</aside>
			
			</section><!-- Ends last column -->
			
		</div>
		
		<div class="site-info row">
		
		<section class="copyright-credit col-md-12">
		
		<p><?php bloginfo( 'name' ); ?>. All rights reserved. &copy; <?php echo date("Y"); ?></p>
			
			</section> <!-- Copyright/Credit -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
