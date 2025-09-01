<?php
/**
 * Template Name: About Page
 * 
 * The template for displaying The About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="hero-container container-fluid"> <!-- Container for page title -->
	
		<header class="hero-header entry-header row">
			<?php the_title( '<h2 class="hero-title entry-title col-md-12">', '</h2>' ); ?>
			<img class="hero-spacer" src = "<?php bloginfo('template_directory'); ?>/images/Spacer_For_Header_Images.png" />
		</header>
		
		
	</div> <!-- Ends container for page title -->
	
	
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
	
	
	<div class="bios-row row"> <!-- Third row -->

	
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('bio_profile_1'); ?>
		
		</section>
		
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('bio_profile_2'); ?>
		
		</section>
		
		<section class="bio-col col-md-4 col-12">
		
			<?php the_field('bio_profile_3'); ?>
		
		</section>
	
	</div> <!-- Ends third row -->
	
	<div class="concluding-row row"> <!-- Fourth row -->
	
		<section class="conclusion-col col-md-12">
		
			<?php the_field('concluding_paragraph'); ?>
		
		</section>
	
	</div> <!-- Ends fourth row -->
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
