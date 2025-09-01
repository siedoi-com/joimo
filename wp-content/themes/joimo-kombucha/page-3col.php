<?php
/**
 * Template Name: 3-Column Page
 * 
 * The template for displaying a 3-column page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="hero-box container-fluid"> <!-- Container for page title and hero -->
	
		<div class="hero-row skinny row">
			
			<section class="headline-column col-md-4 col-12">
			
				<?php the_field('3-col_headline'); ?>
				
			</section>
				
			<section class="hero-column col-md-8 col-12">
			
				<?php the_field('3-col_hero'); ?>
				
			</section>
			
		</div>
		
	</div> <!-- Ends container for page title hero -->
	
	
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
	
	
	<div class="bios-row bios-row1 skinny row"> <!-- Second row -->

	
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('top_left_content'); ?>
		
		</section>
		
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('top_center_content'); ?>
		
		</section>
		
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('top_right_content'); ?>
		
		</section>
	
	</div> <!-- Ends second row -->
	
	<div class="bios-row skinny row"> <!-- Third row -->

	
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('bottom_left_content'); ?>
		
		</section>
		
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('bottom_center_content'); ?>
		
		</section>
		
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('bottom_right_content'); ?>
		
		</section>
	
	</div> <!-- Ends third row -->
	
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
