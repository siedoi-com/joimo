<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

	


	<main id="primary" class="site-main search-main container" role="main">

		
		<?php if ( have_posts() ) : ?>
			
						
			<header class="page-header row">
			<section class="col-spacer col-md-1 col 12"></section>
				<h1 class="page-title col-md-10 col-12">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'joimo-kombucha' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
				<section class="col-spacer col-md-1 col-12"></section>
			</header> <!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		


	</main><!-- #main -->
	

<?php
get_footer( 'v2' );
