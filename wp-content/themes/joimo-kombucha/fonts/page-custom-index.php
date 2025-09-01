<?php
/**
 * Template Name: Custom Index Page
 *
 * This is the template that displays a custom Index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header("v2");
?>

	<div class="hero-box container-fluid"> <!-- Container for page title and hero -->
	
		<div class="hero-row skinny row alternate-block-section">
			
			<section class="headline-column col-md-6 col-12">
			    <h2 class="headline-title">
				<?php the_field('title'); ?>
                </h2>

                <div class="headline-title"><?php the_field('subtitle'); ?></div>
                <!-- <div class="page-link"><?php // the_field('shop_now'); ?></div> -->
				
			</section>
				
			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image'); ?>" />
			</section>
			
		</div>
		

		<div class="hero-row skinny row alternate-block-section-v2">

			<section class="hero-column col-md-6 col-12">	            					
				<img src="<?php the_field('block-image-v2'); ?>" />
			</section>
			
			<section class="headline-column col-md-6 col-12">
				<div class="inner-desc">
					<h2 class="headline-title">
					<?php the_field('group_title_1_v2'); ?>
					</h2>

					<div class="headline-title"><?php the_field('group_subtitle_1_v2'); ?></div>
				</div>
				<div class="inner-desc">
					<h2 class="headline-title">
					<?php the_field('group_2_title_2'); ?>
					</h2>

					<div class="headline-title"><?php the_field('group_2_subtitle_2'); ?></div>
				</div>
				<div class="inner-desc">
					<h2 class="headline-title">
					<?php the_field('group_3_title_3'); ?>
					</h2>

					<div class="headline-title"><?php the_field('group_3_subtitle_3'); ?></div>
				</div>	
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
	
	</div> <!-- Content Area -->

<?php get_footer("v2"); ?>
