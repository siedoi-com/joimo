<?php
/**
 * Template Name: Custom Shop Page Filter
 *
 * This is the template that displays a custom shop.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

  <section class="hero-column col-md-12 col-12 shop-hero-section">
		<div class="hero-row skinny row">
			
			<div class="headline-block col-md-12 col-12">
			
				<?php the_field('shop_headline'); ?>
				
			</div>
    </div>
    <?php if( get_field('shop_hero_desktop_banner') ): ?>    
		<div class="hero-desktop-image-block">                
				<img src="<?php the_field('shop_hero_desktop_banner'); ?>" alt="Hero Shop Banner">
		</div>
    <?php endif; ?>    

    <?php if( get_field('shop_hero_mobile_banner') ): ?>    
		<div class="hero-mobile-image-block">                
				<img src="<?php the_field('shop_hero_mobile_banner'); ?>" alt="Hero Shop Banner">
		</div>
    <?php endif; ?>      
	
  </section>	
<!-- Ends container for page title hero -->
	
<div class="content-area container-filter">	
		<?php
			
			if ( ! is_active_sidebar( 'shop-pro-filter' ) ) {
				return;
			}

		?>  

		<?php dynamic_sidebar( 'shop-pro-filter' ); ?>				

		<span class="filter_mob_close_button">				
			<svg class="filter_mob__close_icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M7.63259 8.81101L23.1889 24.3674" stroke="#2A4934" stroke-width="1.5" stroke-linecap="round"/>
			<path d="M23.896 8.33962L8.33967 23.896" stroke="#2A4934" stroke-width="1.5" stroke-linecap="round"/>
			</svg>
		</span>


</div>




	<div class="content-area container-fluid">
	
	<main id="primary" class="site-main skinny row" role="main">
	
		<section class="content-column col-md-12"> <!-- Content Column -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page-sb' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</section> <!-- Ends Content Column -->
	
	</main><!-- #main -->
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>

<span class="filter_mob_button">
		<svg class="filter_mob_icon" width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M22.9999 1L22.9999 23" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M13.8334 1L13.8334 23" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M4.66667 1L4.66667 23" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M1 4.66671H8.33333" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M10.1667 19.3333H17.5001" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		<path d="M19.3333 12H26.6666" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
		</svg>
</span>