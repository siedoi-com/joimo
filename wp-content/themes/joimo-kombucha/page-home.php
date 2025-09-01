<?php
/**
 * Template Name: Home page
 *
 * The template for displaying the Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="content-area container">
	
	<main id="primary" class="site-main row" role="main">
	
		<section class="content-column col-md-6 col-sm-12 col-12"> <!-- Content Column -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page-home' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</section> <!-- Ends Content Column -->
		
		<section class="empty-column col-md-6 col-sm-12 col-12"> <!-- Empty Column -->
		
		
		
		</section><!-- Ends Empty Column -->
	
	</main><!-- #main -->
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
