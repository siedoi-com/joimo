<?php
/**
 * The template for displaying all single posts
 *
 * Template Name: Custom Post Page
 * Template Post Type: post
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	<div class="title-container single-title-container container">
		<section class="row">
			<?php the_title( '<h2 class="entry-title col-md-12">', '</h2>' ); ?>
		</section>
	</div>
	
	<div class="single-container container"> <!-- Begin single container -->
	
		<div id="primary-row" class="content-area row">
			<main id="primary" class="site-main col-md-8 col-sm-12" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-single', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'joimo-kombucha' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'joimo-kombucha' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

			<?php get_sidebar(); ?>
	
		</div> <!-- #Primary Wrapper -->
	
	</div> <!-- End single container -->
	
    <!-- Begin Custom Post single container -->

    <div class="custom_post_template custom_post_alternate_style_template">

    

    </div>

    <!-- End custom post single container -->

	<?php get_footer(); ?>
