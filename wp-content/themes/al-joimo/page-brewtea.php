<?php
/**
 * Template Name: Brewing Instructions
 * 
 * The template for displaying The brewing instructions page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="hero-box container-fluid"> <!-- Container for page title and hero -->
	
		<div class="hero-row skinny row">
			
			<section class="headline-column col-md-3 col-12">
			
				<?php the_field('brew_headline'); ?>
				
			</section>
				
			<section class="hero-column col-md-9 col-12">
			
				<?php the_field('brew_hero'); ?>
				
			</section>
			
		</div>
		
	</div> <!-- Ends container for page title hero -->
	
	
	<div class="content-area container">
	
	<main id="primary" class="site-main row" role="main">
		
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
	
	<div class="content-row content-row1 tea-header-row row"> <!-- 2nd row -->

	
		<section class="content-col instructions-header col-md-4 col-12">
		
			<?php the_field('teapot_header'); ?>
		
		</section>
		
		<section class="content-col instructions-header col-md-4 col-12">
		
			<?php the_field('joimo_time_temp_header'); ?>
		
		</section>
		
		<section class="content-col instructions-header col-md-4 col-12">
		
			<?php the_field('ruby_time_temp_header'); ?>
		
		
		</section>
	
	</div> <!-- Ends 2nd row -->
	
	
	<div class="content-row content-row1 row"> <!-- Third row -->

	
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_teapot'); ?>
		
		</section>
		
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_teapot_temp'); ?>
		
		</section>
		
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_teapot_time'); ?>
		
		
		</section>
	
	</div> <!-- Ends third row -->
	
	<div class="content-row content-row1 row"> <!-- Fourth row -->

	
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_mug'); ?>
		
		</section>
		
		
		<section class="content-col col-md-4 col-12">
		
		<?php the_field('joimo_mug_temp'); ?>
		
		</section>
		
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_mug_time'); ?>
		
		</section>
	
	</div> <!-- Ends fourth row -->
	<div class="content-row content-row1 row"> <!-- fifth row -->

	
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_cold_brew'); ?>
		
		</section>
		
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_coldbrew_temp'); ?>
		
		</section>
		
		<section class="content-col col-md-4 col-12">
		
			<?php the_field('joimo_coldbrew_time'); ?>
		
		</section>
		
	</div>
	

	</div> <!-- Content Area -->

<?php get_footer(); ?>
