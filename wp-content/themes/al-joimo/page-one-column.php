<?php
/**
 * Template Name: One-Column Layout
 *
 * This is the template that displays a one-column page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="hero-box container"> <!-- Container for page title and hero -->
	
		<div class="hero-row row">
			
			<section class="headline-column col-md-6 col-12">
			
				<?php the_field('headline_column'); ?>
				
			</section>
				
			<section class="hero-column col-md-6 col-12">
			
				<?php the_field('hero_column'); ?>
				
			</section>
			
		</div>
		
	</div> <!-- Ends container for page title hero -->
	
	<div class="content-area container">
	
	<main id="primary" class="site-main row" role="main">
	
		<section class="spacer-col col-md-1 col-12"></section>
	
		<section class="content-column col-md-10"> <!-- Content Column -->

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
		
		<section class="spacer-col col-md-1 col-12"></section>
	
	</main><!-- #main -->
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
