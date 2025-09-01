<?php
/**
 * Template Name: Inside 2 Column Contact Page
 * 
 * The template for displaying The two column layout
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="hero-container container"> <!-- Container for page title -->
	
		<header class="hero-header entry-header row">
			<?php the_title( '<h2 class="hero-title entry-title col-md-12">', '</h2>' ); ?>
		</header><!-- .entry-header -->
		<img class="hero-spacer" src = "<?php bloginfo('template_directory'); ?>/images/Brewing_Tea_Spacer.png" />
		
	</div> <!-- Ends container for page title -->
	
	
	<div class="content-area container">
	
	<main id="primary" class="site-main row" role="main">
		
		<section class="content-column1 col-md-6 col 12"> <!-- Content Column Span -->

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

		</section> <!-- Ends Content Column Span -->
			
		<section class="content-column1 col-md-6 col 12">
		
			<div class="entry-content">
		
				<?php the_field('contact_column_1'); ?>
			
			</div>
		
		</section>
		
		<section class="content-column2 col-md-6 col 12">
		
			<div class="entry-content">
		
				<?php the_field('contact_column_2'); ?>
			
			</div>
		
		</section>
			
	</main><!-- #main -->
	
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
