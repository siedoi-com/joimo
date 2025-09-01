<?php
/**
 * Template Name: Standard Page Format
 *
 * This is the template that displays most inside pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="content-area container">
	
	<main id="primary" class="site-main row" role="main">
	
		<section class="left-margin col-md-2"> <!-- Left margin -->
		
		</section> <!-- Ends left margin -->
	
		<section class="content-column col-md-8 col-sm-12"> <!-- Content Column -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</section> <!-- Ends Content Column -->
		
		<section class="right-margin col-md-2"> <!-- right margin -->
		
		</section> <!-- Ends right margin -->
	
	</main><!-- #main -->
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
