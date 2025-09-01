<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays the content to the left and a customizable sidebar to the right.
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
		<img class="hero-spacer" src = "<?php bloginfo('template_directory'); ?>/images/Hero_Spacer_Short2.png" />
		
	</div> <!-- Ends container for page title -->
	
	<div class="content-area container">
	
	<main id="primary" class="site-main row" role="main">
	
		<section class="content-column col-md-8 col-sm-12"> <!-- Content Column -->

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
	
	<?php get_sidebar( 'custom' ); ?>
	
	</main><!-- #primary -->
	
	
	</div> <!-- Content Area -->

<?php get_footer(); ?>
