<?php
/**
 * Template Name: Inside 2 Column Alternate
 * 
 * The template for displaying The two column layout alternate
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
			
				<?php the_field('headline_column'); ?>
				
			</section>
				
			<section class="hero-column col-md-8 col-12">
			
				<?php the_field('hero_column'); ?>
				
			</section>
			
		</div>
		
	</div> <!-- Ends container for page title hero -->
	
	
	
	<div class="content-area container-fluid">
	
	<main id="primary" class="site-main skinny row" role="main">
		
		<section class="content-column col-md-6 col-12"> <!-- Content Column -->

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

		</section> <!-- Ends Content Column1 -->
		
		<section class="content-column content-column2 col-md-6 col-12">
		
			<div class="entry-content"><?php the_field('second_content_column'); ?></div>
		
		</section>
			
				
	</main><!-- #main -->
	
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
